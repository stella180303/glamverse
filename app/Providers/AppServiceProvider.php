<?php
    namespace App\Providers;

    use Illuminate\Support\ServiceProvider;
    use Midtrans\Config;
    use Illuminate\Filesystem\Filesystem;
    use Illuminate\Support\Facades\URL;
    class AppServiceProvider extends ServiceProvider
    {
        /**
         * Register any application services.
         */
        public function register(): void
        {
            $this->app->singleton('files', function ($app) {
                return new Filesystem;
            });
        }

        /**
         * Bootstrap any application services.
         */
        public function boot(): void
        {
            if (env('APP_ENV') === 'production') {
                URL::forceScheme('https');
            }
            Config::$serverKey = 'SB-Mid-server-rf0Qaa7RwzhttntcofhycLlDWQS';
            Config::$isProduction = false;
            Config::$isSanitized = true;
            Config::$is3ds = true;
        }
    }
