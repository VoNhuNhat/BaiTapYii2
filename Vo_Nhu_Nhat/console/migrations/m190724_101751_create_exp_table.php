<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%exp}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m190724_101751_create_exp_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%exp}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'exp_name' => $this->string()->notNull(),
            'start_date' => $this->date()->notNull(),
            'end_date' => $this->date(),
            'company' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-exp-user_id}}',
            '{{%exp}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-exp-user_id}}',
            '{{%exp}}',
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
            '{{%fk-exp-user_id}}',
            '{{%exp}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-exp-user_id}}',
            '{{%exp}}'
        );

        $this->dropTable('{{%exp}}');
    }
}
