<?php

// database/migrations/YYYY_MM_DD_create_clients_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{

    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id(); // This defaults to unsignedBigInteger
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('testimonial')->nullable();
            $table->string('logo_path')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
