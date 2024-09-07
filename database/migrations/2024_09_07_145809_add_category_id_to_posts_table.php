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
        Schema::table('posts', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained(); 
            //'category_id' は 'categoriesテーブル' の 'id' を参照する外部キーです。
            //「constrained()」の後に「->onDelete('cascade');」を追加すると外部キーに対してcascadeを設定することができる。
            //cascadeとはリレーションに対して親テーブルの操作を子テーブルにも反映させることを指します。
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
};
