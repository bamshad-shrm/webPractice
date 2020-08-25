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
		$menu->add('Skills','http://bamshad-shm.com/my/skills/');
		$menu->add('Education','http://bamshad-shm.com/my/education/');
		$menu->add('Sample Works','http://bamshad-shm.com/my/sample%20works/');
		$menu->add('Work Ex','http://bamshad-shm.com/my/work%20ex/');
		$menu->add('Certificates','http://bamshad-shm.com/my/certificates/');
		});

        return $next($request);
    }
}
