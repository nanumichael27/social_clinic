<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'category',
        'profile_link',
        'link',
        'quantity',
        'price',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function isForFollowers(){
        $category = strtolower($this->category);
        return stripos($category, "follow");
    }

    public function canBePlacedBy(User $user){
        $this->getUpdatedPrice();
        return ($user->balance >= $this->price);
    }

    public function getUpdatedPrice(){
        $this->price = $this->getUnitPrice()*$this->quantity;
        return $this->price;
    }

    public function getUnitPrice($category = null){

        if($category == null){
            $category = $this->categoryText();
        }else{
            $category =$this->categoryText($category);
        }
        $setting = Setting::find(1);
        switch ($category) {
            case 'instagram followers':
                return $setting->instagram_followers;
                break;

            case 'instagram likes':
                return $setting->instagram_likes;
                break;

            case 'instagram comments':
                return $setting->instagram_comments;
                break;

            case 'instagram reels likes':
                return $setting->instagram_reels_likes;
                break;
            
            case 'instagram reels comments':
                return $setting->instagram_reels_comments;
                break;

            case 'instagram views':
                return $setting->instagram_views;
                break;

            case 'igtv views':
                return $setting->igtv_views;
                break;

            case 'instagram reel views':
                return $setting->instagram_reel_views;
                break;

            case 'twitter views':
                return $setting->twitter_views;
                break;

            case 'twitter likes':
                return $setting->twitter_likes;
                break;

            case 'twitter followers':
                return $setting->twitter_followers;
                break;

            case 'twitter retweets':
                return $setting->twitter_retweets;
                break;
        
            case 'twitter comments':
                return $setting->twitter_comments;
                break;

            case 'tiktok views':
                return $setting->tiktok_views;
                break;

            case 'instagram foreign followers':
                return $setting->instagram_foreign_followers;
                break;
            
            case 'instagram reels likes':
                return $setting->instagram_foreign_likes;
                break;

            case 'youtube likes':
                return $setting->youtube_likes;
                break;

            case 'youtube views':
                return $setting->youtube_views;
                break;
            default:
                return 50;
                break;
        }
    }

    public function categoryText($category = null)
    {
        $cat = '';
        if($category == null){
            $cat = $this->getCategoryInLowerCase();
        }else{
            $cat = $this->getCategoryInLowerCase($category);
        }
        $category = $cat;
        if (stripos($category, 'instagram followers') !== false) {
            return 'instagram followers';
        } elseif (stripos($category, 'instagram likes') !== false) {
            return 'instagram likes';
        } elseif (stripos($category, 'instagram comments') !== false) {
            return 'instagram comments';
        } elseif (stripos($category, 'instagram reels likes') !== false) {
            return 'instagram reels likes';
        } elseif (stripos($category, 'instagram comments') !== false) {
            return 'instagram comments';
        } elseif (stripos($category, 'instagram views') !== false) {
            return 'instagram views';
        } elseif (stripos($category, 'igtv views') !== false) {
            return 'igtv views';
        } elseif (stripos($category, 'instagram reel views') !== false) {
            return 'instagram reel views';
        } elseif (stripos($category, 'twitter views') !== false) {
            return 'twitter views';
        } elseif (stripos($category, 'twitter likes') !== false) {
            return 'twitter likes';
        } elseif (stripos($category, 'twitter followers') !== false) {
            return 'twitter followers';
        } elseif (stripos($category, 'twitter retweets') !== false) {
            return 'twitter retweets';
        } elseif (stripos($category, 'twitter comments') !== false) {
            return 'twitter comments';
        } elseif (stripos($category, 'tiktok views') !== false) {
            return 'tiktok views';
        } elseif (stripos($category, 'instagram foreign followers') !== false) {
            return 'instagram foreign followers';
        } elseif (stripos($category, 'instagram foreign likes') !== false) {
            return 'instagram foreign likes';
        } elseif (stripos($category, 'youtube likes') !== false) {
            return 'youtube likes';
        } elseif (stripos($category, 'youtube views') !== false) {
            return 'youtube views';
        } else {
            return 'twitter comments';
        }
    }

    public function generateFaLogo()
    {
        $media = $this->getSocialMedia();
        switch ($media) {
            case 'instagram':
                return 'fab fa-instagram';
                break;
            case 'tiktok':
                return 'fab fa-tiktok';
                break;
            case 'twitter':
                return 'fab fa-twitter';
                break;
            case 'youtube':
                return 'fab fa-youtube';
                break;
            default:
                return 'fab fa-instagram';
                break;
        }
    }



    public function getSocialMedia()
    {
        $category = $this->getCategoryInLowerCase();
        if (stripos($category, 'instagram') !== false) {
            return 'instagram';
        } elseif (stripos($category, 'tiktok') !== false) {
            return 'tiktok';
        } elseif (stripos($category, 'twitter') !== false) {
            return 'twitter';
        } elseif (stripos($category, 'igtv') !== false) {
            return 'instagram';
        } elseif (stripos($category, 'youtube') !== false) {
            return 'youtube';
        } else {
            return 'none';
        }
    }

    public function forFollowers()
    {
        $category = $this->getCategoryInLowerCase();
        return stripos($category, 'follow') !== false ? true : false;
    }

    public function getCategoryInLowerCase($category = null)
    {   
        if($category !== null){
            return strtolower($category);
        }
        return strtolower($this->category);
    }

    public static function totalEarnedOnThePlatform(){
        $totalEarned = 0;
        foreach (Order::all() as $order) {
            $totalEarned += $order->price;
        }
        return $totalEarned;
    }

    public function postAsJob($price = null){
        $data = [
            '',
        ];
    }

}

