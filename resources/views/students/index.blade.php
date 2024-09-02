@extends('layouts.app')
@section('title')
    show students
@endsection

@section('content')
    <fieldset id="fieldtable">
        <legend class="legend-fieldtable">students</legend>
        <table id="idtable2">

            <div style="text-align: right;"><a href="{{ route('student.create') }}" class="button_add">Add Student</a>
            </div>
            <br>
            <tr>

                <th align=center>Number</th>
                <th align=center>Student Name</th>
                <th align=center>Student Id</th>
                <th align=center>Phone Number</th>
                <th align=center>gender</th>
                <th align=center>address</th>
                <th align=center>Birth Date</th>
                <th align=center>nationality</th>
                <th align=center>section</th>
                <th align=center>Student Level</th>
                <th align=center>update</th>
                <th align=center>Delete</th>

            </tr>

            @foreach ($students as $student)
                <tr>
                    <td align=center>{{ $student->id }}</td>
                    <td align=center>{{ $student->student_name }}</td>
                    <td align=center>{{ $student->student_no }}</td>
                    <td align=center>{{ $student->phone_number }}</td>
                    <td align=center>{{ $student->gender }}</td>
                    <td align=center>{{ $student->address }}</td>
                    <td align=center>{{ $student->birth_date }}</td>
                    <td align=center>{{ $student->nationality }}</td>
                    <td align=center>{{ $student->section_id }}</td>
                    <td align=center>{{ $student->student_level }}</td>


                    <td align=center><a id="edetingancor" href="{{ route('student.edit', $student->id) }}"><i
                                class="fa-solid fa-pen-to-square"></i>&nbsp;Update</a></td>


                    <td align=center>
                        <a onclick="event.preventDefault();
                            document.getElementById('delete-form').submit();"
                            id="edetingancor" href="{{ route('student.destroy', $student->id) }}">
                            <i class="fa-solid fa-trash"></i>&nbsp;Delete
                        </a>
                        <form id="delete-form" action="{{ route('student.destroy', $student->id) }}" method="POST"
                            style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>

                    </td>
                </tr>
            @endforeach

        </table>
    </fieldset>
@endsection
