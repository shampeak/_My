<?php
namespace App\Controller;


class Admin extends BaseController {


    public function __construct(){
        parent::__construct();
    }



    //首页响应
    public function doIndexPost()
    {

        //paixu$list
        $res = $_POST;

        R('/admin/');

    }


    //首页的
    public function doIndex()
    {
        //遍历下面有哪些目录
        view('',[
            'res'=>$res
        ]);
    }


    //首页的示例
    public function doDemo()
    {
//        app('cookies')->set('sham',123,600);      //设置cookie
//        echo  app('cookies')->get('sham');        //读取cookie
    }



}
