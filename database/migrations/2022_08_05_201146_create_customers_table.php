<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('name')->nullable();
            $table->text('logo')->nullable();
            $table->text('description')->nullable();
            $table->text('email')->nullable();
            $table->boolean('sentEmail')->nullable()->default(false);
            $table->bigInteger('field_id')->nullable();
            $table->bigInteger('template_id')->nullable();
            $table->boolean('isOk')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
