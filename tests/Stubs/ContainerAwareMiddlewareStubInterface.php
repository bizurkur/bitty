<?php

namespace Bitty\Tests\Stubs;

use Bitty\Container\ContainerAwareInterface;
use Psr\Http\Server\MiddlewareInterface;

interface ContainerAwareMiddlewareStubInterface extends MiddlewareInterface, ContainerAwareInterface
{
}
