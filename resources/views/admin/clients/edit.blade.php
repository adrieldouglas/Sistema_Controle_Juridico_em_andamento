@extends('admin.layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card mt-4">
                <div class="card-body">
                  <img src="{{ url('storage/' . $client->cover) }}" class="rounded img-fluid float-right" alt="perfil" width="30">
                  <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="{{ route('admin.home') }}"><i
                            class="bi bi-pc-display"></i> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="{{ route('admin.clients.index') }}"><i
                                class="bi bi-person-square"></i> Clientes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-danger" href="{{ route('admin.clients.edit', $client->id) }}"><i class="bi bi-pencil-fill"></i> Cliente: {{ $client->name }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12">
                @if ($errors->all())
                @foreach ($errors->all() as $error)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ $error }}</strong>
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
                        <h4 class="text-muted text-right"><i class="bi bi-pencil-fill"></i> Editar Cliente</h4>                      
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-link active" id="nav-personal-information-tab" data-toggle="tab"
                                href="#nav-personal-information" role="tab" aria-controls="nav-personal-information"
                                aria-selected="true">Informações Pessoas</a>

                                <a class="nav-link" id="nav-additional-information-tab" data-toggle="tab"
                                href="#nav-additional-information" role="tab"
                                aria-controls="nav-additional-information" aria-selected="false">Informações Complementares</a>

                                <a class="nav-link" id="nav-documentation-tab" data-toggle="tab" href="#nav-documentation"
                                role="tab" aria-controls="nav-documentation" aria-selected="false">Documentação</a>
                            </div>
                        </nav>
                        <form action="{{ route('admin.clients.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-personal-information" role="tabpanel"
                                aria-labelledby="nav-personal-information-tab">
                                <div class="row mt-3">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="name">Nome Completo<i
                                                class="bi bi-asterisk text-danger small"></i></label>
                                                <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Digite o nome" style="border-color: orange;" value="{{ old('name') ?? $client->name }}">

                                                @if ($errors->has('name'))
                                                <div class="invalid-feedback">
                                                    <i class="bi bi-exclamation-triangle"></i>
                                                    {{ $errors->first('name') }}
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="nickname">Apelido</label>
                                                <input type="text" name="nickname" class="form-control"
                                                placeholder="Digite o apelido" style="border-color: orange;" value="{{ old('nickname') ?? $client->nickname }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="phone">Celular</label>
                                                <input type="text" name="phone" class="form-control"
                                                placeholder="55 (__) _____-____" data-mask="55 (00) 0 - 0000-0000"
                                                style="border-color: orange;" value="{{ old('phone') ?? $client->phone}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="email">E-mail<i class="bi bi-asterisk text-danger small"></i></label>
                                                <input type="text" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Digite o e-mail" style="border-color: orange;" value="{{ old('email') ?? $client->email }}">


                                                @if ($errors->has('email'))
                                                <div class="invalid-feedback">
                                                    <i class="bi bi-exclamation-triangle"></i>
                                                    {{ $errors->first('email') }}
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="address">Endereço</label>
                                                <input type="text" name="address" class="form-control"
                                                placeholder="Digite o endereço" style="border-color: orange;" value="{{ old('address') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="neighborhood">Bairro</label>
                                                <input type="text" name="neighborhood" class="form-control"
                                                placeholder="Digite o bairro" style="border-color: orange;" value="{{ old('neighborhood') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="city">Cidade</label>
                                                <input type="text" name="city" class="form-control"
                                                placeholder="Digite o cidade" style="border-color: orange;" value="{{ old('city') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="complement">Complemento</label>
                                                <input type="text" name="complement" class="form-control"
                                                placeholder="Digite o complemento" style="border-color: orange;" value="{{ old('complement') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="cover">Foto do cliente</label>
                                                <input type="file" name="cover" class="form-control-file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="state">Estado</label>
                                                <select id="state" name="state" class="form-control"
                                                style="border-color: orange;">
                                                <option selected disabled="">Selecionar</option>
                                                <option value="AC"
                                                @if (old('state') == 'AC') selected="selected" @endif>
                                                Acre
                                            </option>

                                            <option value="AL"
                                            @if (old('state') == 'AL') selected="selected" @endif>
                                            Alagoas
                                        </option>

                                        <option value="AP"
                                        @if (old('state') == 'AP') selected="selected" @endif>
                                        Amapá
                                    </option>

                                    <option value="AM"
                                    @if (old('state') == 'AM') selected="selected" @endif>
                                    Amazonas
                                </option>

                                <option value="BA"
                                @if (old('state') == 'BA') selected="selected" @endif>
                                Bahia
                            </option>

                            <option value="CE"
                            @if (old('state') == 'CE') selected="selected" @endif>
                            Ceará
                        </option>

                        <option value="DF"
                        @if (old('state') == 'DF') selected="selected" @endif>
                        Distrito Federal
                    </option>

                    <option value="ES"
                    @if (old('state') == 'ES') selected="selected" @endif>
                    Espírito Santo
                </option>

                <option value="GO"
                @if (old('state') == 'GO') selected="selected" @endif>
                Goiás
            </option>

            <option value="MA"
            @if (old('state') == 'MA') selected="selected" @endif>
            Maranhão
        </option>

        <option value="MT"
        @if (old('state') == 'MT') selected="selected" @endif>
        Mato
        Grosso
    </option>

    <option value="MS"
    @if (old('state') == 'MS') selected="selected" @endif>
    Mato
    Grosso do Sul
