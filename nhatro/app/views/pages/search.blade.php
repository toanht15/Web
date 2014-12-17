<div class="col-md-6">
	<div class="panel panel-info">
		<div class="panel-heading">
			<div class="panel-title">Tin 3
				<div style="float:right">Lưu &raquo
					<input type="checkbox" id="checkbox1" class="checkbox style-2 pull-right"/>
				</div>
			</div>
		</div>
		<div class="panel-body">
			<p>Tin cho thue 1</p>
		</div>
		<div class="panel-footer">
			
		</div>
	</div>
</div>

				@foreach ($posts as $post)
					
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-info">
								<div class="panel-heading">
									<div class="panel-title">{{$post->title}}
										<div style="float:right">Lưu &raquo
											<input type="checkbox" id="checkbox1" class="checkbox style-2 pull-right"/>
										</div>
									</div>
								</div>
								<div class="panel-body">
									<p>{{ $post->content }}</p>
								</div>
								<div class="panel-footer">
									{{ $post->price}}
									{{ $post->area }}
								</div>
							</div>
						</div>					
					</div>
				@endfor