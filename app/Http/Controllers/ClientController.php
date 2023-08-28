<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Flasher\Prime\FlasherInterface;

class ClientController extends Controller
{
    public function addClintMethod(Request $request, FlasherInterface $flasher)
    {
        $request->validate([
            'name'      => 'required',
            'phone'     => 'required',
            'email'     => 'required',
            'address'   => 'required',
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $clients = new Client();

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        if($request->hasFile("image")){
            $files = $request->file("image");
            foreach($files as $file){
                $imageName = time().'_'.$file->getClientOriginalName();
                $request['client_id'] = $client->id;
                $request['image'] = $imageName;
                $file->move(\public_path("/images"), $imageName);
                image::create($request->all());
            }
        }

        $clients->name = $request->name;
        $clients->image = $imageName;
        $clients->phone = $request->phone;
        $clients->email = $request->email;
        $clients->address = $request->address;
        $clients->save();

        $flasher->addSuccess('Your Post has been posted successfully.');
        return redirect()->route('welcome');
    }
}
