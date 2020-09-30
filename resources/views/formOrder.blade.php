@extends('Layouts.form_app')

@section('body')
    <div class="container">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ route('orderSubmit') }}" enctype="multipart/form-data">
            @csrf
            <label for="Section">Section:</label>
            <select name="Section" id="Section">
                <option value="Building">Building</option>
                <option value="Development">Development</option>
                <option value="Fixing">Fixing</option>
                <option value="Design">Design</option>
            </select>
            <br>
            <label for="Headline">Headline:</label><input type="text" name="Headline" id="Headline">
            <br>
            <br>
            <label for="Description">Description:</label><textarea name="Description" id="Description" cols="30" rows="10"></textarea>
            <br>
            <br>
            <label for="Image">Photos and files to order:</label><input type="file" name="Image" id="Image">
            <br>
            <br>
            <label for="City">City:</label><input type="text" name="City" id="City">
            <br>
            <br>
            <label for="Date of completion">Date of completion:</label><input type="date" name="Date_of_completion" id="Date of completion">
            <br>
            <br>
            <label for="Price">Price:</label><input type="number" name="Price" id="Price">
            <br>
            <br>
            <span>or</span>
            <br>
            <br>
            <input type="checkbox" name="Negotiable" id="negotiable">  <label for="negotiable">negotiable</label>
            <br>
            <br>
            <label for="name">Name:</label><input type="text" name="Name" id="name">
            <br>
            <input type="submit">
        </form>
    </div>
@endsection
