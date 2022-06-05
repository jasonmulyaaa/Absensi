@extends('layouts.master')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Rombel</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('rombel.create') }}"> Create</a>
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
            <th>Rombel</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($rombels as $rombel)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $rombel->rombel }}</td>
            <td>
                <form action="{{ route('rombel.destroy',$rombel->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('rombel.edit', $rombel->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $rombels->links() !!}

@endsection