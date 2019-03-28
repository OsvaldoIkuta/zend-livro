<?php

declare(strict_types=1);

use Psr\Container\ContainerInterface;
use Zend\Expressive\Application;
use Zend\Expressive\MiddlewareFactory;

/**
 * Setup routes with a single request method:
 *
 * $app->get('/', App\Handler\HomePageHandler::class, 'home');
 * $app->post('/album', App\Handler\AlbumCreateHandler::class, 'album.create');
 * $app->put('/album/:id', App\Handler\AlbumUpdateHandler::class, 'album.put');
 * $app->patch('/album/:id', App\Handler\AlbumUpdateHandler::class, 'album.patch');
 * $app->delete('/album/:id', App\Handler\AlbumDeleteHandler::class, 'album.delete');
 *
 * Or with multiple request methods:
 *
 * $app->route('/contact', App\Handler\ContactHandler::class, ['GET', 'POST', ...], 'contact');
 *
 * Or handling all request methods:
 *
 * $app->route('/contact', App\Handler\ContactHandler::class)->setName('contact');
 *
 * or:
 *
 * $app->route(
 *     '/contact',
 *     App\Handler\ContactHandler::class,
 *     Zend\Expressive\Router\Route::HTTP_METHOD_ANY,
 *     'contact'
 * );
 */
return function (Application $app, MiddlewareFactory $factory, ContainerInterface $container) : void 
{
    $app->get('/', App\Handler\HomePageHandler::class, 'home');
    $app->get('/api/ping', App\Handler\PingHandler::class, 'api.ping');
    $app->get('/api/test-doctrine-connection', App\Handler\TestDoctrineConnectionHandler::class, 'api.test-doctrine-connection');
    //URLs Tipo Usuário
    $app->get('/api/tipos-de-usuarios/listar-todos', App\Handler\TipoUsuario\TipoUsuarioListarHandler::class, 'api.tipos-de-usuarios.listar-todos');
    $app->get('/api/tipos-de-usuarios/listar-um/{id}', App\Handler\TipoUsuario\TipoUsuarioListarUmHandler::class, 'api.tipos-de-usuarios.listar-um');
    $app->post('/api/tipos-de-usuarios/criar', App\Handler\TipoUsuario\TipoUsuarioCriarHandler::class, 'api.tipos-de-usuarios.criar');
    $app->put('/api/tipos-de-usuarios/alterar/{id}', App\Handler\TipoUsuario\TipoUsuarioAlterarHandler::class, 'api.tipos-de-usuarios.alterar');
    $app->delete('/api/tipos-de-usuarios/deletar/{id}', App\Handler\TipoUsuario\TipoUsuarioDeletarHandler::class, 'api.tipos-de-usuarios.deletar');
    //URLs Usuario
};
