<?php
/**
 * Created by PhpStorm.
 * User: osvaldoikuta
 * Date: 2019-03-27
 * Time: 20:14
 */

declare(strict_types=1);

namespace App\Handler\Factory\TipoUsuario;

use App\Handler\TipoUsuario\TipoUsuarioAlterarHandler;
use Interop\Container\ContainerInterface;
/**
 * Class TipoUsuarioAlterarHandlerFactory
 * @package App\Handler\Factory\TipoUsuario
 */
class TipoUsuarioAlterarHandlerFactory
{
    /**
     * @param ContainerInterface $container
     * @return TipoUsuarioAlterarHandler
     */
    public function __invoke(ContainerInterface $container): TipoUsuarioAlterarHandler
    {
        return new TipoUsuarioAlterarHandler($container);
    }
}