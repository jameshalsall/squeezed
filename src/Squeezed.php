<?php

namespace JamesHalsall\Squeezed;

/**
 * Squeezed
 *
 * @package JamesHalsall\Squeezed
 * @author  James Halsall <james.t.halsall@googlemail.com>
 */
class Squeezed extends \Pimple
{
    /**
     * Services that are tagged.
     *
     * This is associative array which takes the following format: <pre>
     *
     * array(
     *     "tag name" => array("service-id", "service-id-2"),
     *     "another tag" => array("service-id-3")
     * )
     *
     * </pre>
     *
     * @var array
     */
    private $taggedServices = array();

    /**
     * Gets services by tag and returns them as an array
     *
     * @param string $tag The tag name to fetch services by
     *
     * @return array
     */
    public function getByTag($tag)
    {
        $services = array();

        if (isset($this->taggedServices[$tag])) {
            foreach ($this->taggedServices[$tag] as $serviceId) {
                $services[$serviceId] = $this[$serviceId];
            }
        }

        return $services;
    }

    /**
     * Tags a service
     *
     * @param string $tag       The tag name
     * @param string $serviceId The ID of the service to tag
     */
    public function tagService($tag, $serviceId)
    {
        if (!isset($this->taggedServices[$tag])) {
            $this->taggedServices[$tag] = array();
        }

        $this->taggedServices[$tag][] = $serviceId;
    }
}
