<?php

use yii\db\Migration;

/**
 * Handles the creation of table `texts`.
 */
class m180206_220829_create_texts_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('texts', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'content' => $this->text()->notNull(),
            'album' => $this->string(100)->defaultValue(null),
            'view' => $this->integer(11)->defaultValue(0),
            'status' => $this->integer(1)->defaultValue(0),
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
        $this->dropTable('texts');
    }
}
