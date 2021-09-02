@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-info mb-3">
                <div class="card-header">
                    <hr class="my-4">
                    <div class="bg-info"><br>
                    <h4 class="row justify-content-center">Census Record No.</h4><br>
                    </div>
                    <hr class="my-4">
                    <div align="right">
                    <form action="searchUnverified" method='GET'>
                        @csrf
                        <input type="text" name='searchUnverified' placeholder="Search Record">
                        <input type="submit" name='searchUnverified' class="btn-primary" placeholder="Search">
                    </form>
                    </div>
                    <div align="right">
                        <a type="button" href="/home">Add new member</a>
                    </div>
                </div>
                <div class="table-responsive" style="margin-right:20px; margin-left:20px;">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <td scope="col"><h5>Head of Household Information</h5><br>
                            @if(!empty($records))
                            @foreach($records as $value)
                                @if($value['role'] == "Head")
                                    <label for="Name">Name: {{$value['lastname']}}, {{$value['firstname']}}</label><br>
                                    <label for="Age">Age: {{$value['age']}} years old</label><br>
                                    <label for="Gender">Gender: {{$value['gender']}}</label><br>
                                    <label for="status">Civil Status: {{$value['civil_status']}}</label><br>
                                    <label for="address">Address: {{$value['address']}}</label><br>
                                    <label for="birthdate">Birthday: {{$value['birth_date']}}</label><br>
                                    <label for="education">Highest Educational Attainment: {{$value['education']}}</label><br>
                                    <label for="AnnualIncome">Annual Income: {{$value['sourceOfIncome']}}</label></td>
                                @endif
                            @endforeach
                            @endif
                            </tr>
                        </thead>
                        <tbody>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                    <tr>
                        <td scope="col">Record No.</td>
                        <td scope="col">Family Name</td>
                        <td scope="col">Address</td>
                    <tr>
                        @if(!empty($records))
                            @foreach($records as $value)
                            @if($value['role'] == "Member")
                    <tr>
                        <td>{{$value['record_id']}}</td>
                        <td>{{$value['lname']}}, {{$value['fname']}}</td>
                        <td>{{$value['address']}}</td>
                        <td>
                            <form action="census-view" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$value['id']}}">
                                <input type="submit" value="View" class="btn-info">
                            </form>
                        </td>
                        <td>
                            <form action="census-delete" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$value['id']}}">
                            <input type="submit" value="Delete" class="btn-danger">
                            </form>
                        </td>
                    </tr>
                            @endif
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



<script>
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>

@endsection