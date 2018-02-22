<?php

use yii\db\Migration;

/**
 * Handles the creation of table `photo`.
 */
class m180215_175711_create_photo_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('photo', [
            'id' => $this->primaryKey(),
            'status' => $this->integer(1)->defaultValue(0),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('photo');
    }
}
