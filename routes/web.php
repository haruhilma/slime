<?php
/*
 * Routing System
 * @hilmanrdn 18-01-2017
 */

//$app->get('/', '\App\Controllers\HomeController:index');

$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, 'home.twig', []);
});

$app->get('/mahasiswa', function ($request, $response, $args) {
     echo Mahamodel::all()->toJson();
    return $this->view->render($response, 'table.twig', []);
});

$app->post('/addMahasiswa', Mahasiswa::class . ":addMaha");

