一个生成验证码类

支持composer安装

`composer require zhangshibiao/captcha`

用法

`use Zhangshibiao\Captcha;`

`$captcha = new Captcha();`

`输出验证码图片`

`$captcha->generateCode();`

`获取验证码字符`

`$captcha->getCode();`