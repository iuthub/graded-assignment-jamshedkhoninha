@extends ('layout.app')

@section('content')
<h1>Tasks </h1>
@if (count($tasks > 1))
	@foreach($tasks as $post)
		<div class="task">
			<h3>{{$task->title1}}</h3>
		</div>
	@endforeach
@else
	<p>no task found</p>
@endif
@endsection