<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * @author Rok Mohar <rok.mohar@gmail.com>
 * @author Saso Maric <saso285@gmail.com>
 */
class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function(Blueprint $table)
        {
            // Primary key
            $table
                ->increments('id')
            ;

            $table
                ->char('currency_code', 3)
                ->nullable(false)
            ;
            $table
                ->bigInteger('institute_code')
                ->unsigned()
                ->nullable(false)
            ;
            $table
                ->date('transaction_at')
                ->nullable(false)
            ;
            $table
                ->decimal('amount', 16, 4)
                ->nullable(false)
            ;

            // Add date & time
            $table->timestamps();

            // Add indexes
            $table
                ->foreign(['currency_code'], 'transactions_currency_foreign')
                ->references('code')
                ->on('currencies')
            ;
            $table
                ->foreign(['institute_code'], 'transactions_institute_foreign')
                ->references('code')
                ->on('institutes')
            ;
            $table
                ->unique(['currency_code', 'institute_code', 'transaction_at'], 'transactions_unique')
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
        Schema::drop('transactions');
    }
}
