<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c4_records', function(Blueprint $t)
        {
            $t->increments('id');
            $t->string('image');
            $t->mediumText('message');
            $t->string('lon');
            $t->string('lat');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropTableIfExists('c4_records');
    }

}
