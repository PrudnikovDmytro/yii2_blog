<?php

use yii\db\Migration;

/**
 * Class m180903_110254_addTableArticles
 */
class m180903_110254_addTableArticles extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('articles', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'short_desc' => $this->text(),
            'full_desc' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('articles');
    }
}
