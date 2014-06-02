<?php

namespace {%php_namespace%}\Test\Model;

use Harp\Harp\AbstractModel;
use {%php_namespace%}\Test\Repo;

/**
 * @author    {%author_name%} <{%author_email%}>
 * @copyright {%copyright%}
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
class Test extends AbstractModel
{
    /**
     * @return Repo\Test
     */
    public function getRepo()
    {
        return Repo\Test::get();
    }

    public $id;
    public $name;
    public $isTest = false;
    public $testId;
    public $testClass;
    public $deletedAt;
}
