<h1 align="center">腾讯AI开放平台 SDK</h1>

<p align="center">Tencent AI open platform sdk</p>

<p align="center">
<a href="https://packagist.org/packages/justmd5/tencent-ai"><img src="https://img.shields.io/packagist/php-v/justmd5/tencent-ai.svg" alt="PHP from Packagist"></a>
<a href="https://packagist.org/packages/justmd5/tencent-ai"><img src="https://img.shields.io/github/stars/justmd5/tencent-ai.svg?style=social&label=Stars" alt="GitHub stars"></a>
<a href="https://packagist.org/packages/justmd5/tencent-ai"><img src="https://poser.pugx.org/justmd5/tencent-ai/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/justmd5/tencent-ai"><img src="https://poser.pugx.org/justmd5/tencent-ai/v/unstable.svg" alt="Latest Unstable Version"></a>
<a href="https://packagist.org/packages/justmd5/tencent-ai"><img src="https://img.shields.io/github/license/justmd5/tencent-ai.svg" alt="License"></a>
</p>

## Requirement
1. PHP >= 7.0
2. **[Composer](https://getcomposer.org/)**
3. ext-curl 拓展
4. ext-json 拓展

## install

`composer require justmd5/tencent-ai:dev-master`

### Usage

```php

$config  = [
    'appKey'    => '1106944xxx',
    'appSecret' => 'dsgnbnWnX8Yxxxxxx',
    'debug'     => 0,
];
$AI      = new \Justmd5\TencentAi\Ai($config);

```

### Interface call example

```
$params = [
'question'=>'腾讯人工智能',
'session'=>123,
];
try {
    dd($AI->nlp->request('textchat', $params));
} catch (\Justmd5\TencentAi\Exception\NotFoundException $e) {
    dd($e);
}
```
## Documentation
[Tencent AI](https://ai.qq.com)  · [Official Documents](https://ai.qq.com/doc/index.shtml)
### Help
qq群

<p align="center">
<img width="200" src="https://ws1.sinaimg.cn/mw690/bc1dfc6agy1fsmg3zak6cj20f00kk7ei.jpg">
</p>

### Thanks

- thanks to [hanson/foundation-sdk](https://github.com/Hanson/foundation-sdk)

## License

MIT

