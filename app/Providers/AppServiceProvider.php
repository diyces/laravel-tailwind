<?php

namespace App\Providers;

use App\Models\Contact;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
{
    // ⬇️ DAFTARKAN UI COMPONENTS
    Blade::anonymousComponentPath(
        resource_path('views/components/ui'),
        'ui'
    );

    // ⬇️ DAFTARKAN AUTH COMPONENTS
    Blade::anonymousComponentPath(
        resource_path('views/auth'),
        'auth'
    );

    // Inbox unread count
    View::composer('layouts.app', function ($view) {
        $view->with(
            'unreadCount',
            Contact::where('is_read', false)->count()
        );
    });

}}