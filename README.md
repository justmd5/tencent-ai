<h1 align="center">腾讯AI开放平台 SDK</h1>

<p align="center">Tencent AI open platform sdk</p>

<p align="center">
<a href="https://styleci.io/repos/138467318"><img src="https://styleci.io/repos/138467318/shield?branch=master" alt="styleci"></a>
<a href="https://packagist.org/packages/justmd5/tencent-ai"><img src="https://img.shields.io/packagist/php-v/justmd5/tencent-ai.svg" alt="PHP from Packagist"></a>
<a href="https://packagist.org/packages/justmd5/tencent-ai"><img src="https://poser.pugx.org/justmd5/tencent-ai/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/justmd5/tencent-ai"><img src="https://img.shields.io/github/stars/justmd5/tencent-ai.svg?style=social&label=Stars" alt="GitHub stars"></a>
<a href="https://packagist.org/packages/justmd5/tencent-ai"><img src="https://poser.pugx.org/justmd5/tencent-ai/v/unstable.svg" alt="Latest Unstable Version"></a>
<a href="https://packagist.org/packages/justmd5/tencent-ai"><img src="https://img.shields.io/github/license/justmd5/tencent-ai.svg" alt="License"></a>
<a href="https://app.fossa.io/projects/git%2Bgithub.com%2Fjustmd5%2Ftencent-ai?ref=badge_shield" alt="FOSSA Status"><img src="https://app.fossa.io/api/projects/git%2Bgithub.com%2Fjustmd5%2Ftencent-ai.svg?type=shield"/></a>
</p>
<p align="center">
  <b>Special thanks to the generous sponsorship by:</b>
  <br><br>
  <a target="_blank" href="https://www.jetbrains.com/?from=justmd5/tencent-ai">
    <img src="https://i.loli.net/2018/03/21/5ab223b75cdfa.png" width=250>
  </a>
  <br><br>
</p>

### Requirement
1. PHP >= 7.0
2. **[Composer](https://getcomposer.org/)**
3. ext-curl 拓展
4. ext-json 拓展

### 安装

`composer require justmd5/tencent-ai`

### 使用

```php

$config  = [
    'appKey'    => '1106944xxx',
    'appSecret' => 'dsgnbnWnX8Yxxxxxx',
    'debug'     => 0,//1 show debug info 
];
$AI      = new \Justmd5\TencentAi\Ai($config);

```

### 接口调用示例
> [智能闲聊](https://ai.qq.com/doc/nlpchat.shtml) url: https://api.ai.qq.com/fcgi-bin/nlp/nlp_textchat
> 请求示例如下：
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
### 文档
[Tencent AI](https://ai.qq.com)  · [Official Documents](https://ai.qq.com/doc/index.shtml)
### 帮助
qq群

<p align="center">
<img width="200" src="https://ws1.sinaimg.cn/mw690/bc1dfc6agy1fsmg3zak6cj20f00kk7ei.jpg">
</p>

### Todo

- [ ] parameter verify

### 感谢

- thanks to [hanson/foundation-sdk](https://github.com/Hanson/foundation-sdk)
### 源码列表

| SDK 联系人 QQ | 语言 | 实现接口 | 源代码&SDK 地址 |
| --- | --- | --- | --- |
| 910139966 | PHP | ALL | https://github.com/justmd5/tencent-ai|
| 783021975 | JAVA | ALL | https://gitee.com/xshuai/taip|
| 1361653339 | Golang | ALL | https://github.com/shiguanghuxian/txai |
| 1280827369 | NodeJS |  <div>非全部接口实现</div>| https://github.com/w89612b/qqai-api-sdk |
| 1109527533 | Python | <div>非全部接口实现(完善中)</div>|https://gitee.com/french-home/TencentAISDK |
| 1928881525 | .NET(C#) | <div>OCR接口实现人脸模块接口实现</div>|https://gitee.com/ch_1928881525/Tentcent.Ai |

## License

MIT



[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fjustmd5%2Ftencent-ai.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2Fjustmd5%2Ftencent-ai?ref=badge_large)
