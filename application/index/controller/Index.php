<?php
namespace app\index\controller;
use think\Config;
class Index extends \think\Controller
{
    public function index()
    {
    	// Config('default_return_type','json');
        $a = ['a'=>'hello','b'=>'new world'];
        return $this->fetch('index',$a);
    }
    public function about(){
        print_r($_SERVER['SERVER_NAME']);
        return $this->fetch('about');
    }
    public function gallery(){
        return $this->fetch('gallery');
    }
    public function contact(){
        return $this->fetch('contact');
    }
}
