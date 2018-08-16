<?php

use yii\db\Migration;

/**
 * Class m180816_152829_table_access
 */
class m180816_152829_table_access extends Migration
{
    public function up()
    {
        $this->execute('CREATE TABLE `access` (
  `id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `access`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_evrnt_access_1_idx` (`note_id`) USING BTREE,
  ADD KEY `fk_evrnt_access_2_idx` (`user_id`) USING BTREE;


ALTER TABLE `access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;');
    }

    public function down()
    {
        $this->dropTable('access');
    }
}
