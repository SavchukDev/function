<?php
define('GENDER_MALE', 'male');
define('GENDER_FEMALE', 'female');

// Классификация машин
define('CAR_CLASS_SEDAN', 'sedan');

// --------------------------------------

// Список гендерной принадлежности
$genders = [
    GENDER_MALE,
    GENDER_FEMALE
];

// Список классов машин
$classes_cars = [
    CAR_CLASS_SEDAN,
];

// Страны
$countries = [
    [
        // ID страны
        'id' => 1,
        'name' => 'Italia'
    ],
    [
        'id' => 2,
        'name' => 'USA'
    ],
    [
        'id' => 3,
        'name' => 'Michigan'
    ]
];

// Массив городов
$cities = [
    [
        // ID города
        'id' => 1,
        'name' => 'Milano',
        // ID Страны
        'country_id' => 1
    ],
    [
        'id' => 2,
        'name' => 'Flat Rock',
        'country_id' => 3
    ]
];

// Пользователи
$users = [
    [
        // ID пользователя
        'id' => 1,
        'first_name' => 'Валентин',
        'last_name' => 'Радужный',
        'second_name' => 'Игоревич',
        'login' => 'valentin',
        'password' => '78vrE0871',
        'gender' => GENDER_MALE,
        'addition_info' => null,
        'birthday' => '14.05.1990',
    ],
    [
<<<<<<< HEAD
        'id' => 2,//param=>query
=======
        'id' => 2,
>>>>>>> cc94f2f8a764032f9ad98e8c8157ac2097e6561e
        'first_name' => 'Олег',
        'last_name' => 'Мозговой',
        'second_name' => 'Дмитриевич',
        'login' => 'oleg',
        'password' => 'A87s08w7',
        'gender' => GENDER_MALE,
        'addition_info' => 'Машины - моя стихия',
        'birthday' => '10.07.1991',
    ],
    [
        'id' => 3,
        'first_name' => 'Виктория',
        'last_name' => 'Рыбкина',
        'second_name' => 'Александровна',
        'login' => 'prosto_vika',
        'password' => '9Wd803d',
        'gender' => GENDER_FEMALE,
        'addition_info' => 'Я феминистка',
        'birthday' => '23.07.1989',
    ],
];

// Машины
$cars = [
    [
        // ID машины
<<<<<<< HEAD

=======
>>>>>>> cc94f2f8a764032f9ad98e8c8157ac2097e6561e
        'id' => 1,
        'name' => 'Alfa Romeo MiTo',
        'company' => 'Alfa Romeo',
        'city_id' => 1,
        'class' => CAR_CLASS_SEDAN,
    ],
    [
        'id' => 2,
        'name' => 'Ford Mustang',
        'company' => 'Ford',
        'city_id' => 2,
        'class' => CAR_CLASS_SEDAN,
    ],
];

// Принадлежание машин пользователям
$users_cars = [
    [
        // ID записи: <пользователь-машина>
        'id' => 1,
        'user_id' => 2,
        'car_id' => 1
    ],
    [
        'id' => 2,
        'user_id' => 3,
        'car_id' => 1
    ],
    [
        'id' => 3,
        'user_id' => 3,
        'car_id' => 2
    ],
    // И да, у феминистки 2 машины - это не ошибка
];
