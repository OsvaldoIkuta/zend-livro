<?php
/**
 * Created by PhpStorm.
 * User: osvaldoikuta
 * Date: 2019-03-27
 * Time: 21:09
 */
declare(strict_types=1);

namespace App\Handler\Factory\Usuario;

use App\Handler\Usuario\UsuarioListarUmHandler;
use Interop\Container\ContainerInterface;
/**
 *	Class	UsuarioListarUmHandlerFactory
 *	@package	App\Handler\Factory\Usuario
 */
class UsuarioListarUmHandlerFactory
{
    /**
     *	@param	ContainerInterface	$container
     *	@return	UsuarioListarUmHandler
     */
    public function	__invoke(ContainerInterface	$container): UsuarioListarUmHandler
    {
        return new	UsuarioListarUmHandler($container);
    }
}