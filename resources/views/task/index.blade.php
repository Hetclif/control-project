@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Задачи на контроль посещаемости</h1>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{route('task.create')}}" class="btn btn-primary">Добавить</a>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Предмет</th>
                                    <th>Группа</th>
                                    <th>Статус задачи</th>
                                    <th>Дата и время занятия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tasks as $task)
                                    <tr>
                                        <td><a href="{{route('task.show', $task->id)}}">{{$task->id}}</a></td>

                                        @foreach($timetables as $timetable)
                                            @if($timetable->id == $task->lesson_id)
                                                @foreach($lessons as $lesson)
                                                    @if($lesson->id == $timetable->lesson_id)
                                                        <td>{{$lesson->name}}</td>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach

                                        @foreach($timetables as $timetable)
                                            @if($timetable->id == $task->lesson_id)
                                                @foreach($groups as $group)
                                                    @if($group->id == $timetable->group_id)
                                                        <td>{{$group->name}}</td>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach

                                        <td>{{$task->completedTitle}}</td>
                                        <td>{{ \Carbon\Carbon::parse($task->date_time)->format('d.m.Y H:i') }}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
