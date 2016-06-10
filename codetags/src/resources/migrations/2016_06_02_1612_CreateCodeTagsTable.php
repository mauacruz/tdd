<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodeTagsTable
{

    public function up(){
        Schema::create('codepress_tags', function(BluePrint $table){
          $table->increments('ID');
          $table->string('Name');
          $table->timestamps();
        });
    }

    public function down(){
        Schema::drop('codepress_tags');
    }

}