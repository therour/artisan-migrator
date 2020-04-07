<?php
namespace Tests;

use Tests\TestCase;

class MakeMigrationCommandTest extends TestCase
{
    protected function tearDown(): void
    {
        parent::tearDown();

        $this->app['files']->delete($this->app['files']->files(__DIR__.'/migrations/'));
    }

    /** @test */
    public function it_can_run_make_migration_command()
    {
        $datePrefix = date('Y_m_d_His');
        $this->artisan->call('make:migration', ['name' => 'create_foo']);
        $this->assertTrue($this->app['files']->exists(__DIR__.'/migrations/'.$datePrefix.'_create_foo.php'));
    }
}
