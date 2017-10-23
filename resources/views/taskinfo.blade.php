@extends('layouts.app')

@section('content')

	<div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    TaskInfo
                </div>
				
				<div class="panel-body">
					<!--mjesto za prikaz grešaka -->
					@include('common.errors')
					
					Naziv:{{ $task->name}}
					<br>
					Datum:{{ $task->created_at}}
				</div>
				
			</div>
		</div>
	</div>
@endsection
