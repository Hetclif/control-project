@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить пару в расписание</h1>
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
                <form action="{{route('timetable.store')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <select name="weekday" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>День недели</option>
                            <option {{old('weekday') == 1 ? 'selected' : ''}} value="1">Понедельник</option>
                            <option {{old('weekday') == 2 ? 'selected' : ''}} value="2">Вторник</option>
                            <option {{old('weekday') == 3 ? 'selected' : ''}} value="3">Среда</option>
                            <option {{old('weekday') == 4 ? 'selected' : ''}} value="4">Четверг</option>
                            <option {{old('weekday') == 5 ? 'selected' : ''}} value="5">Пятница</option>
                            <option {{old('weekday') == 6 ? 'selected' : ''}} value="6">Суббота</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="numerator" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>День недели</option>
                            <option {{old('numerator') == 1 ? 'selected' : ''}} value="1">Числитель</option>
                            <option {{old('numerator') == 2 ? 'selected' : ''}} value="2">Знаменатель</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="lesson_number" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Номер пары</option>
                            <option {{old('lesson_number') == 1 ? 'selected' : ''}} value="1">1</option>
                            <option {{old('lesson_number') == 2 ? 'selected' : ''}} value="2">2</option>
                            <option {{old('lesson_number') == 3 ? 'selected' : ''}} value="3">3</option>
                            <option {{old('lesson_number') == 4 ? 'selected' : ''}} value="4">4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="group_id" class="users" style="width: 100%;">
                            <option disabled selected>Группа</option>
                            @foreach($groups as $group)
                                <option value="{{$group->id}}">{{$group->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="lesson_id" class="users" style="width: 100%;">
                            <option disabled selected>Предмет</option>
                            @foreach($lessons as $lesson)
                                <option value="{{$lesson->id}}">{{$lesson->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="teacher_id" class="users" style="width: 100%;">
                            <option disabled selected>Преподаватель</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->last_name .' '.$user->first_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="classroom_id" class="users" style="width: 100%;">
                            <option disabled selected>Аудитория</option>
                            @foreach($classrooms as $classroom)
                                <option value="{{$classroom->id}}">{{$classroom->number}}</option>
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
