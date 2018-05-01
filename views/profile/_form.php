<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Settings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">

    <?php $form = ActiveForm::begin([
        'layout' => 'horizontal',
        'options'=> ['enctype'=>'multipart/form-data'], // important
        'fieldConfig' => [
            // 'template' => "{label}\n<div class=\"col-md-4\">{input}</div>\n<div class=\"col-md-6\">{error}</div>",
            // 'labelOptions' => ['class' => 'col-md-2 control-label'],
            'template' => "{label}\n<div class=\"col-md-4\">{input}</div>\n<div class=\"col-md-6\">{hint}{error}</div>",
            'labelOptions' => ['class' => 'col-md-2 control-label'],
            'horizontalCssClasses' => [
                'hint' => 'noMargin',
                // 'error' => 'noMargin',
            ],
        ],
        // 'fieldConfig' => [
        //     'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
        //     'horizontalCssClasses' => [
        //         'label' => 'col-sm-2',
        //         'wrapper' => 'col-sm-5',
        //         'error' => '',
        //         'hint' => '',
        //     ],
        // ],
    ]); ?>

      <?php
    echo $form->field($model, 'image')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'pluginOptions'=>['allowedFileExtensions'=>['jpg','gif','png'],'showUpload' => false,],
    ]);
    ?>

    <div class="form-group">
        <div class="col-md-6" style="text-align: right;">
            <?= Html::submitButton(Yii::t('app', 'view-buttons-save'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>


    <?php ActiveForm::end(); ?>


</div>
