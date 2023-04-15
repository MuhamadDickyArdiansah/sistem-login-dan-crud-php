<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index()
    {
        return view("halaman/index");
    }
    function tentang()
    {
        return view("halaman/tentang");
    }
    function perhitungan()
    {
        return view("halaman/perhitungan");
    }
    function aturan()
    {
        return view("halaman/aturan");
    }
    function pengelompokkan()
    {
        return view("halaman/pengelompokkan");
    }
    function panduan()
    {
        return view("halaman/panduan");
    }
    function kontak()
    {
        $data = [
            'judul' => 'Ini Adalah Halaman Kontak',
            'kontak' => [
                'email' => 'dirumahrafif@gmail.com',
                'youtube' => 'Programming di Rumahrafif'
            ]
        ];
        return view("halaman/kontak")->with($data);
    }
}
