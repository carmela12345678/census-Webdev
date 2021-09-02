@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-info mb-3">
                <div class="card-header">
                    <hr class="bg-info my-4">
                    <div class="bg-info"><br>
                    <h4 class="row justify-content-center">Add Census Member</h4><br>
                    </div>
                    <hr class="bg-info my-4">
                </div>
                <div class="container">
                <div class="form-group">
                    <form action="new-rec" method='POST'>
                    @csrf
                    @if(!empty($records))
                        @foreach($records as $value)
                        <input type="hidden" name="record" value="{{$value['record_id']}}">
                        
                        <div class="form-row">
                            <div class="col"><br>
                                <label for="formGroupExampleInput">First Name:</label>
                                <input type="text" class="form-control" name="fname" placeholder="First Name">
                            </div>
                            <div class="col"><br>
                                <label for="civilStatus">Last Name:</label>
                                <input type="text" class="form-control" name="lname" placeholder="Last Name">
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="civilStatus">Age:</label>
                                <input type="age" class="form-control" name="age" placeholder="Age">
                            </div>
                            <div class="col">
                                <label for="gender">Gender:</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="civilStatus">Civil Status:</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="female">Date of Birth:</label>
                                <input type="date" class="form-control" name="dateOfBirth">
                            </div>
                            <div class="col">
                                <label for="role">Household Role:</label>
                                <select class="form-control" name="role" id="role">
                                    <option value="Member">Member</option>
                                </select>
                            </div>
                        </div><br>
                        <label for="educational">Highest Educational Attainment:</label>
                        <input type="text" class="form-control" name="educational" placeholder="Educational Attainment"><br>
                        <label for="sourceOfIncome">Annual Income</label>
                        <input type="tel" class="form-control" name="sourceOfIncome" placeholder="Annual Income"><br>
                        <label for="add">Address:</label>
                        <input type="text" class="form-control" name="add" placeholder="Address" value="{{$value['address']}}">
                        @endforeach
                    @endif
                        <br>
                        <input type="submit" name="newRecSubmit" class="btn btn-primary">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</div>
@endsection