<?php 
    
     require 'functions.php';
     date_default_timezone_set("Europe/Moscow");
     $title = 'YetyCave';
     $timer = timer('tomorrow');
     

 $contentPage = renderTemplate('./template/main.php',['lots'=>[
        [ 
            'title'=>"2014 Rossignol District Snowboard",
            'category'=>"Доски и лыжи",
            'price'=> 10999,
            'image'=> "lot-1",
            'imgAlt'=>"сноуборд"
        ],
        [ 
            'title'=>"DC Ply Mens 2016/2017 Snowboard",
            'category'=>"Доски и лыжи",
            'price'=> 159999,
            'image'=> "lot-2",
            'imgAlt'=>"сноуборд"
        ],
        [ 
            'title'=>"Крепления Union Contact Pro 2015 года размер L/XL",
            'category'=>"Крепления",
            'price'=> 8000,
            'image'=> "lot-3",
            'imgAlt'=>"Крепления"
        ],
        [ 
            'title'=>"Ботинки для сноуборда DC Mutiny Charocal",
            'category'=>"Ботинки",
            'price'=> 10999.1,
            'image'=> "lot-4",
            'imgAlt'=>"Ботинки"
        ],
        [ 
            'title'=>"Куртка для сноуборда DC Mutiny Charocal",
            'category'=>"Одежда",
            'price'=> 7500,
            'image'=> "lot-5",
            'imgAlt'=>"Куртка"
        ],
        [ 
            'title'=>"Маска Oacley Canopy",
            'category'=>"Разное",
            'price'=> 5400,
            'image'=> "lot-6",
            'imgAlt'=>"Маска"
        ]

    ],
    'timer'=> $timer
]);
   $layout = renderTemplate('./template/layout.php',
                        [ 'title' => $title,
                          'is_auth' => 0,
                          'user_name' => 'Константин',
                          'user_avatar' => 'img/user.jpg' , 
                          'category'=>["Доски и лыжи","Крепления","Ботинки","Одежда","Инструменты","Разное"],
                          'contentPage' => $contentPage
]);

    print($layout);
    //print(include_template('test1.php',['test'=> 'Is php','test3'=>'Ola!!']));
?>