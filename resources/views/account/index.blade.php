@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 Crud</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/account/create') }}" class="btn btn-success btn-sm" title="Add New Account">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Account
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>TYPE</th>
                                        <th>EMAIL</th>
                                        <th>PASSWORD</th>
                                        <th>ROLE</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($accounts as $account)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        {{-- <td>{{ $account->id }}</td> --}}
                                        <td>{{ $account->type }}</td>
                                        <td>{{ $account->email }}</td>
                                        <td>{{ $account->password }}</td>
                                        <td>{{ $account->role }}</td>
                                        <td>{{ $account->status }}</td>
                                        <td>
                                            <a href="{{ url('/account/' . $account->id) }}" title="View Account"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/account/' . $account->id . '/edit') }}" title="Edit Account"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/account' . '/' . $account->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Account" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection