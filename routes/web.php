<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/get', function(){
    return 'i am get method of api routing';
});


$router->post('/post',function (){
    return 'i am post method of api routing';
});

$router->put('/put',function (){
    return 'i am put method of api routing';
});

$router->delete('/delete',function (){
    return 'i am delete method of api routing';
});