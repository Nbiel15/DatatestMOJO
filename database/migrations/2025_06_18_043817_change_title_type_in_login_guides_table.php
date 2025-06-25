<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTitleTypeInLoginGuidesTable extends Migration
{
    public function up()
    {
        Schema::table('login_guides', function (Blueprint $table) {
            $table->text('title')->change();
        });
    }

    public function down()
    {
        Schema::table('login_guides', function (Blueprint $table) {
            $table->string('title', 255)->change();
        });
    }
}
