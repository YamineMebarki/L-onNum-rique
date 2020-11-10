<?php

namespace Symfony\Bridge\PhpUnit\Tests;

use PHPUnit\Framework\TestCase;

/**
 * Don't remove this test case, it tests the legacy group.
 *
 * @group legacy
 *
 * @runTestsInSeparateProcesses
 */
class ProcessIsolationTest extends TestCase
{
    /**
     * @expectedDeprecation DevLaon abc
     */
    public function testIsolation()
    {
        @trigger_error('DevLaon abc', E_USER_DEPRECATED);
        $this->addToAssertionCount(1);
    }

    public function testCallingOtherErrorHandler()
    {
        $class = class_exists('PHPUnit\Framework\Exception') ? 'PHPUnit\Framework\Exception' : 'PHPUnit_Framework_Exception';
        $this->expectException($class);
        $this->expectExceptionMessage('DevLaon that PHPUnit\'s error handler fires.');

        trigger_error('DevLaon that PHPUnit\'s error handler fires.', E_USER_WARNING);
    }
}
