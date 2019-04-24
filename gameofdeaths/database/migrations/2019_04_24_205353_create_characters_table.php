<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('dead_on')->nullable();
            $table->timestamps();
        });

        DB::table('characters')->insert(array(
          array(
              'id' => 1,
              'name' => 'Tyrion Lannister',
              'dead_on' => NULL
          ),
          array(
              'id' => 2,
              'name' => '  Jaime Lannister',
              'dead_on' => NULL
          ),
          array(
              'id' => 3,
              'name' => '  Cersei Lannister',
              'dead_on' => NULL
          ),
          array(
              'id' => 4,
              'name' => '  Daenerys Targaryen',
              'dead_on' => NULL
          ),
          array(
              'id' => 5,
              'name' => '  Jon Snow',
              'dead_on' => NULL
          ),
          array(
              'id' => 6,
              'name' => '  Sansa Stark',
              'dead_on' => NULL
          ),
          array(
              'id' => 7,
              'name' => '  Arya Stark',
              'dead_on' => NULL
          ),
          array(
              'id' => 8,
              'name' => '  Davos Seaworth',
              'dead_on' => NULL
          ),
          array(
              'id' => 9,
              'name' => '  Missandei',
              'dead_on' => NULL
          ),
          array(
              'id' => 10,
              'name' => '  Theon Greyjoy',
              'dead_on' => NULL
          ),
          array(
              'id' => 11,
              'name' => '  Samwell Tarly',
              'dead_on' => NULL
          ),
          array(
              'id' => 12,
              'name' => '  Bran Stark',
              'dead_on' => NULL
          ),
          array(
              'id' => 13,
              'name' => '  Brienne of Tarth',
              'dead_on' => NULL
          ),
          array(
              'id' => 14,
              'name' => '  Varys',
              'dead_on' => NULL
          ),
          array(
              'id' => 15,
              'name' => '  Sandor The Hound Clegane',
              'dead_on' => NULL
          ),
          array(
              'id' => 16,
              'name' => '  Bronn',
              'dead_on' => NULL
          ),
          array(
              'id' => 17,
              'name' => '  Tormund Giantsbane',
              'dead_on' => NULL
          ),
          array(
              'id' => 18,
              'name' => '  Gendry',
              'dead_on' => NULL
          ),
          array(
              'id' => 19,
              'name' => '  Grey Worm',
              'dead_on' => NULL
          ),
          array(
              'id' => 20,
              'name' => '  Jorah Mormont',
              'dead_on' => NULL
          ),
          array(
              'id' => 21,
              'name' => '  Gilly',
              'dead_on' => NULL
          ),
          array(
              'id' => 22,
              'name' => '  Melisandre',
              'dead_on' => NULL
          ),
          array(
              'id' => 23,
              'name' => '  Beric Dondarrion',
              'dead_on' => NULL
          ),
          array(
              'id' => 24,
              'name' => '  Eddison Tollett',
              'dead_on' => NULL
          ),
          array(
              'id' => 25,
              'name' => '  Podrick Payne',
              'dead_on' => NULL
          ),
          array(
              'id' => 26,
              'name' => '  Yohn Royce',
              'dead_on' => NULL
          ),
          array(
              'id' => 27,
              'name' => '  Lyanna Mormont',
              'dead_on' => NULL
          ),
          array(
              'id' => 28,
              'name' => '  Alys Karstark',
              'dead_on' => NULL
          ),
          array(
              'id' => 29,
              'name' => '  Maester Wolkan',
              'dead_on' => NULL
          ),
          array(
              'id' => 30,
              'name' => '  Ned Umber',
              'dead_on' => 1
          ),
          array(
              'id' => 31,
              'name' => '  Qhono',
              'dead_on' => NULL
          ),
          array(
              'id' => 32,
              'name' => '  Night King',
              'dead_on' => NULL
          ),
          array(
              'id' => 33,
              'name' => '  Euron Greyjoy',
              'dead_on' => NULL
          ),
          array(
              'id' => 34,
              'name' => '  Qyburn',
              'dead_on' => NULL
          ),
          array(
              'id' => 35,
              'name' => '  Yara Greyjoy',
              'dead_on' => NULL
          ),
          array(
              'id' => 36,
              'name' => '  Gregor Clegane The Mountain',
              'dead_on' => NULL
          ),
          array(
              'id' => 37,
              'name' => '  Harry Strickland',
              'dead_on' => NULL
          ),
          array(
              'id' => 38,
              'name' => '  Robin Arryn',
              'dead_on' => NULL
          ),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
