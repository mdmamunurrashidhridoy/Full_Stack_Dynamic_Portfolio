<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class PortfolioModel extends Model
{
    use HasFactory;

    public function up()
    {
        Schema::create("users", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("phone");
            $table->string("avatar");
            $table->string("student_id");
            $table->timestamped();
        });

        Schema::create('personal_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('description');
            $table->string('blood_group');
            $table->string('department');
            $table->integer('age');
            $table->date('dob');
            $table->text('address');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->timestamps();
        });

        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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


        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->enum('type', ['technical', 'soft']);
            $table->enum('level', ['beginner', 'intermediate', 'expert']);
            $table->string('logo')->nullable();
            $table->timestamps();
        });


        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('type');
            $table->string('name');
            $table->string('institute');
            $table->year('enrolled_year');
            $table->year('passing_year');
            $table->string('grade')->nullable();
            $table->timestamps();
        });

        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->enum('type', ['award', 'certification', 'recognition']);
            $table->string('certification')->nullable();
            $table->string('organization');
            $table->timestamp('date');
            $table->json('images')->nullable();
            $table->enum('category', ['academic', 'professional', 'other']);
            $table->timestamps();
        });

        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('type', ['job', 'internship', 'freelance', 'volunteer']);
            $table->string('designation');
            $table->string('organization');
            $table->date('from_date');
            $table->date('to_date')->nullable();
            $table->timestamps();
        });

    }
}