<div class="table-responsive">
    <table class="table" id="trainers-table">
        <thead>
            <tr>
                <th>Firstname</th>
        <th>Phone</th>
        <th>Personid</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($trainers as $trainer)
            <tr>
                <td>{{ $trainer->firstname }}</td>
            <td>{{ $trainer->Phone }}</td>
            <td>{{ $trainer->PERSONID }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['trainers.destroy', $trainer->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('trainers.show', [$trainer->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('trainers.edit', [$trainer->id]) }}" class='btn btn-default btn-xs'>
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
