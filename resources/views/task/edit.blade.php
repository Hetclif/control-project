@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать настройки задачи</h1>
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
                <div class="col-md-5">
                    <form action="{{route('task.update', $task->id)}}" method="post">
                        @csrf
                        @method('patch')

                        <div class="form-group">
                            <select name="completed" class="custom-select form-control" id="exampleSelectBorder">
                                <option disabled selected>Статус задачи</option>
                                <option {{$task->completed == 1 || old('completed') == 1 ? 'selected' : ''}} value="1">В процессе</option>
                                <option {{$task->completed == 2 || old('completed') == 2 ? 'selected' : ''}} value="2">Выполнена</option>
                                <option {{$task->completed == 3 || old('completed') == 3 ? 'selected' : ''}} value="3">Просрочена</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select name="lesson_id" class="users" style="width: 100%;">
                                <option disabled selected>Занятие</option>
                                @foreach($timetables as $timetable)
                                    <option {{$timetable->id == $task->lesson_id ? 'selected' : ''}} value="{{$timetable->id}}">
                                        {{$timetable->weekdayTitle}}
                                        {{$timetable->numeratorTitle}}
                                        {{$timetable->lessonTitle}}
                                        @foreach($lessons as $lesson)
                                            @if($lesson->id == $timetable->lesson_id)
                                                {{$lesson->name}}
                                            @endif
                                        @endforeach
                                        @foreach($groups as $group)
                                            @if($group->id == $timetable->group_id)
                                                {{$group->name}}
                                            @endif
                                        @endforeach
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="input-group date task" id="reservationdatetime" data-target-input="nearest">
                                <input type="text" name="date_time" class="form-control" data-target="#reservationdatetime" placeholder="Дата и время занятия"
                                    value="{{ \Carbon\Carbon::parse($task->date_time)->format('d.m.Y H:i') }}"/>
                                <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Редактировать">
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
