<?php

namespace JamesHalsall\Squeezed\Tests;

use JamesHalsall\Squeezed\Tests\Mock\MockContainer;

/**
 * Squeezed tests
 *
 * @package JamesHalsall\Squeezed\Tests
 * @author  James Halsall <james.t.halsall@googlemail.com>
 */
class SqueezedTest extends \PHPUnit_Framework_TestCase
{
    public function testGetByTag()
    {
        $container = new MockContainer();

        $this->assertCount(0, $container->getByTag('invalid tag'));
        $this->assertCount(1, $container->getByTag('tag_one'));
        $this->assertCount(2, $container->getByTag('tag_two'));

        $this->assertContains('service one', $container->getByTag('tag_one'));

        $this->assertContains('service two', $container->getByTag('tag_two'));
        $this->assertContains('service three', $container->getByTag('tag_two'));
    }
}
