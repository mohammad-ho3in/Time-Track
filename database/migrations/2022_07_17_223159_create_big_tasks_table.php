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
        Schema::create('big_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task_name');
            $table->tinyInteger('status')->comment('0 => undone , 1 => done')->default(0);
            $table->text('description')->nullable();
            $table->string('full_time',20)->default('00:00');
            $table->foreignId('group_id')->constrained('groups')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('group_creator_id')->constrained('groups','creator_id');
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
        Schema::dropIfExists('big_tasks');
    }
};
