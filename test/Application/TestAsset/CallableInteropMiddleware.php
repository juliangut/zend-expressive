<?php
/**
 * @see       https://github.com/zendframework/zend-expressive for the canonical source repository
 * @copyright Copyright (c) 2017 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/zend-expressive/blob/master/LICENSE.md New BSD License
 */

namespace ZendTest\Expressive\Application\TestAsset;

use Interop\Http\ServerMiddleware\DelegateInterface;

class CallableInteropMiddleware
{
    public function __invoke($request, DelegateInterface $delegate)
    {
    }
}
