<?php
/**
 * Created for tencent-ai
 * User: 丁海军
 * Date: 2018/6/30
 * Time: 下午7:55.
 */

namespace Justmd5\TencentAi\Core;

use Justmd5\TencentAi\Core\Traits\FilterTrait;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ApplicationProvider implements ServiceProviderInterface
{
    use FilterTrait;

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
        array_walk($this->filterArray, function ($filter, $key) use (&$pimple) {
            $pimple[$key] = function ($pimple) use ($filter, $key) {
                return new API($pimple,$key, $filter);
            };
        });
    }
}
