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
        Schema::create('style_responsive_breakpoints', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("style_responsive_break_point_normal_name");
            $table->string("style_responsive_break_point_css_name");
            $table->string("style_responsive_break_point_number_value");
            $table->string("style_responsive_break_point_image")->nullable();
            $table->text("style_responsive_break_point_description")->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('style_responsive_breakpoints');
    }
};