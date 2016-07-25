<?php
namespace App\Controller;


class Login extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    //响应提交
    public function doIndexPost()
    {
        //密码对,则跳转
        $password = req('Post')['password'];
        if(app('Adminauth')->auth($password)){
            $this->AjaxReturn([
                'code'  => -200,
                'js'   => 'window.location.href="/admin/"'
            ]);
        }else{
            $this->AjaxReturn([
                'code'  => -200,
                'msg'   => '密码不对'
            ]);
        }

    }

    //首页的
    public function doIndex()
    {
        //遍历下面有哪些目录
        view('',[
            'res'=>$res
        ]);
    }

    //首页的
    public function doLogout()
    {
        app('Adminauth')->logout('/login');
    }



}
