<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->text('project_tag_line')->nullable();
            $table->string('launched_date')->nullable();
            $table->string('completion_date')->nullable();
            $table->string('tenure')->nullable();
            $table->string('unit_per_floor')->nullable();
            $table->string('title')->nullable();
            $table->string('property_size')->nullable();
            $table->string('price_range')->nullable();
            $table->string('price_per_sqft')->nullable();
            $table->string('value_for_money')->nullable();
            $table->string('potential_capital_gain')->nullable();
            $table->string('value_for_rental_yield')->nullable();
            $table->string('family_investment')->nullable();
            $table->string('suitability_for_expatriates')->nullable();
            $table->string('students')->nullable();
            $table->string('working')->nullable();
            $table->string('mixed_development')->nullable();
            $table->string('security_level')->nullable();
            $table->string('density')->nullable();
            $table->string('down_payment')->nullable();
            $table->string('location')->nullable();
            $table->integer('developer_id')->nullable();
            $table->string('maintenance_fee')->nullable();
            $table->string('booking_fee')->nullable();
            $table->string('number_of_floor')->nullable();
            $table->string('number_of_unit')->nullable();
            $table->string('number_of_block')->nullable();
            $table->string('land_area')->nullable();
            $table->text('excerpt')->nullable();
            $table->string('status')->default('ACTIVE');
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
        Schema::dropIfExists('projects');
    }
}
