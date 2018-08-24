<?php

use yii\db\Migration;

/**
 * Class m180824_094748_table_note
 */
class m180824_094748_table_note extends Migration
{
    public function up()
    {
        $this->execute('CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `creator` int(11) NOT NULL,
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `note`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_evrnt_note_1_idx` (`creator`);


ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
');
    }

    public function down()
    {
        $this->dropTable('note');
    }
}
