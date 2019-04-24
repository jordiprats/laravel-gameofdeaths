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

        DB::table('characters')->insert(
          array(
              'name' => 'Tyrion Lannister'
          ),
          array(
              'name' => '  Jaime Lannister'
          ),
          array(
              'name' => '  Cersei Lannister'
          ),
          array(
              'name' => '  Daenerys Targaryen'
          ),
          array(
              'name' => '  Jon Snow'
          ),
          array(
              'name' => '  Sansa Stark'
          ),
          array(
              'name' => '  Arya Stark'
          ),
          array(
              'name' => '  Davos Seaworth'
          ),
          array(
              'name' => '  Missandei'
          ),
          array(
              'name' => '  Theon Greyjoy'
          ),
          array(
              'name' => '  Samwell Tarly'
          ),
          array(
              'name' => '  Bran Stark'
          ),
          array(
              'name' => '  Brienne of Tarth'
          ),
          array(
              'name' => '  Varys'
          ),
          array(
              'name' => '  Sandor The Hound Clegane'
          ),
          array(
              'name' => '  Bronn'
          ),
          array(
              'name' => '  Tormund Giantsbane'
          ),
          array(
              'name' => '  Gendry'
          ),
          array(
              'name' => '  Grey Worm'
          ),
          array(
              'name' => '  Jorah Mormont'
          ),
          array(
              'name' => '  Gilly'
          ),
          array(
              'name' => '  Melisandre'
          ),
          array(
              'name' => '  Beric Dondarrion'
          ),
          array(
              'name' => '  Eddison Tollett'
          ),
          array(
              'name' => '  Podrick Payne'
          ),
          array(
              'name' => '  Yohn Royce'
          ),
          array(
              'name' => '  Lyanna Mormont'
          ),
          array(
              'name' => '  Alys Karstark'
          ),
          array(
              'name' => '  Maester Wolkan'
          ),
          array(
              'name' => '  Ned Umber',
              'dead_on' => 1
          ),
          array(
              'name' => '  Qhono'
          ),
          array(
              'name' => '  Night King'
          ),
          array(
              'name' => '  Euron Greyjoy'
          ),
          array(
              'name' => '  Qyburn'
          ),
          array(
              'name' => '  Yara Greyjoy'
          ),
          array(
              'name' => '  Gregor Clegane The Mountain'
          ),
          array(
              'name' => '  Harry Strickland'
          ),
          array(
              'name' => '  Robin Arryn'
          )
        );
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
