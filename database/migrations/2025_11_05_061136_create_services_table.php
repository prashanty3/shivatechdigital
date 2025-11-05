<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            
            // Page Header
            $table->string('page_badge')->default('Our Services');
            $table->string('page_title')->default('Complete Digital Solutions');
            $table->text('page_subtitle')->nullable();
            $table->integer('services_offered')->default(50);
            $table->integer('client_satisfaction')->default(100);
            $table->string('support_availability')->default('24/7');
            
            // Main Service
            $table->string('slug')->unique();
            $table->string('section_badge');
            $table->string('title');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('button_text')->default('Get Started');
            $table->string('button_url')->nullable();
            
            // CTA Section
            $table->string('cta_title')->default('Ready to Get Started?');
            $table->text('cta_subtitle')->nullable();
            $table->string('cta_primary_button_text')->default('Request a Quote');
            $table->string('cta_primary_button_url')->nullable();
            $table->string('cta_secondary_button_text')->default('View Portfolio');
            $table->string('cta_secondary_button_url')->nullable();
            
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->boolean('show_on_homepage')->default(true);
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};