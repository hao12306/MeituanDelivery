# 美团配送TP插件

## 安装命令
1. 切换packagist镜像源,否则需翻墙
```
composer config -g repo.packagist composer https://packagist.org
```
2. 安装插件
```
composer require miaomiao/meituan-delivery:dev-master --ignore-platform-req=ext-swoole
composer require miaomiao/meituan-delivery:v1.0.0 --ignore-platform-req=ext-swoole
```
## 使用示例
```
$req = new MeituanShopCreateReq();
$req->setShopId(1);
$req->setShopName("xxx");
$res = (new Meituan("appkey", "secret"))->shopCreate($req);
halt($res);
```
