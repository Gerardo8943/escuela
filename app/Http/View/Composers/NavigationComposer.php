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
                'heading' => 'Siderbar',
                'links' => [
                    [
                        'name' => 'Dashboard',
                        'icon' => 'home',
                        'route' => 'dashboard',
                    ],
                    
                ],
            ],
            //Navlist 
            [
                'type' => 'navlist',
                'heading' => 'Inscripcion',
                'links' => [
                    [
                        'name' => 'Nuevo semestre',
                        'route' => 'dashboard',
                    ],
                ]
            ]


        ];

        $view->with('groups', $groups);
    }
}
