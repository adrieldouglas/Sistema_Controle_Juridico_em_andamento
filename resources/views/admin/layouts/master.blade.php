<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="{{ url(mix('assets/css/bootstrap.css')) }}">
	<link rel="icon" type="image/png" href="{{ url('assets/logotipo/logotipo.png') }}"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
	<meta name="csrf-token" content="{{ csrf_token() }}">


	@hasSection('css')
	@yield('css')
	@endif

</head>
<body style="background-color: #6B767F;">

	<nav class="navbar navbar-expand-sm navbar-light bg-light">
		<a class="navbar-brand" href="{{ route('admin.home') }}"><img src="{{ url('assets/logotipo/logotipo.png') }}" width="35"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item {{ isActive('admin.home') }}">
					<a class="nav-link" href="{{ route('admin.home') }}"><i class="bi bi-pc-display"></i> Área de Trabalho</a>
				</li>
				<li class="nav-item dropdown {{ isActive('admin.clients.index') }}">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
						Cadastros
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Funcionários</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item {{ isActive('admin.clients.index') }}" href="{{ route('admin.clients.index') }}"><i class="bi bi-person-square"></i> Clientes</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Agendamentos</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href=""><i class="bi bi-archive-fill"></i> Casos e Processos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href=""><i class="bi bi-key-fill"></i> Novo Usuário</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href=""><i class="bi bi-file-earmark-zip-fill"></i> Provas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href=""><i class="bi bi-file-text-fill"></i> Documentos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href=""><i class="bi bi-pie-chart-fill"></i> Gráficos</a>
				</li>
					<li class="nav-item">
					<a class="nav-link" href=""><i class="bi bi-file-pdf-fill"></i> Relatórios</a>
				</li>
			</ul>

			<div>
				<div class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
						<i class="bi bi-person-fill"></i> {{ Auth:: user()->name }}
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a href="{{ route('admin.logout') }}" class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Sair</a>
					</div>
				</div>
			</div>
		</div>
	</nav>



	@yield('content')



	<script src="{{ url(mix('assets/js/jquery.js')) }}"></script>
	<script src="{{ url(mix('assets/js/bundle.js')) }}"></script>
    <script src="{{ url(mix('assets/js/jquery.mask.js')) }}"></script>

	@hasSection('script')
	@yield('script')
	@endif

</body>
</html>
