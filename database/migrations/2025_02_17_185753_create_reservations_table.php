<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Client;
use App\Models\Agence;
use App\Models\Axe;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('date_depart');
            $table->foreignIdFor(Client::class,'client_id')->constrained()->onDelete('cascade');
            $table->foreignIdFor(Axe::class,'axe_id')->constrained()->onDelete('cascade');
            $table->foreignIdFor(Agence::class,'agence_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
