<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nim' => '251011701092',
            'nama' => 'Abi Mufti Narvani Iztihadi',
            'prodi' => 'Sistem Informasi',
            'email' => 'abimuftinarvaniiztihadi@gmail.com',
            'kampus' => 'Universitas Pamulang',
            'status' => 'Aktif',
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}