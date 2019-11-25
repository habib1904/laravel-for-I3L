@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Orang Tua Murid</div>

                <div class="panel-body">
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
                            @foreach($parents as $key)
                            <tr>
                                <td>{{$a}} <?php $a++; ?></td>
                                <td>{{$key->name_parents}}</td>
                                <td>{{$key->email}}</td>
                                <td>
                                    <form role="form" action="/editparents/{{$key->id_parents}}/edit" method="get">
                                        <button type="submit" class="btn btn-primary" name="submit" value="edit">Edit</button> 
                                    </form>
                                </td>
                                <td>                                            
                                    <form role="form" action="deleteparents/{{$key->id_parents}}/delete" method="post">
                                    {{csrf_field()}}
                                        <button type="" class="btn btn-primary" name="submit" value="delete" onclick="return confirm('Delete item ini?');">Delete</button>
                                        <input type="hidden" name="_method" value="DELETE">    
                                    </form>    
                                </td>  
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-primary" href="{{url('/inputparents')}}">Input Data</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
