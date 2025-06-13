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
    Schema::create('procurements', function (Blueprint $table) {
        $table->id();
        $table->foreignId('request_item_id')->constrained('request_items')->onDelete('cascade');
        $table->foreignId('vendor_id')->nullable()->constrained()->onDelete('set null');
        $table->foreignId('warehouse_id')->nullable()->constrained()->onDelete('set null');
        $table->string('fulfilled_by', 50); // 'vendor' atau 'warehouse'
        $table->timestamp('fulfilled_at')->useCurrent();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procurements');
    }
};
