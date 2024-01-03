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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->comment('ユーザーID');
            $table->char('hobby')->nullable()->comment('趣味');
            $table->char('blood_type')->nullable()->comment('血液型');
            $table->char('special_skill')->nullable()->comment('特技');
            $table->date('birthday')->nullable()->comment('生年月日');
            $table->timestamps();
            $table->softDeletes();
            $table->comment('プロフィールマスタ');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
