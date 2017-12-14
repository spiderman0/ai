<?php

namespace AI\Tests\FacePlus\Body;

use AI\Entry;

/**
 * Created by PhpStorm.
 * User: hahaxixi2017
 * Date: 2017/12/8
 * Time: 15:56
 */
class BodyTest extends \PHPUnit_Framework_TestCase
{
    //vendor/phpunit/phpunit/phpunit --testdox tests/FacePlus/Body/BodyTest.php
    public function testGet()
    {
        $config = require __DIR__ . '/../../config/face_plus.php';
        $result = Entry::Body($config)->face->select('detect')->where(['image_file' =>__DIR__ . '/../../file/face_01.jpg' , 'return_attributes' => 'skinstatus'])->get();//身份证
//        $result = Entry::Body($config)->face->select('detect')->where(['image_base64' => \AI\Common\Tool\File::base64LocalImage(__DIR__ . '/../../file/face_01.jpg'), 'return_attributes' => 'skinstatus'])->get();//身份证
//        $result = Entry::Body($config)->face->select('detect')->where(['image_url' => 'http://open.youtu.qq.com/app/img/experience/face_img/face_06.jpg', 'return_attributes' => 'skinstatus'])->get();//身份证
        var_dump($result);
        exit;
    }
}