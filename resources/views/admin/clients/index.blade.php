@extends('admin.layouts.master')

@section('content')

<title>{{ $tit_client }}</title>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card mt-4">
                <div class="card-body">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="{{ route('admin.home') }}"><i
                                class="bi bi-pc-display"></i> Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-danger" href="{{ route('admin.clients.index') }}"><i
                                    class="bi bi-person-square"></i> Clientes</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    @if ($errors->all())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><i class="bi bi-check2-circle"></i> {{ $error }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card mt-2">
                        <div class="card-body">
                            <h4 class="text-muted"><i class="bi bi-person-square"></i> Clientes <a
                                href="{{ route('admin.clients.create') }}" class="float-right btn btn-primary btn-lg"
                                data-toggle="novo-cliente" title="Novo Cliente"><i class="bi bi-plus-square"></i> Novo
                            Cliente</a></h4>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-inline">
                                        <input type="search" name="" class="form-control form-control-sm" placeholder="Buscar">
                                        <button type="submit" class="btn btn-sm btn-primary"><i
                                            class="bi bi-search text-white"></i></button>
                                        </div>
                                    </div>
                                </div>
                                @if(count($clients) > 0)
                                <table class="table table-hover mt-3">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nome do cliente</th>
                                            <th scope="col">E-mail</th>
                                            <th scope="col">CPF</th>
                                            <th scope="col">Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clients as $client )
                                        <tr>
                                            <th scope="row">{{ $client->id }}</th>

                                            <td><a href="{{ route('admin.clients.edit', $client->id) }}" class="text-danger" data-toggle="edit" title="Editar {{ $client->name }}"> {{ $client->name }}</a></td>

                                            <td><a href="mailto:{{ $client->email }}" class="text-danger" data-toggle="email" title="Enviar e-mail para {{ $client->email }}"><i class="bi bi-envelope-paper-fill"></i> {{ $client->email }}</a></td>

                                            <td>{{ $client->document_cpf }}</td>

                                            <td>
                                                <form action="{{ route('admin.clients.destroy', $client->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                <a href="" data-toggle="view" title="Visualizar" class="btn btn-sm btn-light"><i class="bi bi-eye-fill text-warning"></i></a>

                                                <a href="https://api.whatsapp.com/send?phone={{ $client->phone }}&text=Olá, {{$client->name}} ! tudo bem." data-toggle="whatsapp" title="conversar com {{ $client->name }} pelo Whatsapp" class="btn btn-sm btn-light" target="_black"><i class="bi bi-whatsapp text-success"></i></a>

                                                <button type="submit" class="btn btn-sm btn-light" onclick="return deleteClient();" data-toggle="delete" title="Deletar {{ $client->name }}"><i class="bi bi-trash3-fill text-danger"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                <p class="text-muted text-center">Tabela Vazia</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endsection

            @section('script')
            <script>
                $(function() {
                    $('[data-toggle="edit"]').tooltip();
                    $('[data-toggle="email"]').tooltip();
                    $('[data-toggle="view"]').tooltip();
                    $('[data-toggle="whatsapp"]').tooltip();
                    $('[data-toggle="delete"]').tooltip();
                    $('[data-toggle="novo-cliente"]').tooltip();
                });

                function deleteClient() {
                    var resposta = confirm("Deseja deletar esse cliente?");
                    if (resposta == true) {
                        return true;
                    } else {
                        return false;
                    }
                }
            </script>
            @endsection
