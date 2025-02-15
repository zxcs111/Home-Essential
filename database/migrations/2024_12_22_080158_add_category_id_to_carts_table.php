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
    Schema::table('carts', function (Blueprint $table) {
        $table->unsignedBigInteger('category_id')->after('product_id')->nullable();
    });
}

public function down()
{
    Schema::table('carts', function (Blueprint $table) {
        $table->dropColumn('category_id');
    });
}
};
