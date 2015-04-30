<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * @author Rok Mohar <rok.mohar@gmail.com>
 * @author Saso Maric <saso285@gmail.com>
 */
class CreateInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutes', function(Blueprint $table)
        {
            $table
                ->bigInteger('code')
                ->unsigned()
                ->nullable(false)
            ;
            $table
                ->integer('category_id')
                ->unsigned()
                ->nullable(true)
            ;
            $table
                ->string('name', 255)
                ->nullable(true)
            ;
            $table
                ->bigInteger('register_number')
                ->unsigned()
                ->nullable(true)
            ;
            $table
                ->bigInteger('vat_number')
                ->unsigned()
                ->nullable(true)
            ;

            // Add date & time
            $table->timestamps();

            // Add indexes
            $table
                ->primary(['code'])
            ;
            $table
                ->foreign(['category_id'], 'institutes_category_foreign')
                ->references('id')
                ->on('categories')
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
        Schema::drop('institutes');
    }
}
