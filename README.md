# BdTranslug

> 通过百度翻译api,实现文章和帖子中文标题也可以使用 slug 类型的 url 。

## 使用前必看

使用百度翻译api,http://api.fanyi.baidu.com/api/trans/product/index
使用之前需开通百度通用翻译api权限,并获取appkey和secret.
> 每月翻译字符数低于200万，享免费服务,如果更多翻译的需求,请联系百度翻译官方

## 安装

这是一个标准的 Composer 的包,你可以直接通过下面的命令行来安装:

```bash
composer require miyayeh/trans
```
或者在你的 `composer.json` 文件中添加:

```json
"miyayeh/trans" : "~1.0"
```
然后执行 `composer update`

 

### 1.Laravel 中使用
**1.1 配置**
默认情况在,在 laravel 项目中的 `config/services.php` 中添加:

```php
  'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
   // 下面是你添加的内容
   'youdao' => [
           'appKey' => env('YOUDAO_APP_KEY'),
           'appSecret' => env('YOUDAO_APP_SECRET'),
       ],
       
'baidutrans' => [
        'appKey' => env('BAIDU_APPID'),
        'appSecret' => env('BAIDU_APP_SECRET')
    ]
 */   
```
当然,你还需要在 `.env` 文件中添加:

```php
BAIDU_APPID=app_key
BAIDU_APP_SECRET=app_secret
```

在 `config/app.php` 中,添加 `provider` 和 `aliases` (laravel 5.5及以上,可略过此步骤):

```php
 //providers
 \MiyaYeh\Trans\BdTransServiceProvider::class

// aliases
"BdTrans" => \MiyaYeh\Trans\Facades\BdTransFacade::class
```

**1.2 使用**
```php
app('BdTrans')->translate('如何安装 Laravel'); 
//How to install the Laravel

// or 
use BdTrans;
BdTrans::translate('如何安装 Laravel');
//How to install the Laravel

app('BdTrans')->slug('如何安装 Laravel'); 
//how-to-install-the-laravel

// or 
use Translug;
BdTrans::slug('如何安装 Laravel');
//how-to-install-the-laravel
```
 
