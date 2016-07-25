<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    public function doIndex()
    {
//        echo 'Hello doIndex';
//
//        //$res = app('db')->getall('select * from dy_use2r ');
//        $res = app('pdo')->getall('select * from dy_user ');
//
//        D($res);

        $mc = app('Simulation')->test('user.ma');
        //view();

    }

    public function doIndex_pe()
    {
        echo 'Hello doIndex_pe';
        view();

    }


}
