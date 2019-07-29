<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%document}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m190725_031003_create_document_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%document}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'doc_name' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'content' => $this->string()->notNull(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-document-user_id}}',
            '{{%document}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-document-user_id}}',
            '{{%document}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-document-user_id}}',
            '{{%document}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-document-user_id}}',
            '{{%document}}'
        );

        $this->dropTable('{{%document}}');
    }
}
