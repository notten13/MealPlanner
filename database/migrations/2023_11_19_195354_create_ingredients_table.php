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
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('name');
        });

        Schema::create('ingredient_recipe', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Recipe::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Ingredient::class)->constrained()->cascadeOnDelete();
            $table->primary(['recipe_id', 'ingredient_id']);
            $table->float('quantity');
            $table->string('unit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredients');
        Schema::dropIfExists('ingredient_recipe');
    }
};
