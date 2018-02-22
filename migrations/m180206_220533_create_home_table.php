<?php

use yii\db\Migration;

/**
 * Handles the creation of table `home`.
 */
class m180206_220533_create_home_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('home', [
            'id' => $this->primaryKey(),
            'content' => $this->text()->notNull(),
            'title_seo' => $this->string(70)->defaultValue(null),
            'description_seo' => $this->string(160)->defaultValue(null),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('home');
    }
}
