@extends('Layouts.form_app')

@section('body')
    <form method="post" enctype="multipart/form-data">
        @csrf

    	<h3>Personal data</h3>
    	<br>

    	<label for="short_title"> Short title:</label>
    	<input type="text" id="short_title" name="short_title">
    	<br>

        <label for="legal_name"> Legal name:</label>
        <input type="text" id="legal_name" name="legal_name">
        <br>


        <label for="payer_registration_number">Payer account number:</label>
        <input type="text" name="payer_registration_number" id="payer_registration_number">
    	<br>

        <label for="legal_entity_registration_certificate">legal entity registration certificate photo:</label>
        <input type="file" name="legal_entity_registration_certificate" id="legal_entity_registration_certificate">
        <br>
        <br>

    	<h3>Profile</h3>
    	<br>

    	<label for="profile_photo">Your photo:</label>
    	<input type="file" name="profile_photo" id="profile_photo">
    	<br>

    	<label for="description">Description:</label>
    	<textarea type="text" name="description" id="description"></textarea>
    	<br>

    	<label for="photo_of_work">Photo of your work:</label>
    	<input type="file" name="photo_of_work" id="photo_of_work">
    	<br>

    	<label for="services">Services provided:</label>
    	<select id="services" name="services">
    		<option value="Building">Building</option>
    		<option value="Development">Development</option>
    		<option value="Fixing">Fixing</option>
    		<option value="Design">Design</option>
    	</select>
    	<br>

    	<label for="City">City:</label>
    	<select id="City" name="city">
    		<option value="Soligorsk">Soligorsk</option>
    		<option value="NewYork">New York</option>
    		<option value="Minsk">Minsk</option>
    	</select>
    	<br>

        <input type="hidden" name="legal_status" value="Legal face">

    	<button type="submit">Submit</button>
    </form>
@endsection
