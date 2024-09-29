<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class QrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

   
      return view('qr-code');
    
  
    

    }
    public function generate(Request $request){

          if (!preg_match('/^http(s)?:\/\//', $url)) {
        $url = 'https://' . $url;
    }
        $text = $request->input('text', 'Your default text or URL here');
        if($text){
            $qrCode = QrCode::size(300)->generate($text);
        }
        else if(!$text){
            $qrCode = null;
        }
       
        return view('qr-code',compact('qrCode'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('qr-code.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('qr-code.store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('qr-code.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('qr-code.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return redirect()->route('qr-code.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return redirect()->route('qr-code.index');
    }
}
