<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('medicineName');
            $table->string('medicineType');
            $table->integer('medPrice');
            $table->string('medStock');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

       // 45 min dhoira akta top menu bar banay...
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}
