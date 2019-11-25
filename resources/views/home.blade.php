@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div>
                        <a href="{{url('/students')}}">Data Murid</a>                        
                    </div>
                    <div>
                        <a href="{{url('/parents')}}">Data Orang Tua</a>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
