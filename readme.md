# 微论坛 - API

Mpvue 开发小程序 - 后台 Api。 前端页面 [点击前往](https://github.com/pjialin/w-forum)

## 简介
Api 使用 Laravel 5.6 开发

## 服务器要求

- PHP >= 7.1.3
- 其它参考 [Laravel 环境要求](https://laravel.com/docs/5.6#installation)

## 使用 

**克隆代码到本地**

```shell
git clone https://github.com/pjialin/w-forum-api.git
```

**安装扩展**

```shell
composer install
```

**权限 和 App Key**

```shell
# 赋予目录权限
sudo chmod -R 777 storage
sudo chmod -R 777 bootstrap/cache
# 生成 app key
php artisan key:generate
```

**修改配置文件**

复制一份 `.env` 文件，修改对应的数据库配置

```shell
cp .env.example .env
```

**创建表**

```shell
php artisan migrate
```
要生成测试数据可以使用 
```shell
php artisan db:seed
```



