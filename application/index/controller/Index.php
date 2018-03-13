<?php
namespace app\index\controller;
use think\Config;
class Index extends \think\Controller
{
    public function index()
    {
    	Config('default_return_type','json');
        $a = ['a'=>'hello','b'=>'new world'];
        // return $this->fetch('index',$a);
        return $a;
    }
    public function a(){
    	$a = ['a'=>'hello','b'=>'new world'];
        var_dump($a);
    }
}
