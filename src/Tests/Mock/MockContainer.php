<?php

namespace JamesHalsall\Squeezed\Tests\Mock;

use JamesHalsall\Squeezed\Squeezed;

/**
 * MockContainer
 *
 * @package JamesHalsall\Squeezed\Tests\Mock
 * @author  James Halsall <james.t.halsall@googlemail.com>
 */
class MockContainer extends Squeezed
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this['service_one'] = function () {
            return 'service one';
        };

        $this['service_two'] = function () {
            return 'service two';
        };

        $this['service_three'] = function () {
            return 'service three';
        };

        $this->tagService('tag_one', 'service_one');
        $this->tagService('tag_two', 'service_two');
        $this->tagService('tag_two', 'service_three');
    }
}
