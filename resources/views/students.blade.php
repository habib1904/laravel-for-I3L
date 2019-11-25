@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Murid</div>

                <div class="panel-body">
                <h4>
                    <strong>Jumlah Murid = {{$hitung}}</strong>                     
                </h4>
                    <table border='1'>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $key)
                            <tr>
                                <td>{{$a}} <?php $a++; ?></td>
                                <td>{{$key->name_students}}</td>
                                <td>{{$key->email}}</td>
                                <td>
                                    <form role="form" action="/editstudents/{{$key->id_students}}/edit" method="get">
                                        <button type="submit" class="btn btn-primary" name="submit" value="edit">Edit</button> 
                                    </form>
                                </td>
                                <td>                                            
                                    <form role="form" action="deletestudents/{{$key->id_students}}/delete" method="post">
                                    {{csrf_field()}}
                                        <button type="" class="btn btn-primary" name="submit" value="delete" onclick="return confirm('Delete item ini?');">Delete</button>
                                        <input type="hidden" name="_method" value="DELETE">    
                                    </form>    
                                </td>  
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-primary" href="{{url('/inputstudents')}}">Input Data</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
