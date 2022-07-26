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
  $clientCreate = Client::create(
    $request->all()
  );

  if(!empty($request->file('cover'))){
    $clientCreate->cover = $request->file('cover')->store('client');
    $clientCreate->save();
  }
  return redirect()->route('admin.clients.index')->withErrors('Salvo com sucesso');


    //    $client = new Client();
    //    $client->fill($request->all());
    //    dd($client->getAttributes(), $request->all());

}

public function edit ($id){

  $tit_edit = 'Editar';
  $client = Client::where('id', $id)->first();

  return view ('admin.clients.edit', [
    'client' => $client,
    'tit_edit' => $tit_edit
  ]);
}

public function destroy($id)
{
  $client = Client::find($id);
  $client->delete();

  return redirect()->route('admin.clients.index')->withErrors('Deletado com sucesso');
}

}
