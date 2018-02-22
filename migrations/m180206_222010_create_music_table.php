<?php

use yii\db\Migration;

/**
 * Handles the creation of table `music`.
 */
class m180206_222010_create_music_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('music', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'album' => $this->string(100)->defaultValue(null),
            'file' => $this->string(255)->notNull(),
            'status' => $this->integer(1)->defaultValue(0),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('music');
    }
}
