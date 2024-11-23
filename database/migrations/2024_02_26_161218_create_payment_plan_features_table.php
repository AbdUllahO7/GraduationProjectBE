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
        Schema::create('payment_plan_features', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("payment_plan_feature_name");
            $table->string("payment_plan_feature_image")->nullable();
            $table->text("payment_plan_feature_description");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_plan_features');
    }
};
