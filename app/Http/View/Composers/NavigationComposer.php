<?php
namespace App\Http\View\Composers;

use Illuminate\View\View;

class NavigationComposer
{
    public function compose(View $view)
    {
        $groups = [
            'Platform' => [
                [
                    'name' => 'Dashboard',
                    'icon' => 'home',
                    'route' => 'dashboard',
                ],
            ],
        ];


        $view->with('groups', $groups);
    }
}
