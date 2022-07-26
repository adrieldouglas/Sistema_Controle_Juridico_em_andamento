@extends('admin.layouts.master')

@section('content')

<title>{{ $tit_dashboard }}</title>

<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<div class="card mt-4" style="border-color: #FFD700;">
				<img src="{{ url('assets/logotipo/logotipo.png') }}" class="rounded mx-auto d-block img-fluid mt-3" width="100" alt="logotipo"> 
				<h5 class="text-warning font-weight-bold text-center mt-2" >Controle Jurídico</h5>				
			</div>
		</div>
		<div class="col-sm-9">
			<div class="card mt-4" style="border-color: #FFD700;">
				<div id="chart" style="height: 165px; width: 100%;"></div>			
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
			<div class="card mt-2" style="border-color: #FFD700;">
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
			<div class="card mt-2" style="border-color: #FFD700;">
				<div class="card-body">
					<h4 class="text-muted"><i class="bi bi-list-task"></i> Tarefas <a href="" class="float-right btn btn-warning text-white btn-lg"><i class="bi bi-plus-square"></i> Adicionar</a></h4>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-inline">
								<input type="search" name="" class="form-control form-control-sm" placeholder="Buscar" style="border-color: orange;">
								<button type="submit" class="btn btn-sm btn-warning"><i class="bi bi-search text-white"></i></button>
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
								<td>Enviar e-mail de cobrança <small class="text-muted">Pendente</small></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Raquel Tols</td>
								<td>Alisson Christian</td>
								<td>Marcar um segundo agendamento <small class="text-muted">Finalizado</small></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Tiago Cázar</td>
								<td>André Campinas</td>
								<td>Entregar o relátorio até quinta <small class="text-muted">Em andamento</small></td>
							</tr>
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
	window.onload = function () {

		var chart = new CanvasJS.Chart("chart", {
			exportEnabled: true,
			animationEnabled: true,
			title: {
				text: "Gráfico - Gerenciamento de Controle Jurídico"
			},
			legend: {
				cursor: "pointer",
				itemclick: explodePie
			},
			data: [{
				type: "pie",
				showInLegend: true,
				toolTipContent: "{name}: <strong>{y}%</strong>",
				indexLabel: "{name} - {y}",
				dataPoints: [
				{y:19, name: "Clientes", exploded: true},
				{y:1, name: "Usuários", exploded: true},
				{y:5, name: "Funcionários", exploded: true},
				{y:33, name: "Documentos", exploded: true},	
				{y:21, name: "Provas", exploded: true},	
				{y:5, name: "Processos", exploded: true},
				{y:8, name: "Casos", exploded: true},	
				{y:3, name: "Agendamentos", exploded: true},	
				{y:3, name: "Tarefas", exploded: true},	
				]
			}]
		});
		chart.render();
	}

	function explodePie(e) {
		if (typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
			e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
		} else {
			e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
		}
		e.chart.render();

	}
</script>

@endsection
