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
        <div class="col-md-6 boxed box-big">
           <h1>PeBib</h1><br>
           Die PeBib (Personalisierte Bibiothek) ist ein System zum Bücher Organisieren und ein Entwicklungs Open Source Projekt. Jeder kann sich hiermit zu Hause eine Smarte Bibiothek aufbauen.<br> Wenn andere User oder Freunde sich ebenfalls das System instalieren könnt ihr euch über die Website verbinden und Bücher, Bewertungen und Meinungen teilen. <br>
          Und wenn du mal wieder voll im Stress bist wegen einem Geschenk - Hier findest du aufjedenfall ein passendes Buch.
          <br>
          <br>
          <br>
          <!-- <img src="assets/User.png" widht="100%" height="100%"
             class="img-fluid" alt="Responsive image" > </p> -->
             </div>


            <!-- <a href = "index.php?r=buecher/index"> -->
            <!-- <a href="teilen.html"> -->
            <!-- <a href="teilen.html"> -->

            <div class="col-md-6">
              <div class="row " style="margin-left: 5px">
                <div class="col-md-12 boxed box-middle">

                <h1>Was braucht man</h1>
                - NFC-fähiges Smartphone<br>
                - NFC-Tag's (ein Tag kostet ca.50 Cent)<br>
                - Bücherregal mit Büchern <br>
                - Die Datenbank die PeBib euch zur Verfügung stellt <br>


               <!-- <img src="assets/Teilen.png" widht="100%" height="100%"
                 class="img-fluid" alt="Responsive image"> </p> -->
            </div>
            <a href = <?= Url::to(["site/about"]);?>>
            <div class="col-md-12 boxed box-middle">
                <h1>How to use...</h1>
                <br>
                <br>
                <br>
                <br>
                <div style="text-align: left">
                </div>
              <!-- <img src="assets/Teilen.png" widht="100%" height="100%"
                 class="img-fluid" alt="Responsive image" > </p> -->
            </div>
            </a>
            </div>
            </div>
    </div>

</div>
