<!DOCTYPE html>
<html>
<head>
	<title>Verified Records User </title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-info mb-3">
                <div class="card-header">
                    <hr class="bg-info my-4">
                    <div class="bg-info"><br>
                    <h4 class="row justify-content-center">Verified Census Records</h4><br>
                    </div>
                    <hr class="bg-info my-4">

                    <div align="right">
                    <form action="searchUnverified" method='GET'>
                        @csrf
                        <input type="text" name='searchUnverified' placeholder="Search Record">
                        <input type="submit" name='searchUnverified' class="btn-primary" placeholder="Search">
                    </form>
                    </div>
                </div>
                <div class="table-responsive" style="margin-right:20px; margin-left:20px;">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <td scope="col">Record No.</td>
                            <td scope="col">Family Name</td>
                            <td scope="col">Address</td>
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

                            @if($value['role'] == "Head")
                    <tr>
                        <td>{{$value['record_id']}}</td>
                        <td>{{$value['lastname']}}, {{$value['firstname']}}</td>
                        <td>{{$value['address']}}</td>
                        <td>
                            <form action="#" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$value['record_id']}}">
                                <input type="submit" value="View" class="btn-info">
                            </form>
                        </td>
                        <td>
                            <form action="#" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$value['record_id']}}">
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
</body>
</html>