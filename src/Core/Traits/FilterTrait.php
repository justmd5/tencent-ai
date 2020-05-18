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
                'format' => 'required|integer|in:1,2,3,4',
                'speech' => 'required|string|max:8192',
                'rate'   => 'required|integer|in:8000,16000',
            ],
            'asrs'          => [
                'format'       => 'required|integer|in:1,2,3,4',
                'rate'         => 'required|integer|in:8000,16000',
                'seq'          => 'required|integer',
                'len'          => 'required|integer',
                'end'          => 'required|integer',
                'speech_id'    => 'required|string',
                'speech_chunk' => 'required|string',
            ],
            'evilaudio'     => [],
            'wxasrs'        => [
                'format'       => 'required|integer|in:1,2,3,4',
                'rate'         => 'required|integer|in:8000,16000',
                'bits'         => 'required|integer',
                'seq'          => 'required|integer',
                'len'          => 'required|integer',
                'end'          => 'required|integer',
                'speech_id'    => 'required|string',
                'speech_chunk' => 'required|string',
                'cont_res'     => 'required|integer',
            ],
            'wxasrlong'     => [
                'format'       => 'required|integer|in:1,2,3,4',
                'callback_url' => 'required|string',
                'speech'       => 'required_without:speech_url',
                'speech_url'   => 'required_without:speech',
            ],
            'tts'           => [
                'speaker' => 'required|integer|in:1,5,6,7',
                'format'  => 'required|integer|in:1,2,3,',
                'volume'  => 'required|integer|between:-10,10',
                'speed'   => 'required|integer|between:50,200',
                'text'    => 'required|string|size:150',
                'aht'     => 'required|integer|between:-24,24',
                'apc'     => 'required|integer|between:0,100',
            ],
            'tta'           => [
                'text'       => 'required|string|size:150',
                'model_type' => 'required|integer|between:0,2',
                'speed'      => 'required|integer|between:-2,2',
            ],
            'detectkeyword' => [ //关键词检索
                'callback_url' => 'required|url',
                'speech'       => 'required_without:speech_url',
                'speech_url'   => 'required_without:speech',
                'key_words'    => 'required',
                'format'       => 'required|integer|in:1',
            ],
        ],
        'face'   => [
            'detectface'         => ['image' => 'required', 'mode' => 'required|in:0,1'],
            'detectmultiface'    => ['image' => 'required'],
            'facecompare'        => ['image_a' => 'required', 'image_b' => 'required'],
            'detectcrossageface' => ['source_image' => 'required', 'target_image' => 'required'],
            'faceshape'          => ['image' => 'required', 'mode' => 'required|in:0,1'],
            'faceidentify'       => ['image' => 'required', 'group_id' => 'required', 'topn' => 'required|between:1,10'],
            'faceverify'         => ['images' => 'required', 'person_id' => 'required|string'],
            'newperson'          => ['image' => 'required', 'group_ids' => 'required', 'person_id' => 'required', 'person_name' => 'required'],
            'delperson'          => ['person_id' => 'required'],
            'addface'            => ['images' => 'required', 'person_id' => 'required', 'tag' => 'required'],
            'delface'            => ['person_id' => 'required|string', 'face_ids' => 'required|string'],
            'setinfo'            => ['person_id' => 'required|string'],
            'getinfo'            => ['person_id' => 'required|string'],
            'getgroupids'        => [],
            'getpersonids'       => ['group_id' => 'required|string'],
            'getfaceids'         => [],
            'getfaceinfo'        => [],
        ],
        'image'  => [
            'terrorism' => ['image' => 'required_without:image_url', 'image_url' => 'required_without:image'],
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
            'idcardocr'        => ['image' => 'required', 'card_type_id' => 'required|in:0,1'],
            'bcocr'            => ['image' => 'required'],
            'driverlicenseocr' => ['image' => 'required', 'type' => 'required|in:0,1'],
            'plateocr'         => ['image' => 'required_without:image_url', 'image_url' => 'required_without:image'],
            'bizlicenseocr'    => ['image' => 'required'],
            'creditcardocr'    => ['image' => 'required'],
            'generalocr'       => ['image' => 'required'],
            'handwritingocr'   => ['image' => 'required_without:image_url', 'image_url' => 'required_without:image'],
        ],
        'ptu'    => [
            'facecosmetic'   => ['image' => 'required', 'cosmetic' => 'required|integer'],
            'facedecoration' => ['image' => 'required', 'decoration' => 'required|integer'],
            'facesticker'    => ['image' => 'required', 'sticker' => 'required|integer'],
            'faceage'        => ['image' => 'required'],
            'imgfilter'      => ['image' => 'required', 'filter' => 'required|integer'],
        ],
        'vision' => [
            'porn'        => ['image' => 'required_without:image_url', 'image_url' => 'required_without:image'],
            'scener'      => [],
            'objectr'     => [],
            'imgidentify' => [],
            'imgtotext'   => ['image' => 'required', 'session_id' => 'required'],
            'imgfilter'   => [],
        ],
    ];
}
