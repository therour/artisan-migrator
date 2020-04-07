<?php

namespace Tests;

use App\Application;
use App\Console\Artisan;
use Illuminate\Contracts\Console\Kernel;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * @var \App\Application
     */
    protected $app;

    /**
     * @var \App\Console\Artisan
     */
    protected $artisan;

    protected function setUp(): void
    {
        parent::setUp();

        $this->app = new Application(__DIR__);
        $this->app->singleton(\Illuminate\Contracts\Debug\ExceptionHandler::class, \App\Exceptions\Handler::class);
        $this->app->singleton(\Illuminate\Contracts\Console\Kernel::class, \App\Console\Kernel::class);

        $this->app->useDatabasePath(__DIR__);
        $this->app->make(Kernel::class)->bootstrap();

        $this->artisan = new Artisan($this->app, 'test');
    }
}
