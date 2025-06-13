<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('approvals', function (Blueprint $table) {
        $table->id();
        $table->foreignId('request_id')->constrained()->onDelete('cascade');
        $table->string('approved_by', 100);
        $table->timestamp('approved_at')->useCurrent();
        $table->boolean('is_approved');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approvals');
    }
};
