<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {



        Schema::create('personal_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->text('description');
            $table->string('blood_group');
            $table->string('department');
            $table->integer('age');
            $table->date('dob');
            $table->text('address');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->timestamps();
        });
        Schema::table('personal_details', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });



        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->text('description');
            $table->string('github_url')->nullable();
            $table->string('demo_url')->nullable();
            $table->json('images');
            $table->enum('type', ['personal', 'client', 'academic']);
            $table->text('reference')->nullable();
            $table->json('tools');
            $table->json('keywords')->nullable();
            $table->enum('status', ['active', 'inactive', 'in-progress']);
            $table->timestamps();
        });
        Schema::table('projects', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });


        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->enum('type', ['technical', 'soft']);
            $table->enum('level', ['beginner', 'intermediate', 'expert']);
            $table->string('logo')->nullable();
            $table->timestamps();
        });
        Schema::table('skills', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('type');
            $table->string('name');
            $table->string('institute');
            $table->year('enrolled_year');
            $table->year('passing_year');
            $table->string('grade')->nullable();
            $table->timestamps();
        });
        Schema::table('educations', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });


        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->enum('type', ['award', 'certification', 'recognition']);
            $table->string('certification')->nullable();
            $table->string('organization');
            $table->timestamp('date');
            $table->json('images')->nullable();
            $table->enum('category', ['academic', 'professional', 'other']);
            $table->timestamps();
        });
        Schema::table('achievements', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->enum('type', ['job', 'internship', 'freelance', 'volunteer']);
            $table->string('designation');
            $table->string('organization');
            $table->date('from_date');
            $table->date('to_date')->nullable();
            $table->timestamps();
        });

        Schema::table('experiences', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });








    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
