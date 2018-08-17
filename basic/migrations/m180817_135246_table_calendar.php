<?php

use yii\db\Migration;

/**
 * Class m180817_135246_table_calendar
 */
class m180817_135246_table_calendar extends Migration
{
    public function up()
    {
        $this->execute('CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `creator` int(11) NOT NULL,
  `date_event` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_evrnt_note_1_idx` (`creator`);


ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;');
    }

    public function down()
    {
        $this->dropTable('calendar');
    }
}
