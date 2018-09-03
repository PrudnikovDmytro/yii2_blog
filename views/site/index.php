<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
/* @var $articles yii\data\ActiveDataProvider */
/* @var $article app\models\Articles */
?>

<div class="col-sm-8 post-index">
    <?php
    foreach ($articles->models as $article) {
        echo $this->render('shortView', [
            'model' => $article
        ]);
    }
    ?>

    <div>
        <?= LinkPager::widget([
            'pagination' => $articles->getPagination()
        ]) ?>
    </div>
</div>
