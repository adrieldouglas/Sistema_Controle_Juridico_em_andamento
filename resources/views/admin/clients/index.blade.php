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
                                href="{{ route('admin.clients.create') }}" class="float-right btn btn-success"
                                data-toggle="novo-cliente" title="Novo Cliente"><i class="bi bi-plus-square"></i> Novo
                                Cliente</a></h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-inline">
                                    <input type="search" name="" class="form-control form-control-sm"
                                        placeholder="Buscar" style="border-color: orange;">
                                    <button type="submit" class="btn btn-sm btn-success"><i
                                            class="bi bi-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <table class="table table-hover mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome do cliente</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client )
                                <tr>
                                    <th scope="row">{{ $client->id }}</th>
                                    <td><a href="" class="text-danger" data-toggle="edit" title="Editar"><i
                                                class="bi bi-pencil-fill"></i> {{ $client->name }}</a></td>
                                    <td><a href="mailto:{{ $client->email }}" class="text-danger" data-toggle="email" title="Enviar e-mail"><i
                                                class="bi bi-envelope-paper-fill"></i> {{ $client->email }}</a></td>
                                    <td>{{ $client->phone }}</td>
                                    <td>
                                        <a href="" data-toggle="view" title="Visualizar"><i
                                                class="bi bi-eye-fill text-warning"></i></a>
                                        <a href="" data-toggle="whatsapp" title="Abrir Whatsapp"><i
                                                class="bi bi-whatsapp text-success"></i></a>
                                        <a href="" data-toggle="delete" title="Apagar"><i
                                                class="bi bi-trash3-fill text-danger"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(function() {
            $('[data-toggle="edit"]').tooltip()
            $('[data-toggle="email"]').tooltip()
            $('[data-toggle="view"]').tooltip()
            $('[data-toggle="whatsapp"]').tooltip()
            $('[data-toggle="delete"]').tooltip()
            $('[data-toggle="novo-cliente"]').tooltip()
        })
    </script>
@endsection
