<?php

use yii\db\Migration;

/**
 * Handles the creation of table `citations`.
 */
class m180207_191601_create_citations_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('citations', [
            'id' => $this->primaryKey(),
            'content' => $this->string(160)->notNull(),
            'music' => $this->string(40)->defaultValue(null),
            'status' => $this->integer(1)->defaultValue(0),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('citations');
    }
}
