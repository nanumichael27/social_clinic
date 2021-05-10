<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('instagram_followers')->default(50);
            $table->float('instagram_likes')->default(50);
            $table->float('instagram_comments')->default(50);
            $table->float('instagram_reels_likes')->default(50);
            $table->float('instagram_reels_comments')->default(50);
            $table->float('instagram_views')->default(50);
            $table->float('igtv_views')->default(50);
            $table->float('instagram_reel_views')->default(50);
            $table->float('twitter_views')->default(50);
            $table->float('twitter_likes')->default(50);
            $table->float('twitter_followers')->default(50);
            $table->float('twitter_retweets')->default(50);
            $table->float('twitter_comments')->default(50);
            $table->float('tiktok_views')->default(50);
            $table->float('instagram_foreign_followers')->default(50);
            $table->float('instagram_foreign_likes')->default(50);
            $table->float('youtube_likes')->default(50);
            $table->float('youtube_views')->default(50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
