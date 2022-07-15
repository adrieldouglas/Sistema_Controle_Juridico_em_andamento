@extends('admin.layouts.master')

@section('content')

<title>{{ $tit_dashboard }}</title>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="card mt-4">
				<img src="{{ url('assets/logotipo/logotipo.png') }}" class="rounded mx-auto d-block img-fluid mt-3" width="100" alt="logotipo"> 
				<h2 class="text-center text-danger">Controle Jurídico</h2>				
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
			<div class="card mt-2">
				<div class="card-body">
					<table class="table table-hover">
						<thead>
							<tr>					
								<th scope="col"><i class="bi bi-person-circle"></i> Clientes Agendados</th>
							</tr>
						</thead>
						<tbody>
							<tr>						
								<td>Adriel Douglas Miranda das Neves <small class="text-danger">13/07/2022 14:30</small> <small>Marcado</small></td>													
							</tr>
							<tr>						
								<td>Bianca Gomes Salvador <small class="text-danger">13/07/2022 17:20</small> <small>Finalizado</small></td>						
							</tr>
							<tr>						
								<td>Felipe Correia de Araujo <small class="text-danger">13/07/2022 07:30</small> <small>Cancelado</small></td>						
							</tr>				
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="card mt-2">
				<div class="card-body">
					<h4 class="text-muted"><i class="bi bi-list-task"></i> Tarefas <a href="" class="float-right btn btn-success"><i class="bi bi-plus-square"></i> Adicionar</a></h4>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-inline">
								<input type="search" name="" class="form-control form-control-sm" placeholder="Buscar" style="border-color: orange;">
								<button type="submit" class="btn btn-sm btn-success"><i class="bi bi-search"></i></button>
							</div>
						</div>
					</div>
					<table class="table table-hover mt-3">					
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Responsável</th>
								<th scope="col">Cliente</th>
								<th scope="col">Descrição da tarefa</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Joandersson Souza</td>
								<td>Ruan Miranda</td>
								<td>Enviar e-mail de cobrança</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Raquel Tols</td>
								<td>Alisson Christian</td>
								<td>Marcar um segundo agendamento</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Tiago Cázar</td>
								<td>André Campinas</td>
								<td>Entregar o relátorio até quinta</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection
