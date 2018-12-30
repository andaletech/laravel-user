<?php

namespace Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

/**
 * Base test class.
 * 
 * @author Kolado Sidibe <kolado.sidibe@olympuscloud.com>
 * @copyright 2018 Andale Technologies, SARL.
 * @license MIT
 */
class TestCase extends OrchestraTestCase
{

    /**
     * Setup the test environment.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->loadMigrationsFrom(__DIR__ . '/../src/Database/Migrations');
    }
    /**
     * Define environment setup. @inheritDoc
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testdb');
        $app['config']->set(
            'database.connections.testdb',
            [
                'driver'   => 'sqlite',
                'database' => ':memory:',//'./testdb.sqlite',
                'prefix'   => '',
            ]
        );
    }
}