<?php
/**
 * Created by PhpStorm.
 * User: osvaldoikuta
 * Date: 2019-03-27
 * Time: 21:12
 */
declare(strict_types=1);

namespace App\Handler\Factory\Usuario;

use App\Handler\Usuario\UsuarioCriarHandler;
use Interop\Container\ContainerInterface;
/**
 *	Class	UsuarioCriarHandlerFactory
 *	@package	App\Handler\Factory\Usuario
 */

class UsuarioCriarHandlerFactory
{
    /**
     *	@param	ContainerInterface	$container
     *	@return	UsuarioCriarHandler
     */
    public function	__invoke(ContainerInterface	$container): UsuarioCriarHandler
    {
        return new	UsuarioCriarHandler($container);
    }
}