<div class="table-responsive">
    <table class="table" id="orders-table">
        <thead>
            <tr>
                <th>Personid</th>
        <th>Trainerid</th>
        <th>Ordernumber</th>
        <th>Customername</th>
        <th>Orderdate</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orders as $orders)
            <tr>
                <td>{{ $orders->PERSONID }}</td>
            <td>{{ $orders->TRAINERID }}</td>
            <td>{{ $orders->OrderNumber }}</td>
            <td>{{ $orders->CustomerName }}</td>
            <td>{{ $orders->OrderDate }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['orders.destroy', $orders->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('orders.show', [$orders->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('orders.edit', [$orders->id]) }}" class='btn btn-default btn-xs'>
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