</option>

<option value="MG"
@if (old('state') == 'MG') selected="selected" @endif>
Minas
Gerais
</option>

<option value="PA"
@if (old('state') == 'PA') selected="selected" @endif>
Pará
</option>

<option value="PB"
@if (old('state') == 'PB') selected="selected" @endif>
Paraíba
</option>

<option value="PR"
@if (old('state') == 'PR') selected="selected" @endif>
Paraná
</option>

<option value="PE"
@if (old('state') == 'PE') selected="selected" @endif>
Pernambuco
</option>

<option value="PI"
@if (old('state') == 'PI') selected="selected" @endif>
Piauí
</option>

<option value="RJ"
@if (old('state') == 'RJ') selected="selected" @endif>
Rio
de Janeiro
</option>

<option value="RN"
@if (old('state') == 'RN') selected="selected" @endif>
Rio
Grande do Norte
</option>

<option value="RS"
@if (old('state') == 'RS') selected="selected" @endif>
Rio
Grande do Sul
</option>

<option value="RO"
@if (old('state') == 'RO') selected="selected" @endif>
Rondônia
</option>

<option value="RR"
@if (old('state') == 'PR') selected="selected" @endif>
Roraima
</option>

<option value="SC"
@if (old('state') == 'SC') selected="selected" @endif>
Santa
Catarina
</option>

<option value="SP"
@if (old('state') == 'SP') selected="selected" @endif>
São
Paulo
</option>

<option value="SE"
@if (old('state') == 'SE') selected="selected" @endif>
Sergipe
</option>

<option value="TO"
@if (old('state') == 'TO') selected="selected" @endif>
Tocantins
</option>

<option value="EX"
@if (old('state') == 'EX') selected="selected" @endif>
Estrangeiro
</option>
</select>
</div>
</div>
<div class="col-sm-4">
    <p>Entidade do cliente</p>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="physical" name="physical" {{ (old('physical') == 'on' || old('physical') == true ? 'checked' : '' ) }}>
      <label class="form-check-label" for="physical"> Pessoa Física</label>
  </div>
  <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="legal" name="legal" {{ (old('legal') == 'on' || old('legal') == true ? 'checked' : '' ) }}>
      <label class="form-check-label" for="legal">Pessoa Jurídica</label>
  </div>
</div>
<div class="col-sm-4">
    <div class="form-group">
        <label for="site">Site</label>
        <input type="text" name="site" class="form-control"
        placeholder="Digite o site" style="border-color: orange;" value="{{ old('site') }}">
    </div>
</div>
</div>
</div>

<div class="tab-pane fade" id="nav-additional-information" role="tabpanel"
aria-labelledby="nav-additional-information-tab">

<div class="row mt-3">
    <div class="col-sm-3">
        <label for="birth">Nascimento</label>
        <input type="date" name="birth" class="form-control"
        style="border-color: orange;" value="{{ old('birth') }}">
    </div>
    <div class="col-sm-4">
        <label for="company">Empresa</label>
        <input type="text" name="company" class="form-control"
        placeholder="Digite a empresa" style="border-color: orange;" value="{{ old('company') }}">
    </div>
    <div class="col-sm-5">
        <label for="profession">Profissão</label>
        <input type="text" name="profession" class="form-control"
        placeholder="Digite a profissão" style="border-color: orange;" value="{{ old('profession') }}">
    </div>
</div>
<div class="row mt-3">
    <div class="col-sm-4">
        <label for="economic_activity">Atividade Econômica</label>
        <input type="text" name="economic_activity" class="form-control"
        placeholder="Digite o código da atividade econômica"
        style="border-color: orange;" value="{{ old('economic_activity') }}">
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="marital_status">Estado civil</label>
            <select id="marital_status" name="marital_status" class="form-control"
            style="border-color: orange;">
            <option selected disabled="">Selecionar</option>
            <option value="Casado" @if (old('marital_status') == 'Casado') selected="selected" @endif>Casado</option>
            <option value="Divorciado" @if (old('marital_status') == 'Divorciado') selected="selected" @endif>Divorciado</option>
            <option value="Viúvo" @if (old('marital_status') == 'Viúvo') selected="selected" @endif>Viúvo</option>
            <option value="Solteiro" @if (old('marital_status') == 'Solteiro') selected="selected" @endif>Solteiro</option>
        </select>
    </div>
