<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLocalizedColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function ($table) {
            $table->string('title_cs')->dafault('Not added yet');
            $table->longText('content_cs')->dafault('Not added yet')->nullable();
            $table->string('title_en')->dafault('Not added yet');
            $table->longText('content_en')->dafault('Not added yet')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function($table) {
            $table->dropColumn(['title_cs', 'content_cs', 'title_en', 'content_en']);
        });
    }
}
