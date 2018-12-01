<?php

namespace App\Http\Middleware;

use Closure;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \Menu::make('MyNavBar', function ($menu) {
            $menu->add('Cliente', 'clientes');
            
            $menu->add('Fornecedor', 'fornecedores');
            $menu->add('Funcionário', 'services');
            $menu->add('Veículo', 'contact');
            $menu->add('Pagamento', 'contact');
        });

        return $next($request);
    }
}
