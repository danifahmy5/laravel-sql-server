@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center"> 
            <div class="card">
                <div class="card-header">
                    <b>
                        {{ __('Dashboard') }}
                    </b>
                <a href="{{route('home.create')}}" class="ml-5 btn btn-primary">Tambah Siswa</a> 
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    action

                                </th>
                                <th>ID</th>
                                <th>nama</th>
                                <th>usia</th>
                                <th>alamat</th>
                                <th>hobby</th>
                                <th>tanggal insert</th>
                                <th>tangal update</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td width="150">
                                        <div class="d-flex justify-content-evenly">
                                            <a href="{{route('home.edit',$student->id)}}" class="btn btn-info btn-sm">Edit</a> 
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('home.destroy', $student->id) }}" method="POST">
                                                 
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="mr-2 btn btn-sm btn-danger shadow">Delete</button>
                                            </form>

                                        </div>
                                    </td>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->name}}</td> 
                                    <td>{{$student->age}}</td> 
                                    <td>{{$student->address}}</td> 
                                    <td>{{$student->hobby}}</td> 
                                    <td>{{isset($student->created_at) ? $student->created_at->format('d/m/y') : null}}</td> 
                                    <td>{{isset($student->updated_at) ? $student->updated_at->format('d/m/y') : null}}</td> 
                                </tr>    
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> 
    </div>
</div>
@endsection
