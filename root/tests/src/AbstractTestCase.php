<?php

namespace {%php_namespace%}\Test;

use Harp\Query\DB;
use PHPUnit_Framework_TestCase;

/**
 * @author    {%author_name%} <{%author_email%}>
 * @copyright {%copyright%}
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
abstract class AbstractTestCase extends PHPUnit_Framework_TestCase {

    /**
     * @var TestLogger
     */
    protected $logger;

    /**
     * @return TestLogger
     */
    public function getLogger()
    {
        return $this->logger;
    }

    public function setUp()
    {
        parent::setUp();

        $this->logger = new TestLogger();

        DB::setConfig('default', array(
            'dsn' => 'mysql:dbname=test-{%repository_name%};host=127.0.0.1',
            'username' => 'root',
        ));

        DB::get()->setLogger($this->logger);
        DB::get()->beginTransaction();
    }

    public function tearDown()
    {
        DB::get()->rollback();

        parent::tearDown();
    }

    public function assertQueries(array $query)
    {
        $this->assertEquals($query, $this->getLogger()->getEntries());
    }
}
