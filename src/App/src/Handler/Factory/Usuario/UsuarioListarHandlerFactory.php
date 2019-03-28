<?php
/**
 * Created by PhpStorm.
 * User: osvaldoikuta
 * Date: 2019-03-27
 * Time: 21:03
 */
declare(strict_types=1);

namespace App\Handler\Factory\Usuario;

use App\Handler\Usuario\UsuarioListarHandler;
use Interop\Container\ContainerInterface;
/**
 *	Class	UsuarioListarHandlerFactory
 *	@package	App\Handler\Factory\Usuario
 */
class UsuarioListarHandlerFactory
{
    /**
     *	@param	ContainerInterface	$container
     *	@return	UsuarioListarHandler
     */
    public function	__invoke(ContainerInterface	$container): UsuarioListarHandler
    {
        return new	UsuarioListarHandler($container);
    }
}