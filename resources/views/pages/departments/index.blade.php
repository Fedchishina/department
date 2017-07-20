@extends('layout')

@section('content')
    <div class="btn-group">
        <a class="btn btn-default" id="modal-add-department" href="#modal-container-add-department" role="button" class="btn" data-toggle="modal">
            Добавить
        </a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Название отдела</th>
            <th>Количество сотрудников отдела</th>
            <th>Максимальная заработная плата среди сотрудников отдела</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
            @foreach($departments as $department)
                <tr>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->departmentWorkers->count() }}</td>
                    <td>{{ $department->departmentWorkers->max('salary') }}</td>
                    <td>
                        <a class="btn btn-default modal-edit-department" href="#modal-container-edit-department" role="button" class="btn" data-toggle="modal" data-id="{{ $department->id }}" data-name="{{ $department->name }}">
                            Изменить
                        </a>
                        <a class="btn btn-default modal-del-department" href="#modal-container-del-department" role="button" class="btn" data-toggle="modal" data-id="{{ $department->id }}" data-name="{{ $department->name }}">
                            Удалить
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @include('pages.departments.add')
    @include('pages.departments.edit')
    @include('pages.departments.del')
@endsection