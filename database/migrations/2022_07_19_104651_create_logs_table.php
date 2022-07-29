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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string('start_time')->nullable()->default(null);
            $table->string('end_time')->nullable()->default(null);
            $table->string('count_time')->nullable()->default(null);
            $table->text('description')->nullable();
            $table->foreignId('task_id')->constrained('tasks')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('task_big_task_id')->constrained('tasks','big_task_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
};
