<?php

namespace App\Controller;


//hook
class BaseController{

    public function __construct(){
        if(method_exists($this,'init')){
            $this->init();
        }
    }

    public function actions()
    {

    }

    public function init()
    {
    }

    /**
     * @param int $_res
     *
     */
    public function AjaxReturn($_res = 200){
        if(!is_array($_res)){
            $res = [ 'code'=>intval($_res) ];
        }else{
            $res = $_res;
        }
        $res['code']    = $res['code']?:200;
        $res['msg']     = $res['msg']?:(($res['code']>0)?'suceed':'error');
        $res['js']      = $res['js']?:($res['url']?"if(data.code>0){window.location.href='{$res['url']}';}else{alert(data.msg);}":'if(data.code>0){location.reload();}else{alert(data.msg);}');
        header('application/json;charset=utf-8;');
        echo json_encode($res);
        exit;
    }

    public function behaviors()
    {
        return [
            'access' => [
                'only' => [],                         //行为限定
                    'rules' => [
                    [
                        'actions' => [],              //行为限定
                        'allow' => true,              //判定
                        'roles' => ['G'],
                    ],
                ],
            ],
        ];
    }

}
