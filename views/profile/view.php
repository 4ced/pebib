<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Settings */

// $this->title = $model->setting_id;
$this->title = Yii::t('app', 'view-settings');
// $this->params['breadcrumbs'][] = ['label' => 'Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="btn-paragraph">
        <?= Html::a(Yii::t('app', 'view-buttons-update'), ['update', 'id' => $model->profile_id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php
      if ($model->profile_picture_web_filename != '') {
        // echo '<br /><p><img src="' . realpath(Yii::$app->basePath) . '/uploads/profile_pictures/' . $model->profile_picture_web_filename . '"></p>';
        echo '<br /><p><img src="' . Yii::$app->homeUrl . '/../../uploads/profile_pictures/' . $model->profile_picture_web_filename . '"></p>';
      }
   ?>
</div>
