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
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('employee_id');
            $table->string('fname',30);
            $table->string('lname',30);
            $table->string('address',100);
            $table->string('phone',10);
            $table->string('gender',10);
            $table->string('email',50);
            $table->float('salary',10);
            $table->float('other_salary',10);
            $table->float('dpt_salary',10);
            $table->float('phone_bill',10);
            $table->string('dpt',20);
            $table->string('role',20);
            $table->timestamps();
        });

        // $table->bigIncrements('employee_id');
        // $table->foreignId('user_id');
        // $table->string('title',10)->nullable();
        // $table->string('fname',100);
        // $table->string('lname',255);
        // $table->string('nname',50)->nullable();
        // $table->string('sex',6);
        // $table->string('birthdate',100);
        // $table->integer('age', false, true)->length(3);
        // $table->string('email',255);
        // $table->string('id_line',100)->nullable();
        // $table->string('phone',30);
        // $table->foreignId('address_id');
        // $table->string('position',255)->nullable();
        // $table->text('aboutme')->nullable();
        // $table->string('image')->nullable();
        // $table->integer('employee_status', false, true)->length(1)->default(1);
        // $table->timestamps();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
