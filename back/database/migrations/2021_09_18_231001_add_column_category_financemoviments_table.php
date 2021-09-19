<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnCategoryFinancemovimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('finance_moviments', function (Blueprint $table) {
            $table->string('uuid')->nullable()->after('id');
            $table->integer('category_id')->nullable()->after('uuid');
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
            $table->dropColumn('uuid');
            $table->dropColumn('category_id');
        });
    }
}
