<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signatures', function (Blueprint $table) {
            $table->id();
            $table->foreignId("plain_id")->constrained("plains")->onDelete("CASCADE")->onUpdate("CASCADE");
            $table->foreignId("costumer_id")->constrained("costumers")->onDelete("CASCADE")->onUpdate("CASCADE");
            $table->foreignId("user_id")->constrained("users")->onDelete("CASCADE")->onUpdate("CASCADE");
            $table->float("total");
            $table->string("status");
            $table->date("date");
            $table->date("date_final");
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('signatures');
    }
}
