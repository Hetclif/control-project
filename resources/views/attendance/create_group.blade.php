@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Заполнить посещаемость группы</h1>
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
            <form action="{{route('attendance.update', $task->id)}}" method="post">
                @csrf
                @method('patch')
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>Студент</th>
                        <th>Присутствие</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($currAttendance as $attendance)
                        <tr>
                            @foreach($students as $student)
                                @if($attendance->student_id == $student->id)
                                    <td>{{$student->last_name .' '. $student->first_name}}</td>
                                @endif
                            @endforeach

                            <td>
                                <div class="form-group">
                                    <input type="hidden" name="id" value="{{ $attendance->id }}">
                                    <div class="form-group clearfix">
                                        <div class="icheck-success d-inline">
                                            <input name="is_attendance" type="checkbox" id="{{ $attendance->id }}"
                                                {{$attendance->is_attendance ? 'checked' : ''}}
                                                value="$attendance->is_attendance">
                                            <label for="{{ $attendance->id }}">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Добавить">
                </div>
            </form>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
