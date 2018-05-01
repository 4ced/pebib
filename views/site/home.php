<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Button;

$this->title = 'PeBib';
?>
<div class="site-index">

  <!-- <div class="container"> -->

      <div class="row">
        <a href = <?=Url::to(["site/index"]);?>>
        <div class="col-md-3">
          <!-- <button type="button" class="btn btn-denise" > -->
           <?php echo Html::img('@web/images/covers/pebib.png', ['alt' => 'My logo', 'class' => 'pebib-img']) ?>
          <!-- <img src="assets/User.png" widht="100%" height="100%"
             class="img-fluid" alt="Responsive image" > </p> -->
             </div>
        </a>
            <a href = <?=Url::to(["buecher/finalbuecher"]);?>>
            <div class="col-md-3">
              <button type="button" class="btn btn-denise" >
                <h1>Meine<br>Bücher</h1>
            </div>
          </a>

            </a>
            <a href = <?=Url::to(["buecher/autobuch"]);?>>
            <div class="col-md-3">
              <button type="button" class="btn btn-denise" >
                <h1>Scannen</h1>
              <!-- <img src="assets/Teilen.png" widht="100%" height="100%"
                 class="img-fluid" alt="Responsive image" > </p> -->
            </div>


          </a>
            <a href = <?=Url::to(["ausleihen/finalindex"]);?>>
            <div class="col-md-3">
              <button type="button" class="btn btn-denise" >
                <h1>Ausleihen/<br>Verleihen</h1>
              <!-- <img src="assets/Teilen.png" widht="100%" height="100%"
                 class="img-fluid" alt="Responsive image" > </p> -->
            </div>
          </a>

            <a href = <?=Url::to(["orte/myindex"]);?>>
            <!-- <a href="index.php?r=buecher/index"> -->
            <!-- <a href="friends.html"> -->
            <div class="col-md-3">
              <button type="button" class=" btn btn-denise" >
                <h1>Standorte</h1>
              <!-- <img src="assets/friends.png" widht="100%" height="100%"
                 class="img-fluid" alt="Responsive image" > </p> -->
            </div>
          </a>
            <!-- <a href="index.php?r=buecher/index"> -->
            <a href = <?=Url::to(["user/finalindex"]);?>>
            <!-- <a href="hinzufuegen.html"> -->
            <div class="col-md-3">
              <button type="button" class="btn btn-denise" >
                <h1>Freunde</h1>
                <!-- <img src="assets/book.png" widht="100%" height="100%"
              class="img-fluid" alt="Responsive image" > </p> -->

            </div>
          </a>

          <a href = <?=Url::to(["site/about"]);?>>
            <!-- <a href="hinzufuegen.html"> -->
            <div class="col-md-3">
              <button type="button" class="btn btn-denise" >
                <h1>How to use...</h1>
                <!-- <img src="assets/book.png" widht="100%" height="100%"
              class="img-fluid" alt="Responsive image" > </p> -->

            </div>
          </a>

          <a href = <?= Url::to(["profile/view", 'id' => \Yii::$app->user->identity->id]);?>>
            <div class="col-md-3">
              <button type="button" class="btn btn-denise" >
                <h1>Profil</h1>
                <!-- <img src="assets/book.png" widht="100%" height="100%"
              class="img-fluid" alt="Responsive image" > </p> -->
            </div>
          </a>


    </div>

</div>
