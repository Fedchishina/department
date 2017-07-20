@extends('layout')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Отчество</th>
            <th>Пол</th>
            <th>Зарплата</th>
            <th>Отделы</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($workers as $worker)
            <tr>
                <td>{{ $worker->firsrName }}</td>
                <td>{{ $worker->lastName }}</td>
                <td>{{ $worker->middleName }}</td>
                <td>@if($worker->sex == '1') мужчина @elseif($worker->sex == '0') женщина @endif</td>
                <td>{{ $worker->middleName }}</td>
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
@endsection