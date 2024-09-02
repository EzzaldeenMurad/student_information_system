@extends('layouts.app')
@section('title')
    show teatcher
@endsection

@section('content')

<fieldset id="fieldtable">
    <legend class="legend-fieldtable">teatchers</legend>
    <table id="idtable2">

        <div style="text-align: right;"><a href="{{ route('teatcher.create') }}" class="button_add">Add Teatcher</a>
        </div>
        <br>
        <tr>

            <th align=center>Number</th>
            <th align=center>Name</th>
            <th align=center>Phone Number</th>
            <th align=center>Address</th>
            <th align=center>Salary</th>
            <th align=center>update</th>
            <th align=center>Delete</th>

        </tr>

        @foreach ($query as $teatcher)
            <tr>
                <td align=center>{{ $teatcher->id }}</td>
                <td align=center>{{ $teatcher->teatcher_name }}</td>
                <td align=center>{{ $teatcher->phone_number }}</td>
                <td align=center>{{ $teatcher->address }}</td>
                <td align=center>{{ $teatcher->salary }}</td>

                <td align=center><a id="edetingancor" href="{{ route('teatcher.edit', $teatcher->id) }}"><i
                            class="fa-solid fa-pen-to-square"></i>&nbsp;Update</a></td>


                <td align=center>
                    <form id="delete-form" action="{{ route('teatcher.destroy', $teatcher->id) }}" method="POST"
                        style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                    <a onclick="event.preventDefault();
                        document.getElementById('delete-form').submit();"
                        id="edetingancor" href="{{ route('teatcher.destroy', $teatcher->id) }}">
                        <i class="fa-solid fa-trash"></i>&nbsp;Delete
                    </a>

                </td>
            </tr>
        @endforeach

    </table>
</fieldset>

@endsection
