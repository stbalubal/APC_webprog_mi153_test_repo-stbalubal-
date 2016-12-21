<?php

namespace app\models;

use Yii;

class users extends \yii\db\ActiveRecord
{

	public static function tableName()
	{
		return 'users';
	}

	
	public function rules()
	{
		return [
		[['nickname','email','gender','number'], 'required'],
		[['number'], 'integer'],
		[['comment'], 'string'],
		[['name','nickname','email','home','gender'], 'string', 'max' => 128],
		];
		
		$this->belongsTo('app\models\users');
	}
	
	public function attributeLabels()
	{
		return [
			'user_id' => 'ID',
			'name' => 'Name',
			'nickname' => 'Nickname',
			'email' => 'Email',
			'home' => 'Home Address',
			'gender' => 'Gender',
			'number' => 'Mobile Number',
			'comment' => 'Comment',
		];
	}
	}