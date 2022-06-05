@extends('layouts.master')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Absen</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('absen.create') }}"> Create</a>
            </div>
        </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Jam Datang</th>
            <th>Jam Pulang</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($absens as $absen)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $absen->nis }}</td>
            <td>{{ $absen->jam_kedatangan }}</td>
            <td>{{ $absen->jam_kepulangan }}</td>
            <td>{{ $absen->ket }}</td>
            <td>
                <form action="{{ route('absen.destroy',$absen->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('absen.edit', $absen->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $absens->links() !!}

        
@endsection