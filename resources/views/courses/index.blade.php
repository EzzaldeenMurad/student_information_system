@extends('layouts.app')
@section('title')
    show course
@endsection

@section('content')
    <fieldset id="fieldtable">
        <legend class="legend-fieldtable">Course</legend>
        <table id="idtable2">

            <div style="text-align: right;"><a href="{{ route('course.create') }}" class="button_add">Add Course</a>
            </div>
            <br>
            <tr>

                <th align=center>Number</th>
                <th align=center>Course Name</th>
                <th align=center>teatcher</th>
                <th align=center>section Name</th>
                <th align=center>level</th>
                <th align=center>term</th>
                <th align=center>update</th>
                <th align=center>Delete</th>

            </tr>

            @foreach ($courses as $course)
                <tr>
                    <td align=center>{{ $course->id }}</td>
                    <td align=center>{{ $course->course_name }}</td>
                    <td align=center>{{ $course->teatcher->teatcher_name }}</td>
                    <td align=center>{{ $course->section->section_name }}</td>
                    <td align=center>{{ $course->course_level }}</td>
                    <td align=center>{{ $course->course_term }}</td>
                    <td align=center><a id="edetingancor" href="{{ route('course.edit', $course->id) }}"><i
                                class="fa-solid fa-pen-to-square"></i>&nbsp;Update</a></td>


                    <td align=center>
                        <form id="delete-form" action="{{ route('course.destroy', $course->id) }}" method="POST"
                            style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                        <a onclick="event.preventDefault();
                            document.getElementById('delete-form').submit();"
                            id="edetingancor" href="{{ route('course.destroy', $course->id) }}">
                            <i class="fa-solid fa-trash"></i>&nbsp;Delete
                        </a>
                    </td>
                </tr>
            @endforeach

        </table>
    </fieldset>
@endsection
