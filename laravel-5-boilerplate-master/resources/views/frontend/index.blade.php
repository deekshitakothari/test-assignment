@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <div class="row mb-4" style="justify-content: center">
        <div class="col-sm-7">
            @foreach($users as $user)
            <div class="card mb-4">               
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2">
                            <img src="https://www.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028.jpg?s=80&amp;d=mm&amp;r=g" class="img-avatar" alt="admin@admin.com">
                        </div>
                        <div class="col-sm-10">
                            <p> {{$user->name}} <p>
                            <p> {{$user->email}} </p>
                        </div>
                    </div>
                </div>
            </div><!--card-->
            @endforeach
        </div><!--col-->
    </div><!--row-->
@endsection
