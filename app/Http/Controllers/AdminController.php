<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function show_postingan()
    {
        return view('admin.postingan');
    }

    public function show_arsip()
    {
        return view('admin.arsip');
    }

    public function show_user()
    {
        return view('admin.user');
    }

    public function show_lampiran()
    {
        return view('admin.lampiran');
    }

    public function show_komentar()
    {
        return view('admin.komentar');
    }

    public function show_grafik()
    {
        return view('admin.grafik');
    }

    public function show_keluar()
    {
        return view('admin.keluar');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
