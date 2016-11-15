<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthMonitorLogTable extends Migration
{
    public function up()
    {
        Schema::create('auth_monitor_log', function(Blueprint $t)
        {
            $t->increments('id')->unsigned();
            $t->text('user', 255);
            $t->text('pass', 255);
            $t->text('ip', 255);
            $t->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('auth_monitor_log');
    }
}