<?php
/**
 * Created for tencent-ai.
 * User: 丁海军
 * Date: 2018/6/23
 * Time: 下午5:10.
 */

namespace Justmd5\TencentAi\Core;

class Signature
{
    /**
     * @var string
     */
    private $appId;
    /**
     * @var string
     */
    private $secret;

    /**
     * Signature constructor.
     *
     * @param $appId
     * @param $secret
     */
    public function __construct($appId, $secret)
    {
        $this->appId = $appId;
        $this->secret = $secret;
    }

    /**
     * @param  array  $params
     *
     * @return string
     */
    public function getReqSign(array &$params): string
    {
        $params['app_id'] = $this->appId;
        ksort($params);
        $str = '';
        array_walk($params, function ($item, $key) use (&$str) {
            if ($item !== '') {
                $str .= sprintf('%s=%s&', $key, urlencode($item));
            }
        });

        return strtoupper(md5(sprintf('%s%s=%s', $str, 'app_key', $this->secret)));
    }
}
