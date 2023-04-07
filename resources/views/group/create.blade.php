@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить группу</h1>
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
                <form action="{{route('group.store')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Назвние группы">
                    </div>
                    <div class="form-group">
                        <select name="year" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Год обучения</option>
                            <option {{old('year') == 1 ? 'selected' : ''}} value="1">1 курс</option>
                            <option {{old('year') == 2 ? 'selected' : ''}} value="2">2 курс</option>
                            <option {{old('year') == 3 ? 'selected' : ''}} value="3">3 курс</option>
                            <option {{old('year') == 4 ? 'selected' : ''}} value="4">4 курс</option>
                            <option {{old('year') == 5 ? 'selected' : ''}} value="5">5 курс</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="head_id" class="users" style="width: 100%;">
                            <option selected="selected" disabled>Староста</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->last_name .' '.$user->first_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
