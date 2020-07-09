@extends('tamplate.index')

@section('title')
<h1 class="h3 mb-0 text-gray-800">Data Played</h1>
@endsection


@section('content')
<a href="{{ url('played/create') }}" class="btn btn-success">
    <i > Tambah Data</i>
</a>
<hr>
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataBases Played</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
		<tr>
			<th>PLAYED ID</th>
			<th>TRACK NAME</th>
			<th>PLAYED DATE</th>
			<th></th>
		</tr>
		</thead>
		</tbody>

	@foreach($rows as $row)
	<tr>
		<td>{{ $row->play_id }}</td>
		<td>{{ $row->track_name }}</td>
		<td>{{ $row->play_date }}</td>
		<td>

			<form action="{{ url('played/' . $row->play_id) }}" method="POST">
				<a href="{{ url('played/' . $row->play_id . '/edit') }}" class="btn btn-info">Edit</a>
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