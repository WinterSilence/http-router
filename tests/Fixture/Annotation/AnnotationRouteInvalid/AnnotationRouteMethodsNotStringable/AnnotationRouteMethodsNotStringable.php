<?php declare(strict_types=1);

namespace Sunrise\Http\Router\Tests\Fixture\Annotation\AnnotationRouteInvalid;

use Sunrise\Http\Router\Tests\Fixture\BlankRequestHandler;

/**
 * @Route(
 *   name="home",
 *   path="/",
 *   methods={"HEAD", {"GET"}, "POST"}
 * )
 */
class AnnotationRouteMethodsNotStringable extends BlankRequestHandler
{
}