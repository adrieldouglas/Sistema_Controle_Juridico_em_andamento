<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Client as ClientRequest;

class ClientController extends Controller
{
   public function index ()
   {
   	$tit_client = "Clientes";

    $clients = Client::all();

   	return view ('admin.clients.index', [
   		'tit_client' => $tit_client,
        'clients' => $clients
   	]);
   }

   public function create ()
   {
   	$tit_novo = "Novo Cliente";
   	return view ('admin.clients.create', [
   		'tit_novo' => $tit_novo
   	]);
   }

   public function store(ClientRequest $request)
   {
    //    $client = new Client();
    //    $client->fill($request->all());
    //    dd($client->getAttributes(), $request->all());

    $clientCreate = CLient::create(
        $request->all()
    );

    if(!empty($request->file('cover'))){
        $clientCreate->cover = $request->file('cover')->store('client');
        $clientCreate->save();
    }
    return redirect()->route('admin.clients.index')->withErrors('Salvo com sucesso');

   }
}
