<?php

use yii\db\Migration;

/**
 * Handles the creation of table `video`.
 */
class m180206_220315_create_video_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('video', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'status' => $this->integer(1)->defaultValue(0),
            'url' => $this->string(255)->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('video');
    }
}
