@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Murid</div>

                    <form role="form" action="/editstudents/{{$edit->id_students}}" method="post">
                        {{csrf_field()}}

                        <div >
                            <label>Nama Murid</label>
                        <div>                            
                            <input class="form-control" type="text" name="name_students" value="{{$edit->name_students}}" required>
                        </div>
                        <div >
                            <label>Email</label>
                        <div>                            
                            <input class="form-control" type="email" name="email" value="{{$edit->email}}" required>
                        </div>                        
                        <button class="btn btn-primary" type="submit" name="submit" value="create">Edit</button> 
                         <input type="hidden" name="_method" value="PUT">       
                    </form> 


                <div class="panel-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
