<?php
/**
 * Created by PhpStorm.
 * User: osvaldoikuta
 * Date: 2019-03-27
 * Time: 21:48
 */
declare(strict_types=1);

namespace App\Handler\Factory\Mensagem;

use App\Handler\Mensagem\MensagemDeletarHandler;
use Interop\Container\ContainerInterface;
/**
 *	Class	MensagemDeletarHandlerFactory
 *	@package	App\Handler\Factory\Mensagem
 */
class MensagemDeletarHandlerFactory
{
    /**
     *	@param	ContainerInterface	$container
     *	@return	MensagemDeletarHandler
     */
    public function	__invoke(ContainerInterface	$container): MensagemDeletarHandler
    {
        return new	MensagemDeletarHandler($container);
    }
}