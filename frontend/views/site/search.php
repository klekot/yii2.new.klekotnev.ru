<?php

use yii\helpers\BaseStringHelper;
$this->title = 'Результаты поиска';
?>
<div class="container-fluid">
    <h1>Результаты поиска по запросу: <?php echo "<span class='label label-success'>" . $query . "</span>" ?></h1>
    <?php
    $result = $dataProvider->getModels();

    foreach ($result as $key) {
        echo "<div class='row'>";
        echo "<div class='panel panel-default'>";
        foreach ($key['_source'] as $key => $value) {

//            if ($key == "name") {
//                echo "<div class='panel-heading'>" . $value . "</div>";
//            }
            if ($key == "content") {
                echo "<div class='panel-body'>" . BaseStringHelper::truncateWords($value, 50, '...', true) . "<br>";
            }
//            if ($key == "name") {
//                echo "<span class='label label-success'>" . $value . "</span></div>";
//            }
        }
        echo "</div>";
        echo "</div>";
    }?>
</div>