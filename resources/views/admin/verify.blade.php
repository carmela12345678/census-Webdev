@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-info mb-3">
                <div class="card-header">
                    <hr class="my-4">
                    <div class="bg-info"><br>
                    <h4 class="row justify-content-center">Admin Verification</h4><br>
                    </div>
                    <hr class="my-4">
                    
                </div>
                <div class="table-responsive" style="margin-right:20px; margin-left:20px;">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr><td>
                            @if(!empty($records))
                            @foreach($records as $value)
                                <form action="verify-census" method="POST">
                                    @csrf
                                        <label for="formGroupExampleInput">Enter Admin Password: </label>
                                        <input type="hidden" name="id" value="{{$value['id']}}">
                                        <input type="Password" class="form-control" name="pass" placeholder="Password"><br>
                                        <input type="submit" value="Verify" class="btn-primary">
                                </form>
                            @endforeach
                            @endif
                            </td>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

@endsection