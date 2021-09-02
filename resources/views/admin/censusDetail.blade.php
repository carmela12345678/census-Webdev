@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-info mb-3">
                <div class="card-header">
                    <hr class="my-4">
                    <div class="bg-info"><br>
					@if(!empty($records))
                            @foreach($records as $value)
                    <h4 class="row justify-content-center">Census Record No. {{$value['record_id']}}</h4><br>
                    </div>
                    <hr class="my-4">
                     
                </div>
                <div class="table-responsive" style="margin-right:20px; margin-left:20px;">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <td scope="col"><h5>Head of Household Information</h5><br>
                                
                                    <label for="Name">Name: {{$value['lastname']}}, {{$value['firstname']}}</label><br>
                                    <label for="Age">Age: {{$value['age']}} years old</label><br>
                                    <label for="Gender">Gender: {{$value['gender']}}</label><br>
                                    <label for="status">Civil Status: {{$value['civil_status']}}</label><br>
                                    <label for="address">Address: {{$value['address']}}</label><br>
                                    <label for="birthdate">Birthday: {{$value['birth_date']}}</label><br>
                                    <label for="education">Highest Educational Attainment: {{$value['education']}}</label><br>
                                    <label for="AnnualIncome">Annual Income: {{$value['sourceOfIncome']}}</label></td>
                            </tr>
                            <tr><td>
                                <div align="right">
                                    <form action="update-record" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$value['id']}}">
                                        <input type="submit" value="Edit" class="btn-info">
                                    </form>
                                </div>
                            </td></tr>
                            
                            @endforeach
                            @endif
                        </thead>
                        <tbody>

                    
            </div>
        </div>
    </div>
</div>

</div>


@endsection