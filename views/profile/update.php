<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Settings */

// $this->title = 'Update Settings: ' . $model->setting_id;
$this->title = Yii::t('app', 'Profil bearbeiten');
// $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'view-settings'), 'url' => ['view', 'id' => $model->setting_id]];
// $this->params['breadcrumbs'][] = ['label' => $model->setting_id, 'url' => ['view', 'id' => $model->setting_id]];
// $this->params['breadcrumbs'][] = Yii::t('app', 'view-settings-update');
?>
<div class="profile-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
