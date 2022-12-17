@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        @foreach($comics as $comic)
        <div class="col">
            <img src="{{$comic['thumb']}}" alt="">
            <h6 class="text-white">{{$comic['title']}}</h6>
        </div>
        <!-- /.col -->
        @endforeach
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

@endsection