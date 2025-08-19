<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $artists = [
        [
            'id' => 1,
            'name' => 'Pracownia tatuażu',
            'insta' => '@zloty.bohomaz',
            'icon' => 'house',
            'hover' => 4,
            'url' => 'https://instagram.com/zloty.bohomaz?igshid=YmMyMTA2M2Y=',
            'photo' => '',
            'p1'=>'',
            'p2'=>''
        ],
        [
            'id' => 2,
            'name' => 'Daniel',
            'insta' => '@biszusedziara',
            'icon' => 'star',
            'hover' => 2,
            'url' => 'https://instagram.com/biszusedziara?igshid=YmMyMTA2M2Y=',
            'photo' => 'bisz.jpg',
            'p1'=>'Zaczął tatuować od razu po ukończeniu 19 roku życia. A że teraz będzie mieć 22 lata to mijają już za niedługo 3 lata od momentu zaczęcia swojej działalności. Jednak na otwarcie studia zdecydował się dopiero w tym roku w styczniu i jest jednym z młodszych założycieli studia tatuażu w Polsce. Ale jak widać był to dobry krok ze względu na ilość osób chętnych do niego na tatuaż.',
            'p2'=>'Sam też mówi, że to wy klienci zbudowaliści to studio, poprzez zaufanie wasze do jego pracy. Cieszy się, że może dzielić sie swoją pasją z wami i tworzyć miejsce, w którym każdy będzie się czuł jak u siebie.'
        ]
        
    ];
}
