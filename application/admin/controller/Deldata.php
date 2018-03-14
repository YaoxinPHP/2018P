<?php
namespace app\admin\controller;
use think\Controller;
use think\Model;
/**
* 
*/
class Deldata extends Controller
{
	
	public function delModel()
	{
		$model = model('models');
		$data = input('post.');
		$result = $this->validate(
			[
				'姓名' =>$data['name'],
				'等级' =>$data['seq'],
				'头像' =>$data['pic'],
				'描述' =>$data['increment'],
			],
			[
				'姓名' => 'require',
				'描述' => 'require',
				'头像' => 'require',
				'等级' => 'number|between:0,99',
			]
		);
		if($result !== true){
			return $this->error($result,url('@admin/Index/inputs'));
		}
		$flag = $model->save($data);
		echo $flag;
	}
}