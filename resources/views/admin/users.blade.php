@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-info mb-3">
                <div class="card-header">
                    <hr class="bg-info my-4">
                    <div class="bg-info"><br>
                    <h4 class="row justify-content-center">User Accounts</h4><br>
                    </div>
                    <hr class="bg-info my-4">
                    <div align="right">
                        <form action="searchUser" method='GET'>
                            @csrf
                            <input type="text" name='searchUser' placeholder="Search User Account">
                            <input type="submit" name='searchUser' class="btn-primary">
                        </form>
                    </div>  
                </div>
                <div class="table-responsive" style="margin-right:20px; margin-left:20px;">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <td scope="col">User ID</td>
                            <td scope="col">Name</td>
                            <td scope="col">Email address</td>
                            </tr>
                        </thead>
                        <tbody>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if(!empty($records))
                            @foreach($records as $value)
                    <tr>
                        <td>{{$value['id']}}</td>
                        <td>{{$value['name']}}</td>
                        <td>{{$value['email']}}</td>
                        <td><a href="/censusRecord/{{$value['id']}}">View</td>
                        <td>
                            <form action="census-delete" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$value['id']}}">
                            <input type="submit" value="Delete" class="btn-danger">
                            </form>
                        </td>
                    </tr>
                            @endforeach

                        @endif
                    </div>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

@endsection