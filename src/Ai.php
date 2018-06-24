<?php
/**
 * Created for tencent-ai.
 * User: 丁海军
 * Date: 2018/6/23
 * Time: 下午5:10
 */
namespace Justmd5\TencentAi;

use Hanson\Foundation\Foundation;

/**
 * Class Ai.
 *
 * @property Core\Signature $signature
 * @property Core\API       $aai
 * @property Core\API       $face
 * @property Core\API       $image
 * @property Core\API       $nlp
 * @property Core\API       $ocr
 * @property Core\API       $ptu
 * @property Core\API       $vision
 */
class Ai extends Foundation
{
    protected $providers = [
        Core\CoreServiceProvider::class,
        Providers\AaiServiceProvider::class,
        Providers\FaceServiceProvider::class,
        Providers\ImageServiceProvider::class,
        Providers\NlpServiceProvider::class,
        Providers\OcrServiceProvider::class,
        Providers\PtuServiceProvider::class,
        Providers\VisionServiceProvider::class,
    ];
}