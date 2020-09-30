<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doers', function (Blueprint $table) {

            //Personal data

                $table->id();
                $table->string('legal_status');

                //Physical face
                $table->string('surname')->nullable();
                $table->string('name')->nullable();
                $table->string('passport')->nullable();

                //individual businessman
                $table->binary('individual_businessman')->nullable();

                //Legal face
                $table->string('short_title')->nullable();
                $table->string('legal_name')->nullable();
                $table->integer("payer_registration_number")->nullable();
                $table->binary('legal_entity_registration_certificate')->nullable();

            //Profile data

                $table->binary('profile_photo')->nullable();
                $table->text('description')->nullable();
                $table->binary('photo_of_work')->nullable();
                $table->string('services')->nullable();
                $table->string('city')->nullable();


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
        Schema::dropIfExists('doers');
    }
}
