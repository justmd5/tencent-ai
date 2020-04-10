<?php
/**
 * Created for tencent-ai
 * User: 丁海军
 * Date: 2018/6/30
 * Time: 下午7:53.
 */

namespace Justmd5\TencentAi\Core\Traits;

trait FilterTrait
{
    protected $filterArray = [
        'aai'    => [
            'asr'           => [
                'format' => 'require|integer|in:1,2,3,4',
                'speech' => 'require|string|max:8192',
                'rate'   => 'require|integer|in:8000,16000',
            ],
            'asrs'          => [],
            'evilaudio'     => [],
            'wxasrs'        => [],
            'wxasrlong'     => [],
            'tts'           => [],
            'tta'           => [],
            'detectkeyword' => [ //关键词检索
                'callback_url' => 'require|url',
                'speech'       => 'required_without:speech_url',
                'speech_url'   => 'required_without:speech',
                'key_words'    => 'required',
                'format'       => 'require|integer|in:1',
            ],
        ],
        'face'   => [
            'detectface'         => ['image' => 'required', 'mode' => 'required:in:0,1'],
            'detectmultiface'    => ['image' => 'required'],
            'facecompare'        => ['image_a' => 'required', 'image_b' => 'required'],
            'detectcrossageface' => ['source_image' => 'required', 'target_image' => 'required'],
            'faceshape'          => ['image' => 'required', 'mode' => 'required:in:0,1'],
            'faceidentify'       => ['image' => 'required', 'group_id' => 'required', 'topn' => 'required|between:1,10'],
            'faceverify'         => [],
            'newperson'          => [],
            'delperson'          => [],
            'addface'            => [],
            'delface'            => [],
            'setinfo'            => [],
            'getinfo'            => [],
            'getgroupids'        => [],
            'getpersonids'       => [],
            'getfaceids'         => [],
            'getfaceinfo'        => [],
        ],
        'image'  => [
            'terrorism' => ['image' => 'required'],
            'food'      => ['image' => 'required'],
            'tag'       => ['image' => 'required'],
            'fuzzy'     => ['image' => 'required'],
        ],
        'nlp'    => [
            'speechtranslate' => ['seq' => 'required|integer', 'end' => 'required|integer', 'session_id' => 'required|string|size:64'],
            'textpolar'       => ['text' => 'required|max:200'],
            'texttrans'       => ['text' => 'required|max:1024'],
            'texttranslate'   => ['type' => 'required|integer|between:0,16', 'text' => 'required|max:1024'],
            'textchat'        => [
                'session'  => 'required|max:32',
                'question' => 'required|max:3000',
            ],
            'textdetect'      => ['text' => 'required'],
            'imagetranslate'  => [
                'image'      => 'required',
                'session_id' => 'required|max:64',
            ],
            'wordner'         => ['text' => 'required|max:1024'],
            'wordpos'         => ['text' => 'required|max:1024'],
            'wordseg'         => ['text' => 'required|max:1024'],
            'wordsyn'         => ['text' => 'required|max:1024'],
            'wordcom'         => ['text' => 'required|max:100'],
        ],
        'ocr'    => [
            'idcardocr'        => [],
            'bcocr'            => [],
            'driverlicenseocr' => [],
            'plateocr'         => [],
            'bizlicenseocr'    => [],
            'creditcardocr'    => [],
            'generalocr'       => [],
            'handwritingocr'   => [],
        ],
        'ptu'    => [
            'facecosmetic'   => [],
            'facedecoration' => [],
            'facesticker'    => [],
            'faceage'        => [],
            'imgfilter'      => [],
        ],
        'vision' => [
            'porn'        => ['image' => 'required'],
            'scener'      => [],
            'objectr'     => [],
            'imgidentify' => [],
            'imgtotext'   => [],
            'imgfilter'   => [],
        ],
    ];
}
