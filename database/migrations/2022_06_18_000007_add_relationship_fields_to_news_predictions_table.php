<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToNewsPredictionsTable extends Migration
{
    public function up()
    {
        Schema::table('news_predictions', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_6819918')->references('id')->on('users');
        });
    }
}
