<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateProductsTable extends Migration
{
    public function up(){
        schema::create('products',function(Blueprint $table){
           $table->id();
           $table->string('name');
           $table->text('detail');
           $table->timetamps();
        });
    }
    public function down(){
        Schema::dropIfExists('products');
    }
}
