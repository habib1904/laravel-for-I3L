@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Input Data Orang Tua Murid</div>

                    <form role="form" action="/inputparents" method="post">
                        {{csrf_field()}}
                        <div>
                            <label>Pilih Supplier</label>
                            <select class="form-control" name="students">
                                <option>---Pilih---</option>
                                @foreach($students as $key)
                                <option value="{{$key->id_students}}">{{$key->name_students}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label>Nama Orang Tua</label>
                            <input class="form-control" placeholder="enter text" name="name_parents" type="text"required>
                        </div>
                        <div>
                            <label>Email</label>
                            <input class="form-control" placeholder="enter text" name="email" type="email" required>
                        </div>
                        <button class="btn btn-primary" type="submit" name="submit" value="create">Input</button> 
                            
                    </form> 


                <div class="panel-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
