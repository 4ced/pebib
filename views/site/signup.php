<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


?>
<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6 boxed box-big" style="text-align: center;">
      <h1>Neuer Account erstellen:</h1>
      <h5>Fülle bitte alle unten stehenden Felder aus:</h5>
      <div class="row">
          <div class="col-lg-2">
          </div>
          <div class="col-lg-8">
              <?php $form = ActiveForm::begin(['id' => 'signup-form']); ?>

                  <?= $form->field($model, 'username')->textInput(['placeholder' => 'Username', 'autofocus' => true, 'style' => 'border-radius: 0'])->label(false) ?>

                  <?= $form->field($model, 'email')->textInput(['placeholder' => 'E-mail', 'style' => 'border-radius: 0'])->label(false) ?>

                  <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Passwort', 'style' => 'border-radius: 0'])->label(false) ?>

                  <div class="form-group">
                      <?= Html::submitButton('Registrieren', ['class' => 'btn-black btn btn-primary', 'name' => 'signup-button']) ?>
                  </div>

              <?php ActiveForm::end(); ?>
          </div>
          <div class="col-lg-2">
          </div>
      </div>
    </div>
    <div class="col-md-3">
    </div>
</div>
