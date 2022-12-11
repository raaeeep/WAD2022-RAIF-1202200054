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
        Schema::create('tb_showroom', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('user_id')->references('id')->on('tb_user'); ;
            $table->string('name');
            $table->string('owner');
            $table->string('brand');
            $table->date('purchase_date');
            $table->text('description');
            $table->string('image');
            $table->enum('status', ['Lunas','Belum_Lunas']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_showroom');
    }
};
