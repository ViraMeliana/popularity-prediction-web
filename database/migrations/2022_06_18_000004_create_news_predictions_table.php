<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsPredictionsTable extends Migration
{
    public function up()
    {
        Schema::create('news_predictions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('is_popular')->nullable();
            $table->longtext('possible_keyword')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
