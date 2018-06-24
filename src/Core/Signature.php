<?php
/**
 * Created for tencent-ai.
 * User: 丁海军
 * Date: 2018/6/23
 * Time: 下午5:10
 */
namespace Justmd5\TencentAi\Core;

class Signature
{
    private $appId;
    private $secret;

    public function __construct ($appId, $secret)
    {
        $this->appId  = $appId;
        $this->secret = $secret;
    }

    public function getReqSign (&$params)
    {
        $params['app_id'] = $this->appId;
        if (empty($params['nonce_str'])) {
            $params['nonce_str'] = md5(uniqid("{$params['app_id']}_"));
        }
        if (empty($params['time_stamp'])) {
            $params['time_stamp'] = strval(time());
        }
        ksort($params);
        $str = '';
        foreach ($params as $key => $value) {
            if ($value !== '') {
                $str .= $key . '=' . urlencode($value) . '&';
            }
        }
        $str  .= 'app_key=' . $this->secret;
        $sign = strtoupper(md5($str));

        return $sign;
    }

}