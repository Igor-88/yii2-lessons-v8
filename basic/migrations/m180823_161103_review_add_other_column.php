<?php

use yii\db\Migration;

/**
 * Class m180823_161103_review_add_other_column
 */
class m180823_161103_review_add_other_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(\app\models\Reviews::tableName(), 'bar_column', $this->string());

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn(\app\models\Reviews::tableName(), 'bar_column');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180823_161103_review_add_other_column cannot be reverted.\n";

        return false;
    }
    */
}
