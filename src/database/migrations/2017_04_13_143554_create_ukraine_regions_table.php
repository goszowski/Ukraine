<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Goszowski\Ukraine\Region;

class CreateUkraineRegionsTable extends Migration
{
    protected $regions = [
      "Вінницька",
      "Волинська",
      "Дніпропетровська",
      "Донецька",
      "Житомирська",
      "Закарпатська",
      "Запорізька",
      "Івано-Франківська",
      "Київ",
      "Київська",
      "Кіровоградська",
      "Луганська",
      "Львівська",
      "Миколаївська",
      "Одеська",
      "Полтавська",
      "Республіка Крим",
      "Рівненська",
      "Севастополь",
      "Сумська",
      "Тернопільська",
      "Харківська",
      "Херсонська",
      "Хмельницька",
      "Черкаська",
      "Чернівецька",
      "Чернігівська",
    ];


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ukraine_regions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        foreach($this->regions as $region)
        {
          Region::create(['name' => $region]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ukraine_regions');
    }
}
