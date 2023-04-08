@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать настройки пары</h1>
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
                <form action="{{route('timetable.update', $timetable->id)}}" method="post">
                    @csrf
                    @method('patch')

                    <div class="form-group">
                        <select name="weekday" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>День недели</option>
                            <option {{$timetable->weekday == 1 || old('weekday') == 1 ? 'selected' : ''}} value="1">Понедельник</option>
                            <option {{$timetable->weekday == 2 || old('weekday') == 2 ? 'selected' : ''}} value="2">Вторник</option>
                            <option {{$timetable->weekday == 3 || old('weekday') == 3 ? 'selected' : ''}} value="3">Среда</option>
                            <option {{$timetable->weekday == 4 || old('weekday') == 4 ? 'selected' : ''}} value="4">Четверг</option>
                            <option {{$timetable->weekday == 5 || old('weekday') == 5 ? 'selected' : ''}} value="5">Пятница</option>
                            <option {{$timetable->weekday == 6 || old('weekday') == 6 ? 'selected' : ''}} value="6">Суббота</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="numerator" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Ч/З</option>
                            <option {{$timetable->numerator == 1 || old('numerator') == 1 ? 'selected' : ''}} value="1">Числитель</option>
                            <option {{$timetable->numerator == 2 || old('numerator') == 2 ? 'selected' : ''}} value="2">Знаменатель</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="lesson_number" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Номер пары</option>
                            <option {{$timetable->lesson_number == 1 || old('lesson_number') == 1 ? 'selected' : ''}} value="1">1</option>
                            <option {{$timetable->lesson_number == 2 || old('lesson_number') == 2 ? 'selected' : ''}} value="2">2</option>
                            <option {{$timetable->lesson_number == 3 || old('lesson_number') == 3 ? 'selected' : ''}} value="3">3</option>
                            <option {{$timetable->lesson_number == 4 || old('lesson_number') == 4 ? 'selected' : ''}} value="4">4</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="group_id" class="users" style="width: 100%;">
                            <option selected="selected" disabled>Группа</option>
                            @foreach($groups as $group)
                                <option {{$group->id == $timetable->group_id ? 'selected' : ''}} value="{{$group->id}}">
                                    {{$group->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="lesson_id" class="users" style="width: 100%;">
                            <option selected="selected" disabled>Предмет</option>
                            @foreach($lessons as $lesson)
                                <option {{$lesson->id == $timetable->lesson_id ? 'selected' : ''}} value="{{$lesson->id}}">
                                    {{$lesson->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="teacher_id" class="users" style="width: 100%;">
                            <option selected="selected" disabled>Преподаватель</option>
                            @foreach($users as $user)
                                <option {{$user->id == $timetable->teacher_id ? 'selected' : ''}} value="{{$user->id}}">
                                    {{$user->last_name .' '. $user->first_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="classroom_id" class="users" style="width: 100%;">
                            <option selected="selected" disabled>Аудитория</option>
                            @foreach($classrooms as $classroom)
                                <option {{$classroom->id == $timetable->classroom_id ? 'selected' : ''}} value="{{$classroom->id}}">
                                    {{$classroom->number}}</option>
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
