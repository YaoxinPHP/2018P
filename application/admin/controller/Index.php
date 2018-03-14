<?php
namespace app\admin\controller;
class Index extends \think\Controller
{
	public function index(){
		return $this->fetch();
	}
	public function inputs(){
		return $this->fetch();
	}
}