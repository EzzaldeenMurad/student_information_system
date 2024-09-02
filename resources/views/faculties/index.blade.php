@extends('layouts.app')

@section('title')
    show faculty
@endsection

@section('content')
    <fieldset id="fieldtable">
        <legend class="legend-fieldtable">faculties</legend>
        <table id="idtable2">

            <div style="text-align: right;"><a href="{{ route('faculty.create') }}" class="button_add">Add faculty</a>
            </div>
            <br>
            <tr>

                <th align=center>Number</th>
                <th align=center>Name</th>
                <th align=center>date</th>
                <th align=center>update</th>
                <th align=center>Delete</th>

            </tr>

            @foreach ($faculties as $faculty)
                <tr>
                    <td align=center>{{ $faculty->id }}</td>
                    <td align=center>{{ $faculty->faculty_name }}</td>
                    <td align=center>{{ $faculty->created_at }}</td>
                    <td align=center><a id="edetingancor" href="{{ route('faculty.edit', $faculty->id) }}"><i
                                class="fa-solid fa-pen-to-square"></i>&nbsp;Update</a></td>


                    <td align=center>
                        <form id="delete-form" action="{{ route('faculty.destroy', $faculty->id) }}" method="POST"
                            style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                        <a onclick="event.preventDefault();
                            document.getElementById('delete-form').submit();"
                            id="edetingancor" href="{{ route('faculty.destroy', $faculty->id) }}">
                            <i class="fa-solid fa-trash"></i>&nbsp;Delete
                        </a>
                    </td>
                </tr>
            @endforeach

        </table>
    </fieldset>
@endsection
