<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrimErrorLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prim_error_logs', function (Blueprint $table) {
            $table->id();

            $table->string('url')->nullable();
            $table->integer('status')->nullable();
            $table->json('request')->nullable();
            $table->json('response')->nullable();

            $table->timestamps();

            $table->index('url');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prim_error_logs');
    }
}
