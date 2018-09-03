<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 03.09.18
 * Time: 15:37
 */

use yii\helpers\Html;
?>

    <h1><?= $model->title ?></h1>

    <div class="content">
        <?= $model->short_desc ?>
    </div>

<?= Html::a('More', ['admin-blog/view', 'id' => $model->id], ['class' => 'btn btn-success']) ?>