<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function index()
    {
        error_log("the client controller is called");
        return Client::all();

    }


    public function delete($id)
    {
        error_log("delte id is ".$id);
        error_log("the delete option is called");
        Client::find($id)->delete();

        // return response()->json('The client successfully deleted');

    }

    public function store(Request $request){
        error_log("trying to save client");
        error_log(print_r($request->all(),true));
        error_log($request->firstName);
        error_log($request->lastName);

        $validatedData = $request->validate([
            'firstName' => 'required|min:3',
            'lastName' => 'required',
        ]);


        $client = new Client;
        $client->firstName = $request->firstName;
        $client->lastName = $request->lastName;
        error_log("werkt tot hier");
        $client->save();
        error_log("save heeft gewerkt");

        // Todo::create($request->all());


    }

    public function update(Request $request,$id)
    {
        error_log("update client data ".$id);
        $client = Client::find($id);
        $client->firstName = $request->firstName;
        $client->lastName = $request->lastName;
        error_log("werkt tot hier");
        $client->save();
        error_log("save heeft gewerkt");
    }
}
