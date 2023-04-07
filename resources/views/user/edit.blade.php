@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать пользователя</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form action="{{route('user.update', $user->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" value="{{$user->name ?? old('name')}}" name="name" class="form-control" placeholder="Логин">
                    </div>
                    <div class="form-group">
                        <input type="email" value="{{$user->email ?? old('email')}}" name="email" class="form-control" placeholder="Почта">
                    </div>
                    <div class="form-group">
                        <input type="password" value="{{$user->password ?? old('password')}}" name="password" class="form-control" placeholder="Пароль">
                    </div>
                    <div class="form-group">
                        <input type="password" value="{{$user->password ?? old('password_confirmation')}}" name="password_confirmation" class="form-control" placeholder="Повторите пароль">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$user->last_name ?? old('last_name')}}" name="last_name" class="form-control" placeholder="Фамилия">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$user->first_name ?? old('first_name')}}" name="first_name" class="form-control" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{$user->patronymic ?? old('patronymic')}}" name="patronymic" class="form-control" placeholder="Отчество">
                    </div>
                    <div class="form-group">
                        <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Пол</option>
                            <option {{$user->gender == 1 || old('gender') == 1 ? 'selected' : ''}} value="1">Мужской</option>
                            <option {{$user->gender == 2 || old('gender') == 2 ? 'selected' : ''}} value="2">Женский</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="group_id" class="users" style="width: 100%;">
                            <option selected="selected" disabled>Группа</option>
                            @foreach($groups as $group)
                                <option {{$group->id == $user->group_id ? 'selected' : ''}} value="{{$group->id}}">
                                    {{$group->name}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Редактировать">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
