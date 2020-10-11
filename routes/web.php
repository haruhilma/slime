<?php
/*
 * Routing System
 * @hilmanrdn 18-01-2017
 */

//$app->get('/', '\App\Controllers\HomeController:index');

use App\models\Mahamodel;

$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, 'home.twig', []);
});

$app->get('/mahasiswa', function ($request, $response, $args) {
     $data =  json_decode(Mahamodel::all()->toJson(),1);
    return $this->view->render($response, 'table.twig',['tr' => $data]);
});

$app->post('/addMahasiswa', Mahasiswa::class . ":addMaha");

