<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $setting = [
            'main_logo' => 'king-viking-logo.jpg',
            'contact_number'=> '94773944180',
            'email_address'=> 'info@kingviking.com',
            'address'=> '600/D, Canada',
            'social_facebook'=> '#',
            'social_twitter'=> '#',
            'social_youtube'=> '#',
            'social_instagram'=> '#',
            'footer_content'=> 'Looking back, music has been my constant. No matter the path, songwriting was always there—healing, solving, and guiding me. Im grateful for music and those who made it possible. Wherever it leads, my story is already a success.',
        ];
        View::composer(['components.nav', 'components.footer'], function ($view) use ($setting) {
            $view->with('settings', $setting);
        });
    }
}
