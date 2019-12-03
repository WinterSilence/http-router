<?php declare(strict_types=1);

/**
 * It's free open-source software released under the MIT License.
 *
 * @author Anatoly Fenric <anatoly@fenric.ru>
 * @copyright Copyright (c) 2018, Anatoly Fenric
 * @license https://github.com/sunrise-php/http-router/blob/master/LICENSE
 * @link https://github.com/sunrise-php/http-router
 */

namespace Sunrise\Http\Router\OpenApi\Annotation\OpenApi;

/**
 * @Annotation
 *
 * @Target({"ANNOTATION"})
 */
final class Response
{

    /**
     * @Required
     *
     * @var int
     */
    public $code;

    /**
     * @Required
     *
     * @var string
     */
    public $description;

    /**
     * @var array<Sunrise\Http\Router\OpenApi\Annotation\OpenApi\Content>
     */
    public $content = [];

    /**
     * @return array
     */
    public function toArray() : array
    {
        $content = [];
        foreach ($this->content as $value) {
            $content[$value->mediaType] = $value->toArray();
        }

        return [
            'description' => $this->description,
            'content' => $content,
        ];
    }
}
