<?php
namespace App\Controller;


class Demo extends BaseController {

    //������ Construct ִ��
    public function init(){}

    public function __construct(){
        parent::__construct();
    }

    public function doIndex_pe($params = 1)
    {
        echo $params;
        view();
    }


    public function doIndex($params = [])
    {
        view();
    }

    public function doIndex_demo1()
    {
        Model('test')->test();
    }


}
