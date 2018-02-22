<?php

use yii\db\Migration;

/**
 * Handles the creation of table `interview`.
 */
class m180206_220640_create_interview_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('interview', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'short_content' => $this->string(255)->notNull(),
            'content' => $this->text()->notNull(),
            'date' => $this->date()->notNull(),
            'status' => $this->integer(1)->defaultValue(0),
            'view' => $this->integer(11)->defaultValue(0),
            'alias' => $this->string(100)->notNull()->unique(),
            'title_seo' => $this->string(70)->defaultValue(null),
            'description_seo' => $this->string(160)->defaultValue(null),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('interview');
    }
}
