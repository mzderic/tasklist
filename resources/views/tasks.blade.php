@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Novi Task
                </div>
				<div class="panel-body">
					<!-- mjesto za prikaz grešaka -->
					
					<!-- WebObrazac za novi Task -->
					<form action="/task" method="POST" class="form-horizontal">
						{{ csrf_field() }}
						
						<!-- Task naziv -->
						<div class="form-group">
							<label for="task" class="col-sm-3 control-label">Task</label>
							
							<div class="col-sm-6">
								<input type="text" name="name" id="task-name" class="form-control">
							</div>
						</div>
						
						<!-- Gumb za dodavanje taska -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-plus"></i> Dodaj task
								</button>
							</div>
						</div>
						
					</form>
				</div>
				
				<!-- Trenutni taskovi -->
				@if (count($tasks) > 0)
					<div class="panel panel-default">
						<div class="panel-heading">
							Trenutni taskovi
						</div>
						
						<div class="panel-body">
							<table class="table table-striped task-table">
								<thead>
									<th>Task</th>
									<th>&nbsp;</th>
								</thead>
								<tbody>
									@foreach ($tasks as $task)
										<tr>
											<td class="table-text"><div>{{ $task->name }}</div></td>
											
											<!-- Gumb za brisanje -->
											<td>
												<form action="{{ url('task/' . $task->id ) }}" method="POST">
													{{ csrf_field() }}
													{{ method_field('DELETE') }}
													<button type="submit" class="btn btn-danger">
														<i class="fa fa-btn fa-trash"></i>Briši
													</button>									
												</form>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				@endif

			</div>
		</div>
	</div>
@endsection






































