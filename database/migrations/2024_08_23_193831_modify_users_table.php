<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // 既存のカラムを削除
            $table->dropColumn('name');
            $table->dropColumn('email_verified_at');
            $table->dropColumn('remember_token');

            // 新しいカラムを追加
            $table->unsignedBigInteger('user_role_master_id')->after('id');
            $table->string('postal_code')->after('password');
            $table->string('address_prefecture')->after('postal_code');
            $table->string('address_city')->after('address_prefecture');
            $table->string('address_street')->after('address_city');
            $table->string('last_name')->after('address_street');
            $table->string('first_name')->after('last_name');
            $table->date('birth_date')->after('first_name');
            $table->string('phone_number')->after('birth_date');
            $table->string('occupation')->nullable()->after('phone_number');
            $table->boolean('credit_card')->default(false)->after('occupation');
            $table->boolean('is_withdrawn')->default(false)->after('credit_card');

            // 外部キー制約の追加
            $table->foreign('user_role_master_id')->references('id')->on('user_role_masters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // 追加したカラムを削除
            $table->dropForeign(['user_role_master_id']);
            $table->dropColumn([
                'user_role_master_id',
                'postal_code',
                'address_prefecture',
                'address_city',
                'address_street',
                'last_name',
                'first_name',
                'birth_date',
                'phone_number',
                'occupation',
                'credit_card',
                'is_withdrawn'
            ]);

            // 既存のカラムを戻す
            $table->string('name');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
        });
    }
};
