@extends('layouts.main')

@section('content')

<div class="card">
    <div class="card-header no-bg b-a-0">
    Customers
    </div>
    <div class="card-block">
    <table class="table table-bordered datatable">
        <thead>
        <tr>
            <th>
            Name
            </th>
            <th>
            Created
            </th>
            <th>
            Actions
            </th>
        </tr>
        </thead>

        @foreach ($customers as $customer)
        <tr>
            <td> {{ $customer->name }}</td>
            <td> {{ $customer->created_at }}</td>
            <td> 
                
                    <a href=" {{ route('customers.create') }}" class="btn btn-primary btn-sm">View</a>
                    <a href=" {{ route('customers.destroy',$customer) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you would like remove the record?'); ">Destroy</a>
                
            </td>
            </tr>
        @endforeach
    </table>
    </div>
</div>

@endsection