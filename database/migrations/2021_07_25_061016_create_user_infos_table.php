<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->integer('user_id')->comment('利用者ID')->nullable();
            $table->string('login_key')->comment('ログインキー')->nullable();
            $table->string('password')->comment('パスワード')->nullable();
            $table->string('name')->comment('氏名')->nullable();
            $table->string('name_kana')->comment('氏名(カナ)')->nullable();
            $table->smallInteger('age')->comment('年齢');
            $table->smallInteger('gender')->comment('性別');
            $table->string('email')->comment('メール');
            $table->string('tell')->comment('電話番号');
            $table->string('address')->comment('住所');
            $table->smallInteger('deleted_flag')->comment('削除フラグ')->nullable();
            $table->string('update_at')->comment('更新日時')->nullable();
            $table->string('create_at')->comment('登録日時')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_infos');
    }
}
