<?php
/**
 * Created for tencent-ai.
 * User: 丁海军
 * Date: 2018/6/23
 * Time: 下午5:10
 */
namespace Justmd5\TencentAi\Core;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class CoreServiceProvider implements ServiceProviderInterface
{

    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $pimple A container instance
     */
    public function register (Container $pimple)
    {
        $pimple['signature'] = function ($pimple) {
            return new Signature($pimple['config']['appKey'], $pimple['config']['appSecret']);
        };
    }
}