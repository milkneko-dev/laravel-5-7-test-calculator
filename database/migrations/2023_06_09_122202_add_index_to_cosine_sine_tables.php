<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndexToCosineSineTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cosine', function ($table) {
            $table->index('value');
        });

        Schema::table('sine', function ($table) {
            $table->index('value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cosine', function ($table) {
            $table->dropIndex('cosine_value_index');
        });

        Schema::table('sine', function ($table) {
            $table->dropIndex('sine_value_index');
        });
    }
}
