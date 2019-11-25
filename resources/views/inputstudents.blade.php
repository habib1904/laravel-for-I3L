@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Input Data Murid</div>

                    <form role="form" action="/inputstudents" method="post">
                        {{csrf_field()}}
                        <div>
                            <label>Nama Murid</label>
                            <input class="form-control" placeholder="enter text" name="name_students" type="text"required>
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
