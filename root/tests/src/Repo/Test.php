<?php

namespace {%php_namespace%}\Test\Repo;

use Harp\Harp\AbstractRepo;
use {%php_namespace%}\Test\Model;

/**
 * @author    {%author_name%} <{%author_email%}>
 * @copyright {%copyright%}
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
class Test extends AbstractRepo
{
    /**
     * @return Test
     */
    public static function newInstance()
    {
        return new Test('{%php_namespace%}\Test\Model\Test');
    }

    public function initialize()
    {

    }
}
