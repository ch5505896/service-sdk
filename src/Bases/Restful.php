<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-29
 */
namespace Uniondrug\ServiceSdk\Bases;

use Uniondrug\ServiceSdk\Exceptions\NotPublishedException;
use Uniondrug\ServiceSdk\Exceptions\UnknownRestfulException;
use Uniondrug\ServiceSdk\Exports\Abstracts\Export;
use Uniondrug\ServiceSdk\ServiceSdk;

/**
 * Restful
 * @package Uniondrug\ServiceSdk\Bases
 */
class Restful
{
    private static $names = [];

    /**
     * @param ServiceSdk $serviceSdk
     * @param string     $method
     * @param array      ...$args
     * @return ResponseInterface
     */
    public static function withCall(ServiceSdk $serviceSdk, string $method, ... $args)
    {
        throw new UnknownRestfulException($method);
    }

    /**
     * @param ServiceSdk $serviceSdk
     * @param string     $name
     * @return Sdk|Export
     */
    public static function withNamed(ServiceSdk $serviceSdk, string $name)
    {
        if (!isset(self::$names[$name])) {
            $className = null;
            $classNamespace = "Uniondrug\\ServiceSdk\\Exports\\".ucfirst($name);
            if (class_exists($classNamespace, true)) {
                $className = $classNamespace;
            } else {
                $classNamespace = "Uniondrug\\ServiceSdk\\Modules\\".ucfirst($name)."Sdk";
                if (class_exists($classNamespace, true)) {
                    $className = $classNamespace;
                }
            }
            if ($className === null) {
                throw new NotPublishedException($name);
            }
            self::$names[$name] = new $className($serviceSdk);
        }
        return self::$names[$name];
    }
}
