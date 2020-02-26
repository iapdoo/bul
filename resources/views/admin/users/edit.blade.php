@extends('admin.layouts.layout')
@section('title')
تعديل العضو 
{{$user->name}}
@endsection

@section('header')

@endsection



@section('content')
<section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb " style="float: left">
                        <li class="breadcrumb-item"><a href="{{url('/adminpanel')}}">الرئيسيه</a></li>
                        <li class="breadcrumb-item "><a href="{{url('/adminpanel/users')}}"> </a> التحكم في الاعضاء</li>
                        <li class="breadcrumb-item active"><a href="{{url('/adminpanel/users/'.$user->id.'edit')}}"> </a> تعديل العضو 
{{$user->name}}  </li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <h1 style="float: right">
                                       تعديل العضو 
                                        {{$user->name}}
                    </h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                <div class="card-header">
                        <h3 class="card-title">
                        تعديل العضو 
                        {{$user->name}}
                        </h3>
                    </div>
                    <div class="panel-body">
                    {!! Form::open(['action' => ['UsersController@edit',$user->id],'method' => 'PATCH']) !!}
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update</div>
                    <div class="panel-body" style="height: 670px;">

    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', $user->name,['class' => 'form-control','placeholder'=>'Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'Email')}}
        {{Form::text('email', $user->email ,['class' => 'form-control','placeholder'=>'Email'])}}
    </div>
     
    <div class="form-group">
            {{Form::label('admin', 'User Type')}}
            {!!Form::select('role',['patient'=>'Patient','doctor'=>'Doctor','admin'=>'Admin'],$user->role,['class'=>'form-control']) !!}
        </div>   
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

         

                    </div>
                </div>
            </div>
        </div>
</div>


{!! Form::close() !!}






                    </div>
                </div>
            </div>
        </div>
</div>


@endsection




@section('footer')



@endsection
