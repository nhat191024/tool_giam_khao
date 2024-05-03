<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('diem', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_doi_thi');
            $table->unsignedBigInteger('id_mon_hoc');
            $table->unsignedBigInteger('id_icon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
