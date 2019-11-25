@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Input Data Orang Tua Murid</div>

                    <form role="form" action="/editparents/{{$edit->id_parents}}" method="post">
                        {{csrf_field()}}
                        <div>
                            <label>Pilih Murid</label>
                            <input class="form-control" value="{{$edit->stu->name_students}}" name="" type="text" disabled="">
                            <select class="form-control" name="students" required>
                                <option></option>
                                @foreach($students as $key)
                                <option value="{{$key->id_students}}">{{$key->name_students}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label>Nama Orang Tua</label>
                            <input class="form-control" value="{{$edit->name_parents}}" placeholder="enter text" name="name_parents" type="text" required>
                        </div>
                        <div>
                            <label>Email</label>
                            <input class="form-control" value="{{$edit->email}}" placeholder="enter text" name="email" type="email" required>
                        </div>
                        <button class="btn btn-primary" type="submit" name="submit" value="create">Input</button> 
                        <input type="hidden" name="_method" value="PUT"> 
                            
                    </form> 


                <div class="panel-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
