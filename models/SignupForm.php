<?php
namespace app\models;
use yii;
use yii\base\Model;

class SignupForm extends Model{

    public $username;
    public $password;

    public function rules(){
        return[
            [['username', 'password'], 'required', 'message' => 'Необходимо заполнить поле' ],
            ['username', 'unique', 'targetClass' => User::className(), 'message' => 'Этот логин уже зарегистрирован']
        ];
    }

    public function attributeLabels(){
        return [
            'username' => 'Логин',
            'password' => 'Пароль',
        ];
    }

}