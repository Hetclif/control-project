@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Заполнить посещаемость</h1>
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

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID задачи</th>
                                    <th>Название группы</th>
                                    <th>Занятие</th>
                                    <th>Дата</th>
                                </tr>
                                </thead>
                                <tbody>

                                    @foreach($tasks as $task)
                                        @if($task->completed == 1)
                                            <tr>
                                                <td><a href="{{route('attendance_group.create', $task->id)}}">
                                                        {{$task->id}}</a></td>

                                                @foreach($timetables as  $timetable)
                                                    @if($task->lesson_id == $timetable->id)
                                                        @foreach($groups as $group)
                                                            @if($group->id == $timetable->group_id)
                                                                <td>{{$group->name}}</td>
                                                            @endif
                                                        @endforeach
                                                        @foreach($lessons as $lesson)
                                                            @if($lesson->id == $timetable->lesson_id)
                                                                <td>{{$lesson->name}}</td>
                                                            @endif
                                                        @endforeach

                                                        <td>{{\Carbon\Carbon::parse($task->date_time)
                                                            ->format('d.m.Y H:i')}}</td>
                                                    @endif
                                                @endforeach
                                            </tr>
                                        @endif
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
