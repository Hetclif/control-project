@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Настройки задачи</h1>
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
                        <div class="card-header d-flex p-3">
                            <div class="mr-3">
                                <a href="{{route('task.edit', $task->id)}}" class="btn btn-primary">Редактировать</a>
                            </div>
                            <form action="{{route('task.delete', $task->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>

                                    <tr>
                                        <td>ID</td>
                                        <td>{{$task->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Предмет</td>
                                        <td>{{$lesson->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Группа</td>
                                        <td>{{$group->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Статус задачи</td>
                                        <td>{{$task->completedTitle}}</td>
                                    </tr>
                                    <tr>
                                        <td>Дата и время занятия</td>
                                        <td>{{ \Carbon\Carbon::parse($task->date_time)->format('d.m.Y H:i') }}</td>
                                    </tr>

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
