<?php

namespace app\models;

use Yii;

class Profile extends \yii\db\ActiveRecord
{

    public $image;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

      /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'default', 'value' => \Yii::$app->user->identity->id],
            [['user_id'], 'required'],
            [['profile_picture_web_filename', 'profile_picture_src_filename'], 'string'],
            [['image'], 'safe'],
            [['image'], 'file', 'extensions'=>'jpg, gif, png'],
            [['image'], 'file', 'maxSize'=>'100000'],

        ];
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'profile_id' => Yii::t('app', 'model-settings-profile_id'),
            'user_id' => Yii::t('app', 'model-settings-user_id'),
            'profile_picture_web_filename' => Yii::t('app', 'Profilbild'),
            'profile_picture_src_filename' => Yii::t('app', 'Profilbild'),
        ];
    }

      /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

}
