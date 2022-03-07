<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Reseller;
use App\Models\Bobot;
use App\Models\Brg;
use App\Models\Multi;

class ResellerController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $re = Reseller::all();
        $re = Reseller::paginate(5);
        return view ('reseller.index',compact('re'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
        $request->validate([
            'nama' => 'required',
            'toko' => 'required',
            'tlp'  => 'required',
            'alt'  => 'required',
        ]); 
         Brg::create([
            
            'nama' => $request->nama,
            'toko' => $request->toko,
            'tlp'  => $request->tlp,
            'alt'  => $request->alt,
        ]);
      
        // Reseller::create($request->all());
        return redirect()->back();
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reseller = Reseller::find($id);
    
        return view ('reseller/edit',['reseller' => $reseller]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reseller = Reseller::find($id);
        $reseller -> update($request->all());
        
        return redirect('reseller');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reseller::destroy($id);
        return redirect('reseller');
    }
}
