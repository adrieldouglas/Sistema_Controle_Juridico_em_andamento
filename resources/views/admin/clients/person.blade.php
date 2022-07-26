	<!-- Modal -->
	<div class="modal fade" id="person{{ $client->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-body text-muted">
					<div class="card" style="border-color: #FFD700;">
						<div class="card-body">
							<img src="{{ url('storage/' . $client->cover) }}" class="img-fluid rounded mx-auto d-block" alt="perfil">
							<h4 class="text-muted text-center mt-2">{{ $client->name }} ({{ $client->document_cpf }})</h4>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal"><i class="bi bi-x-square-fill"></i> Fechar</button>
				</div>
			</div>
		</div>
	</div>