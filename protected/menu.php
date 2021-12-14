<?php
/*$menu = [
    'href' => '#',
    'title' => 'Képzések',
    'extra' => ['style' => 'color:red', 'target' => '_blank'],
    'childs' => [
        [
        'href' => '#',
        'title' => 'Egyetemek',
        'childs' =>[
                [
                    'href' => 'https://hu.wikipedia.org/wiki/BSc',
                    'title' => 'Alapképzés'
                ],
                [
                    'href' => 'https://hu.wikipedia.org/wiki/Mesterk%C3%A9pz%C3%A9s',
                    'title' => 'Mesterképzés'
                ]
            ]
       ],
       [
            'href' => 'https://hu.wikipedia.org/wiki/Orsz%C3%A1gos_k%C3%A9pz%C3%A9si_jegyz%C3%A9k',
            'title' => 'OKJ képzés'
        ],
        [
            'href' => 'https://hu.wikipedia.org/wiki/%C3%89retts%C3%A9gi_vizsga',
            'title' => 'Érettségi vizsga'
        ],
        [
            'href' => 'https://hu.wikipedia.org/wiki/Szakk%C3%A9pz%C3%A9s_Magyarorsz%C3%A1gon',
            'title' => 'Szakképzés'
        ]
    ]
];*/
/*echo '<pre>';
print_r($menu);
echo '</pre>';*/
/*require_once CORE_DIR.'views.php';
print_menu($menu);*/

$menu= [
 [
     'href' => '#',
     'title' => 'Képzések',
     'extra' => ['style' => 'color: red;', 'target' => '_blank'],
     'childs' => [
         [
             'href' => '#',
             'title' => 'Egyetemek',
             'childs' => [
                 [     
                    'href' => 'https://hu.wikipedia.org/wiki/BSc',
                    'title' => 'Alapképzés'
                 ],
                 [
                     'href' => 'https://hu.wikipedia.org/wiki/Mesterk%C3%A9pz%C3%A9s',
                    'title' => 'Mesterképzés'
                 ]
                 
             ]
         ],
         [
             'href' => 'https://hu.wikipedia.org/wiki/Orsz%C3%A1gos_k%C3%A9pz%C3%A9si_jegyz%C3%A9k',
             'title' => 'OKJ képzés'
         ],
         [
             'href' => 'https://hu.wikipedia.org/wiki/%C3%89retts%C3%A9gi_vizsga',
             'title' => 'Érettségi vizsga'
         ],
         [
             'href' => 'https://hu.wikipedia.org/wiki/Szakk%C3%A9pz%C3%A9s_Magyarorsz%C3%A1gon',
             'title' => 'Szakképzés'
         ]
         
     ]
 ],
    [
     'href' => 'http://localhost/webbeadando/convert/converttopdf.php',
     'title' => 'PDF készítés',
     'extra' => ['style' => 'color: red;', 'target' => '_blank'],
    ],
    [
       'href' => '#',
     'title' => 'Táblák',
     'extra' => ['style' => 'color: red;', 'target' => '_blank'],
     'childs' =>  [
         [
             'href' => 'http://localhost/webbeadando/database/dolgozo.php',
             'title' => 'Dolgozó tábla',
             'extra' => ['style' => 'color: red;', 'target' => '_blank'],
         ],
         [
             'href' => 'http://localhost/webbeadando/database/vegzettseg.php',
             'title' => 'Végzettség tábla',
             'extra' => ['style' => 'color: red;', 'target' => '_blank'],
         ],
         [
             'href' => 'http://localhost/webbeadando/database/munkahelyek.php',
             'title' => 'Munkahelyek tábla',
             'extra' => ['style' => 'color: red;', 'target' => '_blank'],
         ],
         [
             'href' => 'http://localhost/webbeadando/database/szerzodes.php',
             'title' => 'Szerződés tábla',
             'extra' => ['style' => 'color: red;', 'target' => '_blank'],
         ],
         [
             'href' => 'http://localhost/webbeadando/database/munkaero.php',
             'title' => 'Munkaerő tábla',
             'extra' => ['style' => 'color: red;', 'target' => '_blank'],
         ]
     ]
    ]
 ];
 require_once CORE_DIR.'views.php';
 print_menu($menu);
 /*echo '<pre>';
 print_r($menu);
 echo '</pre>';*/
?>


<?php

$menuCnt= count($menu);

for ($i=0; $i<$menuCnt; $i++):?>
<?php
$extraString='';
if(array_key_exists('extra', $menu[$i]))
{
foreach($menu[$i]['extra'] as $key => $value)
    $extraString = $extraString.' '.$key.'='.$value; 
}
?>
<a href="<?= $menu[$i]['href']?>"<?=$extraString?>>
        <?= $menu[$i]['title']?>
</a>

<?php endfor; ?>