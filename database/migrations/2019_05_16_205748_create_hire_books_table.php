<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHireBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hire_books', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')
                ->on('users');

            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('id')
                ->on('books');
            $table->date('hire_date')->nullable();

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
        Schema::dropIfExists('hire_books');
    }
}
