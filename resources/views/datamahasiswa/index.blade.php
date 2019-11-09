@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Mahasiswa</div>

                @if (session('message'))
                    <div class="alert alert-info">
                        <b>Success</b> : {{session('message')}}
                    </div>
                @endif

                <div class="card-body">

                    <table>
                        <tr></tr>
                        <tr>
                            <th><a href="{{route('datamahasiswa.create')}}" class="btn btn-success">Add</a></th>
                        </tr>  
                    </table>
                            <br>
                            
                            {{jumlah()}}

                    <table class="table table-bordered">
                        <tr align="center">
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jurusan</th>
                            <th colspan="2">Action</th>
                        </tr>
                        @foreach ($datamahasiswa as $item)
                            
                        <tr>
                            <td align="center">{{$item->nim}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->jurusan}}</td>
                            <td>

                                <form method="POST" action="{{ route('datamahasiswa.edit',$item->nim) }}">
                                @csrf
                                @method('GET')
                                <button type="submit" class="btn btn-info btn-sm">Edit</button>
                                </form>
                            </td>
                            <td>    
                                <form method="POST" action="{{ route('datamahasiswa.destroy',$item->nim) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>

                            </td>
                        </tr>

                        @endforeach
                    </table>
                </div>
            </div>
            <table align="center">
                <tr>
                    <th>
                        {{$datamahasiswa->links()}}
                    </th>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
