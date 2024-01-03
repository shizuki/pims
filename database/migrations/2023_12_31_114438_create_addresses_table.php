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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->comment('ユーザーID');
            $table->integer('kind')->comment('住所種別');
            $table->char('zipcode', 7)->comment('郵便番号');
            $table->char('address', 255)->comment('住所');
            $table->char('street_number', 255)->comment('丁目・番地・号');
            $table->timestamps();
            $table->softDeletes();
            $table->comment('住所マスタ');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
