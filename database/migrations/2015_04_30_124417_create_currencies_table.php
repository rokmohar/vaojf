<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * @author Rok Mohar <rok.mohar@gmail.com>
 * @author Saso Maric <saso285@gmail.com>
 */
class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function(Blueprint $table)
        {
            $table
                ->char('code', 3)
                ->nullable(false)
            ;
            $table
                ->string('name', 255)
                ->nullable(true)
            ;

            // Add date & time
            $table->timestamps();

            // Add indexes
            $table
                ->primary(['code'])
            ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('currencies');
    }
}
