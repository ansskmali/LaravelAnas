<?php

use App\Models\Employer;
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
        Schema::create('job__listings', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger("employee_id");
            $table->foreignIdFor(App\Models\Employer::class);
            $table->string("title");
            $table->string("salary");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job__listings');
    }
};