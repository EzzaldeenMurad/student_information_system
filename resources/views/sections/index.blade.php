@extends('layouts.app')
@section('title')
    show section
@endsection

@section('content')
    <fieldset id="fieldtable">
        <legend class="legend-fieldtable">Sections</legend>
        <table id="idtable2">

            <div style="text-align: right;"><a href="{{ route('section.create') }}" class="button_add">Add Section</a>
            </div>
            <br>
            <tr>

                <th align=center>Number</th>
                <th align=center>Section Name</th>
                <th align=center>faculty Name</th>
                <th align=center>date</th>
                <th align=center>update</th>
                <th align=center>Delete</th>

            </tr>

            @foreach ($sections as $section)
                <tr>
                    <td align=center>{{ $section->id }}</td>
                    <td align=center>{{ $section->section_name }}</td>
                    <td align=center>{{ $section->faculty->faculty_name }}</td>
                    <td align=center>{{ $section->created_at }}</td>
                    <td align=center><a id="edetingancor" href="{{ route('section.edit', $section->id) }}"><i
                                class="fa-solid fa-pen-to-square"></i>&nbsp;Update</a></td>


                    <td align=center>
                        <form id="delete-form" action="{{ route('section.destroy', $section->id) }}" method="POST"
                            style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                        <a onclick="event.preventDefault();
                            document.getElementById('delete-form').submit();"
                            id="edetingancor" href="{{ route('section.destroy', $section->id) }}">
                            <i class="fa-solid fa-trash"></i>&nbsp;Delete
                        </a>


                    </td>
                </tr>
            @endforeach

        </table>
    </fieldset>
@endsection
