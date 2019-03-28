<?php
/**
 * Created by PhpStorm.
 * User: osvaldoikuta
 * Date: 2019-03-27
 * Time: 20:25
 */

declare(strict_types=1);

namespace App\Handler\Factory\TipoUsuario;

use App\Handler\TipoUsuario\TipoUsuarioDeletarHandler;
use Interop\Container\ContainerInterface;
/**
 *	Class	TipoUsuarioDeletarHandlerFactory
 *	@package	App\Handler\Factory\TipoUsuario
 */
class TipoUsuarioDeletarHandlerFactory
{
				/**
                 *	@param	ContainerInterface	$container
                 *	@return	TipoUsuarioDeletarHandler
                 */
    public function	__invoke(ContainerInterface	$container): TipoUsuarioDeletarHandler
    {
        return new	TipoUsuarioDeletarHandler($container);
    }
}