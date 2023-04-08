@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Расписание</h1>
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
                            <a href="{{route('timetable.create')}}" class="btn btn-primary">Добавить</a>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>День недели</th>
                                    <th>Ч/З</th>
                                    <th>Номер пары</th>
                                    <th>Группа</th>
                                    <th>Предмет</th>
                                    <th>Преподаватель</th>
                                    <th>Аудитория</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($timetables as $timetable)
                                    <tr>
                                        <td><a href="{{route('timetable.show', $timetable->id)}}">{{$timetable->id}}</a></td>
                                        <td>{{$timetable->weekdayTitle}}</td>
                                        <td>{{$timetable->numeratorTitle}}</td>
                                        <td>{{$timetable->lesson_number}}</td>

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

                                        @foreach($users as $user)
                                            @if($user->id == $timetable->teacher_id)
                                                <td>{{$user->last_name .' '. $user->first_name}}</td>
                                            @endif
                                        @endforeach

                                        @foreach($classrooms as $classroom)
                                            @if($classroom->id == $timetable->classroom_id)
                                                <td>{{$classroom->number}}</td>
                                            @endif
                                        @endforeach

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
