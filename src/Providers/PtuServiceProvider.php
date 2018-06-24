<?php
/**
 * Created for tencent-ai.
 * User: 丁海军
 * Date: 2018/6/23
 * Time: 下午5:10
 */
namespace Justmd5\TencentAi\Providers;

use Justmd5\TencentAi\Core\API;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class PtuServiceProvider implements ServiceProviderInterface
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
        $filter        = [
            'facecosmetic'   => [],
            'facedecoration' => [],
            'facemerge'      => [],
            'facesticker'    => [],
            'faceage'        => [],
            'imgfilter'      => [],
        ];
        $pimple['ptu'] = function ($pimple) use ($filter) {
            return new API($pimple['signature'], 'ptu', $filter);
        };
    }
}