<?php
/**
 * Created for tencent-ai.
 * User: 丁海军
 * Date: 2018/6/23
 * Time: 下午5:10
 */
namespace Justmd5\TencentAi\Exception;

class NotFoundException extends \Exception
{
    protected $code = 10400;
}