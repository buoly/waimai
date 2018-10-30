<h1 align="center"> Waimai </h1>

<p align="center"> 多个外卖平台（饿了么、美团外卖、百度外卖、京东到家）的SDK.</p>


## 安装

```shell
$ composer require buoly/waimai -vvv
```

## 配置
使用本扩展，需要去 外卖平台（饿了么、美团外卖、百度外卖、京东到家）的密钥。
## 使用

```php
require __DIR__ .'/vendor/autoload.php';

use Waimai\Waimai;

$params = array(
// 参数
);
$config = [
    'meituan' => [
        'app_id' => '****',
        'secret' => '********************************',
    ],
    'jd' => [
        'app_id' => '****',
        'secret' => '********************************',
    ],
    'debug' => true,
    'log' => [
        'name' => 'waimai',
        'file' => __DIR__.'/logs/waimai.log',
        'level' => 'debug',
        'permission' => 0777,
    ],
];

$jd = Waimai::JD($config);
$mt = Waimai::Meituan($config);
```

## 修改门店信息

```
$shop_jd = $jd->shop;
$shop_mt = $mt->shop;


$result1 = $shop_jd->save($params);
$result2 = $shop_mt->save($params);

```

## 参数说明

参考外卖平台接口

## License

MIT