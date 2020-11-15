<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     * 註冊時用戶只需提供name, email, password即可註冊，想法是讓用戶能夠快速註冊
     * 後續再由用戶自行覺是否要進行進階認證
     * 進階認證會希望用戶將下面可空白值的資料都填妥
     */
    public function up()
    {
        Schema::create('users_data', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('user_real_name')->nullable();
            $table->boolean('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->String('id_number')->nullable();
            $table->String('phone')->nullable();
            $table->String('address')->nullable();
            $table->String('wallet_address')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
