<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNousesTable extends Migration
{
    /**
     * Run the migrations.
     * A propos de nous
     * @return void
     */
    public function up()
    {
        Schema::create('nouses', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('sous')->nullable();
            $table->text('contenu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nouses');
    }
}
