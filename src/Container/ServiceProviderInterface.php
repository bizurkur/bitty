<?php

namespace Bitty\Container;

use Bitty\Container\Exception\ContainerException;
use Bitty\Container\Exception\NotFoundException;

interface ServiceProviderInterface
{
    /**
     * Provides a new instance of a service.
     *
     * @param string $id ID of service.
     *
     * @return object
     *
     * @throws NotFoundException If the service is not found.
     * @throws ContainerException If unable to build the service.
     */
    public function provide($id);
}
