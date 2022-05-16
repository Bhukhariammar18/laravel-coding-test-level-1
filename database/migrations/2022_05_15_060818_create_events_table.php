<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            // $table->uuid('id')->primary()->unique()->increments('id');
            // $table->uuid('id')->primary();
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->dateTime('startAt');
            $table->dateTime('endAt');
            $table->dateTime('createdAt')->nullable(false);
            $table->dateTime('updatedAt')->nullable(false);
            $table->softDeletes();
        });
    }

    // public static function boot()
    // {
    //     parent::boot();
        
    //     static::creating(function ($model) {
    //         $model->uuid = Str::uuid();
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
