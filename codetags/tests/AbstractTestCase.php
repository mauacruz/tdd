<?php
/**
 * Created by PhpStorm.
 * User: w7
 * Date: 03/06/2016
 * Time: 20:47
 */

namespace CodePress\CodeTag\Tests;

use Orchestra\Testbench\TestCase;

abstract class AbstractTestCase extends TestCase
{

    public function migrate(){
        $this->artisan('migrate', [
           '--realpath' => realpath(__DIR__ . '/../src/resources/migrations')
        ]);
    }

    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
    }
}