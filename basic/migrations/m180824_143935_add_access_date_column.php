<?php

use app\models\Access;
use yii\db\Migration;

/**
 * Class m180824_143935_add_access_date_column
 */
class m180824_143935_add_access_date_column extends Migration
{
    /**
     * @return bool
     */
    public function up(): bool
    {
        parent::up();

        $this->addColumn(Access::tableName(), 'since', $this->dateTime());

        return true;
    }

    public function down(): bool
    {
        parent::down();

        $this->dropColumn(Access::tableName(), 'since');

        return true;
    }
}
