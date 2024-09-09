# 美团配送(TP6插件)
thinkphp6框架下vendor插件

------
## 方法一、vendor库 命令安装步骤
#### 安装命令
1. 切换packagist镜像源,否则需翻墙
```
composer config -g repo.packagist composer https://packagist.org
```
2. 安装插件
```
//composer require miaomiao/meituan-delivery:dev-master --ignore-platform-req=ext-swoole
composer require miaomiao/meituan-delivery:v1.0.0 --ignore-platform-req=ext-swoole

composer.json手动添加自动加载
"autoload": {
    "psr-4": {
        "MeituanDelivery\\": "vendor/miaomiao/meituan-delivery/src"
    }
},
```

------
## 方法二、extend库 手动安装步骤
#### 复制文件
把src下文件复制到TP6 extend文件夹下,重命名为MeituanDelivery,因框架自动加载可直接使用

------
## 使用示例
```
$req = new MeituanShopCreateReq();
$req->setShopId(1);
$req->setShopName("xxx");
$res = (new Meituan("appkey", "secret"))->shopCreate($req);
halt($res);
```
#### 联系作者
1039803717@qq.com