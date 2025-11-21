<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
public function up()
{
    Schema::create('cakes', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->decimal('price', 8, 2);
        $table->string('category'); 
        $table->text('description');
        $table->string('image')->nullable();
        $table->timestamps();
    });
}
   
    public function down(): void
    {
        Schema::dropIfExists('cakes');
    }
};
