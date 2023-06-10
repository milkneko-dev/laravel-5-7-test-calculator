<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class InitializeCosineData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $values = range(0, 628, 1);

        $data = [];

        foreach ($values as $value) {
            $result = round(cos($value/100) * 100);

            $data[] = [
                'value' => $value,
                'result' => $result
            ];
        }

        DB::table('cosine')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('cosine')->truncate();
    }
}
