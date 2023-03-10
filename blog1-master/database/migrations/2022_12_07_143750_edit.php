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

        Schema::table('articles', function (Blueprint $table) {
            $table->integer('status')->default(0)->comment('0:pasif, 1:çevrimiçi')->after('hit');
            $table->softDeletes()->after('status');
        });

        Schema::table('categories', function (Blueprint $table) {
            $table->integer('status')->default(1)->comment('0:pasif, 1:çevrimiçi')->after('slug');
        });

        Schema::table('pages', function (Blueprint $table) {
            $table->integer('status')->default(1)->comment('0:pasif, 1:çevrimiçi')->after('order');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
