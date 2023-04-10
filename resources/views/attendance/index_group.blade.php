@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Посещаемость групп по расписанию</h1>
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
                                    <th>Предмет</th>
                                    <th>День недели</th>
                                    <th>Ч/З</th>
                                    <th>Номер пары</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($timetables as $timetable)
                                        <tr>
                                        @foreach($lessons as $lesson)
                                            @if($timetable->lesson_id == $lesson->id)

                                                    <td><a href="{{route('attendance_task.index', ['group' => $group->id, 'timetable' => $timetable->id])}}">
                                                            {{$lesson->name}}</a></td>

                                            @endif
                                        @endforeach

                                        <td>{{$timetable->weekdayTitle}}</td>
                                        <td>{{$timetable->numeratorTitle}}</td>
                                        <td>{{$timetable->lessonTitle}}</td>
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
