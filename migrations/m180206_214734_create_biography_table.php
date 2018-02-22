<?php

use yii\db\Migration;

/**
 * Handles the creation of table `biography`.
 */
class m180206_214734_create_biography_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('biography', [
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
        $this->dropTable('biography');
    }
}
