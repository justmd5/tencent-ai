<?php
/**
 * Created for tencent-ai.
 * User: 丁海军
 * Date: 2018/6/23
 * Time: 下午5:10.
 */

namespace Justmd5\TencentAi\Providers;

use Justmd5\TencentAi\Core\APi;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class VisionServiceProvider implements ServiceProviderInterface
{
    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $pimple A container instance
     */

    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $pimple A container instance
     */
    public function register(Container $pimple)
    {
        $filter = [
            'porn'        => [],
            'scener'      => [],
            'objectr'     => [],
            'imgidentify' => [],
            'imgtotext'   => [],
            'imgfilter'   => [],
        ];
        $pimple['vision'] = function ($pimple) use ($filter) {
            return new API($pimple['signature'], 'vision', $filter);
        };
    }
}
