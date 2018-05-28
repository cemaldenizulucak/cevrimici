<?php

use yii\db\Migration;

/**
 * Class m180527_232930_cevrimici
 */
class m180527_232930_cevrimici extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180527_232930_cevrimici cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
      $this->createTable('cevrimici',[
            'cevrimciID' =>$this->primaryKey()->notNull(),
            'eposta'=>$this->string()->notNull(),
            'konu'=>$this->text()->notNull(),
            'icerik'=>$this->text()->notNull(),
          ]);

          $this->insert('cevrimici',[
            'eposta'=>'cemaldenizuculucak@gmail.com',
            'konu'=>'Ders Programı',
            'icerik'=>'Ders programında çakışma var.',
          ]);
    }

    public function down()
    {
        echo "m180527_232930_cevrimici cannot be reverted.\n";

        return false;
    }

}
