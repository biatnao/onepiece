<?php
namespace Admin\Controller;
use Think\Controller;

public function TestController extends Controller{

    public function index(){
        $data=import_excel('./Upload/excel/simple.xls');
        p($data);

    }




}
