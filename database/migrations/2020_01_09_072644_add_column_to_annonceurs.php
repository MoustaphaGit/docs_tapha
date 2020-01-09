<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToAnnonceurs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('annonceurs', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');
            $table->string('register_number')->nullable(true)->after('user_id');
            $table->mediumText('business_address')->nullable(true)->after('register_number');
            $table->mediumText('business_phone_number')->nullable(true)->after('business_address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('annonceurs', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('register_number');
            $table->dropColumn('business_address');
            $table->dropColumn('business_phone_number');
        });
    }
}
