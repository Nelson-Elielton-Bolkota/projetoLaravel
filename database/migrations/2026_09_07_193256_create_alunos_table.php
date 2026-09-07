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
        Schema::create('alunos', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->string('email')->unique();
        $table->date('data_nascimento')->nullable();
        $table->foreignId('curso_id')->constrained()->cascadeOnDelete();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::table('alunos', function (Blueprint $table) {
        $table->dropForeign(['user_id']);
        $table->dropUnique(['alunos_user_id_unique']);
        $table->dropColumn('user_id');
    });
}
};
