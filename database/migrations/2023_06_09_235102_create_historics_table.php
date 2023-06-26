<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historics', function (Blueprint $table) {
            $table->id();
            $table->foreignId("plain_id")->constrained("plains")->onDelete("cascade")->onUpdate("cascade");
            $table->string("date");
            $table->string("hora");
            $table->string("total");
            $table->foreignId("user_id")->constrained("users")->onDelete("cascade")->onUpdate("cascade");;
            $table->foreignId("costumer_id")->constrained("costumers")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historics');
    }
}
