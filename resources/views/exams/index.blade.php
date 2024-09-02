@extends('layouts.app')
@section('title')
    show exam
@endsection

@section('content')
    <fieldset id="fieldtable">
        <legend class="legend-fieldtable">Exams</legend>
        <table id="idtable2">

            <div style="text-align: right;"><a href="{{ route('exam.create') }}" class="button_add">Add Exam</a>
            </div>
            <br>
            <tr>

                <th align=center>Number</th>
                <th align=center>Student Name</th>
                <th align=center>course Name</th>
                <th align=center>exam Date</th>
                <th align=center>Exam Degree</th>
                <th align=center>Student Degree</th>
                <th align=center>update</th>
                <th align=center>Delete</th>

            </tr>

            @foreach ($exams as $exam)
                <tr>
                    <td align=center>{{ $exam->id }}</td>
                    <td align=center>{{ $exam->student->student_name }}</td>
                    <td align=center>{{ $exam->course->course_name}}</td>
                    <td align=center>{{ $exam->exam_date }}</td>
                    <td align=center>{{ $exam->exam_degree }}</td>
                    <td align=center>{{ $exam->student_degree }}</td>

                    <td align=center><a id="edetingancor" href="{{ route('exam.edit', $exam->id) }}"><i
                                class="fa-solid fa-pen-to-square"></i>&nbsp;Update</a></td>


                    <td align=center>
                        <form id="delete-form" action="{{ route('exam.destroy', $exam->id) }}" method="POST"
                            style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                        <a onclick="event.preventDefault();
                            document.getElementById('delete-form').submit();"
                            id="edetingancor" href="{{ route('exam.destroy', $exam->id) }}">
                            <i class="fa-solid fa-trash"></i>&nbsp;Delete
                        </a>
                    </td>
                </tr>
            @endforeach

        </table>
    </fieldset>
@endsection
