<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            // Link each comment to a post; cascades on post deletion
            $table->foreignId('post_id')
                  ->constrained('posts')
                  ->onDelete('cascade');
            // Name of the person leaving the comment
            $table->string('commenter_name');
            // The comment body
            $table->text('comment');
            // created_at & updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
