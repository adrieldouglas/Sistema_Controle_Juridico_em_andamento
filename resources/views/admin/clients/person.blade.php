	<!-- Modal -->
	<div class="modal fade" id="person{{ $client->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-body text-muted">
					<div class="card">
						<div class="card-body">
							<img src="{{ url('storage/' . $client->cover) }}" class="img-fluid rounded mx-auto d-block" width="200">
							<h5 class="text-muted text-center mt-2">{{ $client->name }} ({{ $client->document_cpf }})</h5>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal"><i class="bi bi-x-square-fill"></i> Fechar</button>
				</div>
			</div>
		</div>
	</div>