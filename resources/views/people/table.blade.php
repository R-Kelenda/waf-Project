<div class="table-responsive">
    <table class="table" id="people-table">
        <thead>
            <tr>
                <th>Personid</th>
        <th>Firstname</th>
        <th>Surname</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Dateofbirth</th>
        <th>Trainerid</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($people as $person)
            <tr>
                <td>{{ $person->PERSONID }}</td>
            <td>{{ $person->firstname }}</td>
            <td>{{ $person->surname }}</td>
            <td>{{ $person->Address }}</td>
            <td>{{ $person->Phone }}</td>
            <td>{{ $person->dateofbirth }}</td>
            <td>{{ $person->TRAINERID }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['people.destroy', $person->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('people.show', [$person->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('people.edit', [$person->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
