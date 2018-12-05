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
            if(\Auth::user()!=null){
                if(\Auth::user()->role == 0){
                    $menu->add('Cliente', 'clientes');
                    $menu->add('Fornecedor', 'fornecedores');
                    $menu->add('Funcionário', 'funcionarios');
                    $menu->add('Veículo', 'veiculos');
                    $menu->add('Produto', 'produtos');
                    $menu->add('Compra', 'compras');
                    $menu->add('Pagamento', 'contact');                    
                }
                if(\Auth::user()->role >= 2){                    
                    $menu->add('Veículo', 'veiculos');
                    $menu->add('Produto', 'produtos');                  
                }

            }

        });

        return $next($request);
    }
}
