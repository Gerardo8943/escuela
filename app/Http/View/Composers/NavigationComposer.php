<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class NavigationComposer
{
    public function compose(View $view)
    {
        $groups = [
            // Navlist normal que no se expande
            [
                'type' => 'navlist',
                'heading' => 'Principal',
                'links' => [
                    [
                        'name' => 'Dashboard',
                        'icon' => 'home',
                        'route' => 'dashboard',
                    ],

                ],
            ],

             [
                'type' => 'navlist',
                'heading' => 'Unidades curriculares',
                'links' => [
                    [
                        'name' => 'Horario de clases',
                        'icon' => 'forward',
                        'route' => 'dashboard',
                    ],

                     [
                        'name' => 'Materias inscritas',
                        'icon' => 'inbox-stack',
                        'route' => 'profile.edit',
                    ],

                ],
            ],


    
 ];

        $view->with('groups', $groups);
    }
}
