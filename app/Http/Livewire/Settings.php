<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class Settings extends Component
{

    public $setting;

    protected $rules = [
        'setting.instagram_followers' => 'float|min:10',
        'setting.instagram_likes' => 'float|min:10',
        'setting.instagram_comments' => 'float|min:10',
        'setting.instagram_reels_likes' => 'float|min:10',
        'setting.instagram_comments' => 'float|min:10',
        'setting.instagram_views' => 'float|min:10',
        'setting.igtv_views' => 'float|min:10',
        'setting.instagram_reel_views' => 'float|min:10',
        'setting.twitter_views' => 'float|min:10',
        'setting.twitter_likes' => 'float|min:10',
        'setting.twitter_followers' => 'float|min:10',
        'setting.twitter_retweets' => 'float|min:10',
        'setting.twitter_comments' => 'float|min:10',
        'setting.tiktok_views' => 'float|min:10',
        'setting.instagram_foreign_followers' => 'float|min:10',
        'setting.instagram_foreign_likes' => 'float|min:10',
        'setting.youtube_likes' => 'float|min:10',
        'setting.youtube_views' => 'float|min:10',
    ];

    public function mount(){
        $this->setting = Setting::find(1);
    }

    public function render()
    {
        return view('livewire.settings');
    }

    public function updated()
    {
        $this->setting->save();
    }
}
