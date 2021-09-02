@extends('layouts/layout')

@section('body')

    <div style="background:#44CCFF; border: 1px solid black;">
    <h1>New Account Information</h1>
    </div>

    <div>
        <form action="new-accnt" method='POST'>
        @csrf
        <input type="text" name="fname" placeholder="First Name">
        <input type="text" name="lname" placeholder="Last Name"><br>
        <input type="radio"  name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="age" name="userAge" placeholder="age">
        <input type="text" name="userAdd" placeholder="Address">
        <input type="contact" name="userContact" placeholder="Contact Number">
        <input type="email" name="userEmail" placeholder="Email Address">
        <input type="submit" name="addUser" value="Add User" class="btn btn-primary">
        <input type="submit" name="cancelUser" value="Cancel" class="btn btn-primary">
        </form>
    </div>

@endsection