</div>
<div class="col-sm-4">
    <div class="form-group">
        <label for="parentage">Filiação</label>
        <textarea class="form-control" id="parentage" name="parentage" rows="2"
        placeholder="Nome da mãe, nome do pai" style="border-color: orange;">{{ old('parentage') }}</textarea>
    </div>
</div>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            <label for="naturalness">Naturalidade</label>
            <input type="text" name="naturalness" class="form-control"
            placeholder="Digite a cidade" style="border-color: orange;" value="{{ old('naturalness') }}">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="nationality">Nacionalidade</label>
            <input type="text" name="nationality" class="form-control"
            placeholder="Digite a país" style="border-color: orange;" value="{{ old('nationality') }}">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="number_client">Código do cliente</label>
            <input type="number" name="number_client" class="form-control"
            placeholder="Digite a código do cliente"
            style="border-color: orange;" value="{{ old('number_client') }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="observation">Observação</label>
            <textarea class="form-control" id="observation" name="observation" rows="3"
            placeholder="Digite uma observação" style="border-color: orange;">{{ old('observation') }}</textarea>
        </div>
    </div>
</div>

</div>

<div class="tab-pane fade" id="nav-documentation" role="tabpanel"
aria-labelledby="nav-documentation-tab">

<div class="row mt-3">
    <div class="col-sm-3">
        <div class="form-group">
            <label for="document_cpf">CPF<i class="bi bi-asterisk text-danger small"></i></label>
            <input type="text" name="document_cpf" class="form-control {{ $errors->has('document_cpf') ? 'is-invalid' : '' }}" placeholder="____.____.____-___" data-mask="000.000.000-00"
            style="border-color: orange;" value="{{ old('document_cpf') }}">

            @if ($errors->has('document_cpf'))
            <div class="invalid-feedback">
                <i class="bi bi-exclamation-triangle"></i>
                {{ $errors->first('document_cpf') }}
            </div>
            @endif
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label for="document_rg">RG</label>
            <input type="text" name="document_rg" class="form-control {{ $errors->has('document_rg') ? 'is-invalid' : '' }}" placeholder="Numero /emissor / emissão" style="border-color: orange;" value="{{ old('document_rg') }}">

            @if ($errors->has('document_rg'))
            <div class="invalid-feedback">
                <i class="bi bi-exclamation-triangle"></i>
                {{ $errors->first('document_rg') }}
            </div>
            @endif
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label for="document_pis">PIS</label>
            <input type="text" name="document_pis" class="form-control {{ $errors->has('document_pis') ? 'is-invalid' : '' }}" placeholder="Numero do PIS" style="border-color: orange;" value="{{ old('document_pis') }}">

            @if ($errors->has('document_pis'))
            <div class="invalid-feedback">
                <i class="bi bi-exclamation-triangle"></i>
                {{ $errors->first('document_pis') }}
            </div>
            @endif
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label for="voter_registration">Título de eleitor</label>
            <input type="text" name="voter_registration" class="form-control"
            placeholder="Número / zona / sessão" style="border-color: orange;" value="{{ old('voter_registration') }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            <label for="document_cnh">CNH</label>
            <input type="text" name="document_cnh" class="form-control"
            placeholder="Número / categoria / vencimento"
            style="border-color: orange;" value="{{ old('document_cnh') }}">
        </div>
    </div>
    <div class="col-sm-5">
        <div class="form-group">
            <label for="document_passport">Passaporte</label>
            <input type="text" name="document_passport" class="form-control"
            placeholder="Número / tipo / emissor / autoridade / vencimento"
            style="border-color: orange;" value="{{ old('document_passport') }}">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label for="document_reservist">Reservista</label>
            <input type="text" name="document_reservist" class="form-control"
            placeholder="Número / espécie / categoria"
            style="border-color: orange;" value="{{ old('document_reservist') }}">
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card mt-2">
            <div class="card-body text-center">
                <button type="submit" class="btn btn-lg btn-success" data-toggle="save"
                title="Salvar informações"><i class="bi bi-check2-circle"></i> SALVAR</button>
            </div>
        </div>
    </div>
</div>
</form>
</div>
@endsection

@section('script')
<script>
    $(function() {
        $('[data-toggle="save"]').tooltip()
    })
</script>
@endsection
