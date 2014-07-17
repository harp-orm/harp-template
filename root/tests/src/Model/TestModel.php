<?php

namespace {%php_namespace%}\Test\Model;

use Harp\Harp\AbstractModel;

/**
 * @author    {%author_name%} <{%author_email%}>
 * @copyright {%copyright%}
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
class TestModel extends AbstractModel
{
    public static function initialize($config)
    {
        $config;
    }

    public $id;
    public $name;
    public $isTest = false;
    public $testId;
    public $testClass;
    public $deletedAt;
}
