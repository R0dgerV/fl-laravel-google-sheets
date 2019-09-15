<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class GoogleDatas extends Seeder
{
    /**
     *
     */
    const MAX_DATA = 10000;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->createData() as $array) {
            dump($array);
        }
    }

    /**
     * @return Generator
     */
    public function createData()
    {
        for ($z = 1; $z <= self::MAX_DATA; $z++) {
            yield [
                $z, //id
                $this->getName(), //Имя
                rand(1, 10), //кол-во
                Carbon::createFromTimestamp(rand(500000000, 1500000000)), //дата и время создания
                rand(0, 1) == 0 ? '' : 'Истина',
                $this->getStatus(), // Статус заявки
                Carbon::createFromTimestamp(rand(500000000, 1500000000)), //дата и время апдейта
                Carbon::createFromTimestamp(rand(500000000, 1500000000))->format('H:i') //время без секунд
            ];
        }
    }

    /**
     * Данные для
     * @return Generator
     */
    public function updateData()
    {
        for ($z = 1; $z <= self::MAX_DATA; $z++) {
            if (rand(0, 1) == 0) {
                continue;
            }

            yield [
                $z, //id
                $this->getName(), //Имя
                rand(1, 10), //кол-во
                Carbon::createFromTimestamp(rand(500000000, 1500000000)), //время создания
                rand(0, 1) == 0 ? '' : 'Истина',
                $this->getStatus(), // Статус заявки
                Carbon::createFromTimestamp(rand(500000000, 1500000000)), //время апдейта
                Carbon::createFromTimestamp(rand(500000000, 1500000000))->format('H:i') //время без секунд
            ];
        }
    }

    /**
     * @return mixed
     */
    protected function getName()
    {
        $array = [
            'Москва, фестивальная улица 44',
            'Питер, бульвар профсоюзов',
            'Ярославль, пл. Ленина'
        ];

        return $array[rand(0, 2)];
    }

    /**
     * @return mixed
     */
    protected function getStatus()
    {
        $array = [
            'Новый',
            'Отменен',
            'Завершен'
        ];

        return $array[rand(0, 2)];
    }

}
