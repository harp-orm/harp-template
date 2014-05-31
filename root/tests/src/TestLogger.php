<?php

namespace {%php_namespace%}\Test;

use Psr\Log\AbstractLogger;
use Harp\Query\Compiler\Compiler;

/**
 * A dummy logger used for testing
 *
 * @author    {%author_name%} <{%author_email%}>
 * @copyright {%copyright%}
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
class TestLogger extends AbstractLogger
{
    /**
     * @var array
     */
    protected $entries = array();

    /**
     * Logs with an arbitrary level.
     *
     * @param mixed $level
     * @param string $message
     * @param array $context
     * @return null
     */
    public function log($level, $message, array $context = array())
    {
        $this->entries []= isset($context['parameters']) ? Compiler::humanize($message, $context['parameters']) : $message;
    }

    /**
     * @return array
     */
    public function getEntries()
    {
        return $this->entries;
    }
}
