<?php

use yii\db\Migration;

/**
 * Class m190505_122600_init
 */
class m190505_122600_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    use \carono\yii2migrate\traits\MigrationTrait;

    public function newTables()
    {
        return [
            '{{%price_type}}' => [
                'id' => $this->primaryKey(),
                'accounting_id' => $this->string()->unique(),
                'name' => $this->string()->comment('Наименование типа цены'),
                'currency' => $this->string()->comment('Валюта'),
            ],
            '{{%price}}' => [
                'id' => $this->primaryKey(),
                'performance' => $this->string(),
                'value' => $this->decimal(10, 2)->comment('Цена за единицу'),
                'currency' => $this->string()->comment('Валюта'),
                'rate' => $this->float()->comment('Коэффициент'),
                'type_id' => $this->foreignKey('{{%price_type}}'),
            ]
        ];
    }

    public function safeUp()
    {
        $this->upNewTables();
//        $statuses = [
//            ['name' => 'Согласован'],
//            ['name' => 'Не согласован'],
//            ['name' => 'Закрыт'],
//        ];
//        foreach ($statuses as $status) {
//            $this->insert('{{%order_status}}', $status);
//        }
    }

    public function safeDown()
    {
        $this->downNewTables();
    }


    /**
     * {@inheritdoc}
     */
//    public function safeDown()
//    {
//        echo "m190505_122600_init cannot be reverted.\n";
//
//        return false;
//    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190505_122600_init cannot be reverted.\n";

        return false;
    }
    */
}
