<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_descriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group')->references('id')->on('groups');
            $table->string('details')->nullable();
            $table->timestamps();
            $table->foreignId('created_by');
            $table->foreignId('updated_by')->nullable();
            $table->foreignId('deleted_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->foreign('deleted_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_descriptions');
    }
};
