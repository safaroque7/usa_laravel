<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;

class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id, Request $request)
    {
        $clients = Client::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        $clients->name = $request->name;
        $clients->image = $request->JahirSir;
        $clients->phone = $request->phone;
        $clients->email = $request->email;
        $clients->address = $request->address;
        $clients->save();

        return redirect()->route('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($id, FlasherInterface $flasher)
    {
        $client = Client::find($id);

        if (empty($client)) {
            $flasher->addError('Post not found');
            return redirect()->route('welcome');
        }

        return view('layouts.view', [
            'faroque' => $client,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('layouts.edit', [
            'client' => $client,
        ]);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, FlasherInterface $flasher)
    {
        $clients = Client::findOrFail($id);
        if(empty($clients)){
            $flasher->error('Post not found');
            redirect()->route('updateRouter');
        }
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        $clients->name = $request->name;
        $clients->image = $request->JahirSir;
        $clients->phone = $request->phone;
        $clients->email = $request->email;
        $clients->address = $request->address;
        $clients->save();

        $flasher->addSuccess('Your post has been updated successfully. Your post id is ' . $clients->id);

        return redirect()->route('welcome');
    }

    /** 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id, FlasherInterface $flasher)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        $flasher->addSuccess('Your post has been deleted successfully.');
        return redirect()->route('welcome');
    }
}
