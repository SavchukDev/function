<?php
function static_vars_func(){
    static $var = 0;
    $var++;
    return $var;
}
echo static_vars_func();
echo static_vars_func();
echo static_vars_func();

for ($i = 0; $i < 5; $i++) {
    echo static_vars_func();
}
echo "\n";
function static_vars_func_rec(){
    static $var = 0;
    $var++;
    echo $var;
    if ($var < 5) {
        static_vars_func_rec();
    }
}
static_vars_func_rec();
echo "\n";
function static_vars_func_rec_2($var){
    $var++;
    echo $var;
    if ($var < 5) {
        static_vars_func_rec_2($var);
    }
}
static_vars_func_rec_2(0);