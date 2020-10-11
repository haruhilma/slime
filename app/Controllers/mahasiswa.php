<?php
/*
 * HomeController only for controller sample
 * @hilmanrdn 18-01-2017
 */

namespace App\Controllers;
use App\models\Mahamodel;

class Mahasiswa
{
   public function addMaha($request, $response){

    $dtCreate = Mahamodel::create([
            'user_nama' => $_POST['nama'],
            'user_nim' => $_POST['nim'],
            'user_jurusan' => $_POST['jurusan'],
            'user_created_at' => date('Y-m-d H:i:s')
    ]);
    
    $data = array('redirect' => '/mahasiswa');
    echo json_encode($data);

   }
}
