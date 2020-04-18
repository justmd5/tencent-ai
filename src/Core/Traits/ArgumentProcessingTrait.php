<?php

namespace Justmd5\TencentAi\Core\Traits;

use Justmd5\TencentAi\Core\Signature;

trait ArgumentProcessingTrait
{
    /**
     * @param Signature $signature
     * @param array     $params
     *
     * @return array
     */
    public function processParams(Signature $signature, $params)
    {
        if (empty($params['nonce_str'])) {
            $params['nonce_str'] = md5(uniqid('TencentAi_'));
        }
        if (empty($params['time_stamp'])) {
            $params['time_stamp'] = strval(time());
        }
        if (isset($params['image']) && is_file($params['image'])) {
            $params['image'] = base64_encode(file_get_contents($params['image']));
        }
        $params['sign'] = $signature->getReqSign($params);

        return $params;
    }
}
