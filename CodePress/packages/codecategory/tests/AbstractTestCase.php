<?php

namespace CodePress\CodeCategory\Tests;

use Orchestra\Testbench\TestCase;

abstract class AbstractTestCase extends TestCase{

    public function migrate(){
        $this->artisan('migrate', [
            '--realpath' => realpath(__DIR__ . '/../src/resources/migrations')
        ]);
    }

    public function getPackageProviders($app) {
        return [
          \Cviebrock\EloquentSluggable\SluggableServiceProvider::class
        ];
    }

    protected function getEnvironmentSetUp($app){
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
             'driver'    => 'sqlite',
             'database'  => ':memory:', 
             'prefix'   => '',
         ]);
    }
}