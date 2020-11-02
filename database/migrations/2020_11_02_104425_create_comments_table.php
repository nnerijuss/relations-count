<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('commentable_id');
            $table->string('commentable_type');
            $table->string('name')->nullable();
            $table->text('content')->nullable();
            $table->tinyInteger('rating');
            $table->unsignedInteger('ip');
            $table->dateTime('confirmed_at')->nullable()->index();
            $table->bigInteger('confirmed_by')->nullable();
            $table->timestamps();

            $table->index(['commentable_id', 'commentable_type']);
            $table->index(['commentable_id', 'commentable_type', 'ip'], 'user_review');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
