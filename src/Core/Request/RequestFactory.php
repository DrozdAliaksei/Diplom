<?php
/**
 * Created by PhpStorm.
 * User: dii
 * Date: 06.11.18
 * Time: 20:02
 */

namespace Core\Request;

class RequestFactory
{
    /**
     * @return Request
     */
    public static function createRequest(): Request
    {
        $request = new Request(
            self::getPath(), self::getMethod(), self::getRequest()
        );

        return $request;
    }

    /**
     * @return string
     */
    private static function getPath(): string
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    /**
     * @return array
     */
    private static function getRequest(): array
    {
        return $_REQUEST;
    }

    /**
     * @return string
     */
    private static function getMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}