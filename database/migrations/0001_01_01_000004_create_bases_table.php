<?php

use App\Enums\BooleanEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bases', function (Blueprint $table) {
            $table->id();

            // translations: title, description
            $table->string('slug')->unique()->index();
            $table->text('languages')->nullable(); // ['de', 'en']
            $table->boolean('published')->default(BooleanEnum::ENABLE->value);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bases');
    }
};
