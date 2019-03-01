<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductoOt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    
    public $set_schema_table = 'producto_ot';
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID_PRODUCTO_OT');
            $table->integer('ID_PRODUCTO')->unsigned();
            $table->integer('ID_OT')->unsigned();
            $table->integer('CANTIDAD')->nullable()->default(null);
         

            $table->index(["ID_PRODUCTO"], 'ID_PROD');

            $table->index(["ID_OT"], 'ID_OTT');


            $table->foreign('ID_PRODUCTO', 'ID_PROD')
                ->references('ID_PRODUCTO')->on('producto')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('ID_OT', 'ID_OTT')
                ->references('ID_OT')->on('orden_trabajo')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->set_schema_table);
    }
}
