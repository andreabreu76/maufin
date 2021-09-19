<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnConstcenterFinancemovimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('finance_moviments', function (Blueprint $table) {
            $table->date('coust_center_id')->nullable()->after('vencimento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('finance_moviments', function (Blueprint $table) {
            $table->dropColumn('coust_center_id');
        });
    }
}
