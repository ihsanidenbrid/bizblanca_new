<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('company_id');
            $table->unsignedBigInteger('user_id');
            $table->string('company_ceo');
            $table->string('company_title');
            $table->string('company_phone');
            $table->string('company_email');
            $table->string('company_location');
            $table->text('company_employees');
            $table->text('company_insustry');
            $table->string('company_sales');
            $table->string('company_mainproduct');
            $table->text('company_summary');
            $table->string('company_website');
            $table->string('company_fblink');
            $table->string('company_pic1');
            $table->string('company_pic2');
            $table->string('company_pic3');
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
        Schema::dropIfExists('companies');
    }
}
