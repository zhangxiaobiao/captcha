<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 2018/11/1
 * Time: 11:54
 */

require_once '../vendor/autoload.php';

use Zhangshibiao\Captcha;

$captcha = new Captcha();

$captcha->generateCode();