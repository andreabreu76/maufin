<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorys', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Insert some stuff
        DB::table("categorys")->insert(
            array(
                array("name" => "Transporte"),
                array("name" => "Alimentação"),
                array("name" => "Refeição"),
                array("name" => "Lazer"),
                array("name" => "Saúde"),
                array("name" => "Educação"),
                array("name" => "Beleza"),
                array("name" => "Luke"),
                array("name" => "Vestuário"),
                array("name" => "Presentes"),
                array("name" => "Informatica"),
                array("name" => "Profissional"),
                array("name" => "Instituição Financeira"),
                array("name" => "Casa"),
                array("name" => "Manutenção Casa"),
                array("name" => "Serviços"),
                array("name" => "Outros")
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
