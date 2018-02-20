@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body" class="table">
                    <table style="width:100%;">
                        <tr>
                        <td>#id</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Registered On</td>
                        </tr>
                    @foreach ($users as $user)
                        <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        </tr>
                    @endforeach
                        <tr>
                            <td colspan="4">{{ $users->links() }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
