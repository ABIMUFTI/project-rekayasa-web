<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    //
     public function index()
{
    $mahasiswa =[
    'nim' => '251011701092',
    'nama' => 'Abi Mufti Narvani Iztihadi',
    'prodi' => 'Sistem Informasi',
    'email' => 'abimuftinarvaniiztihadi@example.com',
    'kampus' => 'UNIVERSITAS PAMULANG',
    'status' => 'Aktif',
    ];

    return view('mahasiswa.index', compact('mahasiswa'));
}
}

   
