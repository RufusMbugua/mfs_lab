@extends('layouts.main')

@section('content')

<div class="card">
    <div class="card-header no-bg b-a-0">
    Loans
    </div>
    <div class="card-block">
    <table class="table table-bordered datatable">
        <thead>
        <tr>
            <th>
            Name
            </th>
            <th>
            Loan Amount
            </th>
            <th>
            Created
            </th>
            <th>
            Actions
            </th>
        </tr>
        </thead>

        @foreach ($loans as $loan)
            <tr>
                <td> {{ $loan->customer->name }} </td>
                <td> {{ $loan->amount }} </td>
                <td> {{ $loan->created_at }} </td>
                <td> 
                    
                        <a href=" {{ route('loans.create') }}" class="btn btn-primary btn-sm">View</a>
                        <a href=" {{ route('loans.destroy',$loan) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you would like remove the record?'); ">Destroy</a>
                    
                </td>
            </tr>
            
        @endforeach
    </table>
    </div>
</div>

@endsection