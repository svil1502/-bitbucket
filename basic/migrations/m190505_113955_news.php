<?php

use yii\db\Migration;

/**
 * Class m190505_113955_news
 */
class m190505_113955_news extends Migration
{
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







    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190505_113955_news cannot be reverted.\n";

        return false;
    }
    */
}
