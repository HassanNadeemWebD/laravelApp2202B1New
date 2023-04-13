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
        if (!Schema::hasTable('students')) {
            Schema::create(
                'students',
                function (Blueprint $table) {
                    $table->increments("studentID");
                    $table->string("studentName");
                    $table->enum("gender", ["male", "female"]);
                    $table->string("contact", 12);
                    $table->string("city", 50);
                    $table->string("password");




                    $table->timestamps();
                    //created_at   updated_at
                }
            );
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
