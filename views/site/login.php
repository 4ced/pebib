<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-6 boxed box-big" style="text-align: center;">
    <h1>PeBib</h1>
    <h5>Schön, dass du wieder da bist! Melde dich zuerst an, bevor du deine Bücher einsehen kannst.</h5>
        <div class="row">
          <div class="col-lg-2">
          </div>
            <div class="col-lg-8">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    <?= $form->field($model, 'username')->textInput(['placeholder' => 'Username', 'autofocus' => true, 'style' => 'border-radius: 0'])->label(false) ?>
                    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Passwort', 'style' => 'border-radius: 0'])->label(false) ?>


                    <div class="form-group">
                      <?= Html::submitButton('Anmelden', ['class' => 'btn-black btn btn-primary', 'name' => 'login-button']) ?>
                    </div>

                    <div style="color:#fff; margin:1em 0; font-size: 15px;">
                        <p>Passwort vergessen? <?= Html::a('Zurücksetzen', ['site/request-password-reset']) ?></p>
                        <p>Noch kein Konto. <?= Html::a('Jetzt registrieren', ['site/signup'])?></p>
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
