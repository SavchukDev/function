<?php
include 'index.php';
//get_country(id)` - Получение страны по ее ID.
echo "---------------------1--------------------------\n";
function get_country($id)
{
    global $countries;
    for ($i = 0; $i < count($countries); $i++) {
        $country = $countries[$i];
        //print_r($countries);
        if ($country['id'] == $id) {
            return $country ;
        }
    }
    return "Nety";
}

print_r ($a=(get_country(2)));
echo $a['name']."\n";

//2. `get_country_city(city_id)` - Получение страны по ID города.
//1.если я ввожу в городе 1 то =>печать резултата(id,name country и тд)
//2.условие if $country[$i]['id']=$cities[$i]['country'] возвратить результат
//3.перебор $country
//4.global $countries
//5.передача в переменную результата по id $cities( not return)
//6.сравнивать id $cities с передаваемого аргумента функции(if)
//7.перебор массива $cities
//8.global $cities
echo "---------------------2--------------------------\n";

function get_country_city($city_id){
    global $cities;                          //8
    global $countries;                       //4
    for ($i = 0; $i < count($cities); $i++) { //7
        $city = $cities[$i];                 //7
        if ($city['id']==$city_id) {         //6
            echo "ID city = $city_id; name city = ".$city['name'].";\n";//1
           $city=$city['country_id'];        //5
            break;
        }
    }
//         echo "sdfds\n";
//    echo "ID city =". $city['id']."; name city = ".$city['name']."$city;\n";//1
    for($i=0;$i<count($countries);$i++){    //3
        if  ($countries[$i]['id']==$city){  //2
           // echo $countries[$i]['name'];
            return $countries[$i];          //2
        }
    }
    return "нету города с таким ID \n";
}
print_r($get_country_city=get_country_city(1));
// 3.get_cities_country(country_id)` - Получение списка всех городов,
//которые принадлежат стране по ее ID.
//global $country,cities
//вывести список по ид страны города все
//перебор массива country
//условие if (country[i][id]==country_id
// получить етот масив(записать в переменую $city_id)
// перебор сити +условие
//if city[i][country_id]=city_id
// вернуть резултат  через return(cities[i][name]
echo "---------------------3--------------------------\n";

function get_cities_country($country_id){
    global $cities,$countries;
    for($i=0;$i<count($countries);$i++){
        if($countries[$i]['id'] ==$country_id){
            $country=$countries[$i];
            //print_r( $country);
            break;
        }
    }
    //var_dump( count($country['id']));
    for($i=0;$i<count($cities);$i++){
      if ($cities[$i]['country_id']==$country['id']){
          //print_r($cities[$i]);
          return $cities[$i];
      }
    }
    return "no city";
}
print_r(get_cities_country(1));

//get_city(id)` - Получение города по его ID.
echo "---------------------4--------------------------\n";
function get_city($id){
    global $cities;
    for($i=0;$i<count($cities);$i++){
        if($cities[$i]['id']==$id){
            echo $cities[$i]['id'].' = '.$cities[$i]['name'] ;
        }
    }
}
get_city(2);

//get_user(id)` - Получение пользователя по его ID. Если ID пользователя не найден,
//то выдаем ошибку, что пользователь не найден по такому-то ID.
echo "\n---------------------5--------------------------\n";
function get_user($id){
    global $users;
    for($i=0;$i<count($users);$i++){
        if ($users[$i]['id']==$id){
            return $users[$i];
        }
    } return "пользователь не найден по такому-то ID\n";
}
print_r(get_user(4));

//create_user_full_name(first_name, last_name, second_name)` - Функция, которая
//объеденяет имя, фамилию и отчество пользователя в полное его имя.
echo "---------------------6--------------------------\n";
function create_user_full_name($first_name,$last_name,$second_name){
    //return "$first_name $last_name $second_name";
    return $first_name .' '.$last_name .' '.$second_name;
}
echo create_user_full_name('Ильинов','Виталий','Сергеевич');

//get_user_full_name(id)` - Получение полного имени пользователя по его ID.
echo "\n---------------------7--------------------------\n";
function get_user_full_name($id){
    global $users;
    for ($i=0;$i<count($users);$i++){
        if($users[$i]['id']==$id){
           return $users[$i]['last_name'].' '.$users[$i]['first_name'].' '.$users[$i]['second_name'];
        }
    }
}
echo get_user_full_name(3);

