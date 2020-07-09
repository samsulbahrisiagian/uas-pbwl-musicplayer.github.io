@extends('tamplate.index')

@section('title')
<h1 class="h3 mb-0 text-gray-800">Data Track</h1>
@endsection


@section('content')
<a href="{{ url('track/create') }}"class="btn btn-success">
    <i class="">Tambah Data</i>
</a>
<hr>
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataBases Track</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
		<tr>
			<th>TRACK ID</th>
			<th>TRACK NAME</th>
			<th>NAMA ALBUM</th>
			<th>TRACK TIME</th>
			<th>TRACK FILE</th>
			<th></th>
		</tr>

	@foreach($rows as $row)
	<tr>
		<td>{{ $row->track_id }}</td>
		<td>{{ $row->track_name }}</td>
		<td>{{ $row->album_name}}</td>
		<td>
		<audio controls>
        			<source src="lagu\{{ $row->track_file }}" type="audio/mpeg">
        		</audio></td>
		<td>{{ $row->track_file }}</td>

		<td>

			<form action="{{ url('track/' . $row->track_id) }}" method="POST">
				<a href="{{ url('track/' . $row->track_id . '/edit') }}" class="btn btn-info">Edit</a>
				<input name="_method" type="hidden" value="DELETE">
				@csrf
				<button class="btn btn-secondary">Hapus</button>
			</form>
			</td>
	</tr>
	@endforeach
	</tbody>
                </table>
              </div>
            </div>
</div>


@endsection