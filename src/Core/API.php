<?php
/**
 * Created for tencent-ai.
 * User: 丁海军
 * Date: 2018/6/23
 * Time: 下午5:10.
 */

namespace Justmd5\TencentAi\Core;

use Hanson\Foundation\AbstractAPI;
use Justmd5\TencentAi\Core\Traits\ArgumentProcessingTrait;
use Justmd5\TencentAi\Exception\IllegalParameterException;
use Justmd5\TencentAi\Exception\NotFoundException;
use Overtrue\Validation\Factory as ValidatorFactory;
use Overtrue\Validation\Translator;

class API extends AbstractAPI
{
    use ArgumentProcessingTrait;

    const BASE_API = 'https://api.ai.qq.com/fcgi-bin/';

    /**
     * @var string
     */
    protected $category;
    /**
     * @var Signature
     */
    protected $signature;
    protected $classify;
    protected $filter;

    public function __construct(Signature $signature, $classify, $filter)
    {
        $this->signature = $signature;
        $this->classify = $classify;
        $this->filter = $filter;
    }

    /**
     * 请求API.
     *
     * @param string $method
     * @param array  $params
     * @param array  $files
     *
     * @throws NotFoundException
     * @throws IllegalParameterException
     *
     * @return array
     */
    public function request($method, $params = [], $files = [])
    {
        $url = sprintf('%s/%s/%s_%s', self::BASE_API, $this->classify, $this->classify, strtolower($method));
        if (!array_key_exists(strtolower($method), $this->filter)) {
            throw new NotFoundException(sprintf('the url %s can not found!please reaffirm', $url));
        }
        $factory = new ValidatorFactory(new Translator());
        $validator = $factory->make($params, $this->filter[$method]);
        if (!$validator->passes()) {
            throw new IllegalParameterException(sprintf('参数错误:[%s]', json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)));
        }
        $http = $this->getHttp();
        $params = $this->processParams($this->signature, $params);
        $response = $files ? $http->upload($url, $params, $files) : $http->post($url, $params);
        $result = json_decode(strval($response->getBody()), true);
        if (isset($result['ret'])) {
            return $result;
        }

        return [
            'ret' => '-1',
            'msg' => sprintf('返回结果:[%s]', json_encode($result, JSON_UNESCAPED_UNICODE)),
        ];
    }

    /**
     * Push guzzle middleware before request.
     *
     * @return mixed
     */
    public function middlewares()
    {
    }
}