//get_car(id)` - Получение машины по ее ID
echo "\n---------------------8--------------------------\n";
function get_car($id){
    global $cars;
    for($i=0;$i<count($cars);$i++){
        if($cars[$i]['id']==$id){
            return $cars[$i]['name'];
        }
    }
}
echo get_car(2);

//get_users(ids)` - Получение списка пользователей, где параметр `ids` - массив
// списка пользователей, которых нужно получить. Если ID пользователя не найден,
// то выдаем предупреждение, что пользователь не найден по такому-то ID.
//1. get_users(1)

echo "\n---------------------9--------------------------\n";
function get_users($ids){
    //return $ids;
    global $users;
    for($i=0;$i<count($users);$i++){
        if ($users[$i]['id']==$ids){
            return $users[$i];
        }
    }return "пользователь не найден по такому-то ID";
}
print_r(get_users(3));

//1.поиск пользователя по параметрам(id,first_name и тд
//2.
echo "\n---------------------10--------------------------\n";
function search_user(array $options)
{
    global $users;
    $result = [];
    for ($i =0; $i < count($users); $i++){
        $user = $users[$i];
        $is_search = true;
        foreach ($options as $param => $query) {
            // compactness
            if (!isset($user[$param])){
                continue;
            }
            if (is_numeric($query)){
                // id, statuses
                if ($user[$param] != $query){
                    $is_search &= false;
                    break;
                }
            } else if (is_string($query)){
                // First_name, last_name etc.
                if (strpos($user[$param], $query) === false){
                    $is_search &= false;
                    break;
                }
            }
        }
        if ($is_search){
            //push to array
            $result[] = $user;
        }
    }
    return $result;
}
print_r(search_user([
    "first_name" => "Олег",
    "last_name" => "Моз",
]));

// `change_user_pasword(user_id, old_password, new_password)` - Функция для смена пароля
// пользователя. Успешная смена пароля произойдет только в том случае, если старый пароль
// был введен верно, иначе генерируем ошибку.
echo "\n---------------------11--------------------------\n";

function change_user_pasword($user_id, $old_password, $new_password){
global $users;
    for($i=0;$i<count($users);$i++){
        //print_r( $users[$i]);
        if ($users[$i]['id']==$user_id){
            //echo $users[$i]['first_name'];
            if ($users[$i]['password']==$old_password){
                $users[$i]['password']=$new_password;
                echo $users[$i]['password'];
            }else {
                echo "неверно ввели старрый пароль";
            }
        }
    }
}
change_user_pasword(1,'78vrE0871',"12345");

//get_cars_user(user_id)` - Вывод списка машин пользователя. Если машин у пользователя нет,
// то функция должна вернуть `null`.
//user.id= users_cars.user_id
//user.car_id=cars.is
echo "\n---------------------12--------------------------\n";
function get_cars_user($user_id)
{
    global $users;
    global $cars;
    global $users_cars;
    $result=[];
    for ($i = 0; $i < count($users); $i++) {
        if ($users[$i]['id'] == $user_id) {
            $user=$users[$i]['id'];
            break;
        }
    }
    for ($i = 0; $i < count($users_cars); $i++) {
        if ($users_cars[$i]['user_id'] == $user) {
            // print_r($users_cars[$i]);
            for($k=0;$k<count($cars);$k++){
                if ($cars[$k]['id']==$users_cars[$i]['car_id']){
                    //print_r($cars[$k]);
                    $result[] =$cars[$k];
                }
            }
        }
    }if (empty($result)){
    return "ggg";
}else return $result;

}
//get_cars_user(2);
print_r(get_cars_user(3));


//13. `get_users_car(car_id)` - По ID машины вывести всех пользователей,
// которые приобрели данную машину.
echo "\n---------------------13--------------------------\n";
function get_users_car($car_id)
{
    global $users;
    global $users_cars;
    $result=[];
    for ($i = 0; $i < count($users_cars); $i++) {
        if ($users_cars[$i]['car_id'] == $car_id) {
            // через users_cars.user_d = user.id
             for($k=0;$k<count($users);$k++){
                 if ($users[$k]['id']==$users_cars[$i]['user_id']){
                     $result[]=$users[$k];
                     //print_r($result);
                 }
             }
        }
    }return $result;
}
//get_users_car(1);//car_id =>
print_r(get_users_car(1));