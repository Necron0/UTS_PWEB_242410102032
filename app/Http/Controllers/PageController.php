<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        private $items = [
            [
                'gambar'=>'https://luxurypulse.com/img/pictures/68ed2d323e954copie.jpeg',
                'nama'=>'Ferrari LaFerrari Aperta for sale',
                'harga'=>'$ 6,943,499'],
            [
                'gambar'=>'https://luxurypulse.com/img/pictures/68ed2fdace3b4copie.jpeg',
                'nama'=> 'Bugatti Divo',
                'harga'=> '$ 8,441,117'
            ],
            [
                'gambar'=>'https://luxurypulse.com/img/pictures/68c9a1999780cdc5a03.jpg',
                'nama'=> 'SLS AMG Black Series',
                'harga'=> '$ 899,900'
            ],
        ];


        public function index()
        {
            return view('pengelolaan', [
            'items' => $this->items
        ]);
        }

    public function login()
    {
        return view('login');
    }



    public function dashboard(Request $r)
    {
        $username = $r->query('username');
        $jumlah = count($this->items);
        return view('dashboard', compact('username','jumlah'));

    }


    public function profile(Request $r)
    {
        $username = $r->query('username');
        return view('profile', compact('username'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
