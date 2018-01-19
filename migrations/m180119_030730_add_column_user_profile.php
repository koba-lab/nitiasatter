<?php

use yii\db\Migration;

/**
 * Class m180119_030730_add_column_user_profile
 */
class m180119_030730_add_column_user_profile extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('user', 'thumbnail_url', $this->string());
        $this->addColumn('user', 'account_url', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'thumbnail_url');
        $this->dropColumn('user', 'account_url');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180119_030730_add_column_user_profile cannot be reverted.\n";

        return false;
    }
    */
}
