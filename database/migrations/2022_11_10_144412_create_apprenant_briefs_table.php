<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprenant_briefs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('apprenant_id')->constrained('apprenants');
            $table->foreignId('brief_id')->constrained('briefs');
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
        Schema::dropIfExists('apprenant_briefs');
    }
};
