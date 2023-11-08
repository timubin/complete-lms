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
        Schema::create('employee_sallary_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->comment('employee_id=User_id');
            $table->integer('previous_sallary')->nullable;
            $table->integer('increment_sallary')->nullable;
            $table->integer('present_sallary')->nullable;
            $table->date('effected_sallary')->nullable;
            
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
        Schema::dropIfExists('employee_sallary_logs');
    }
};
