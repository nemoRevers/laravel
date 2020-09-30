@extends('Layouts.form_app')

@section('body')
    <form method="post" href="">
        @csrf

    	<h3>Personal data</h3>
    	<br>

    	<label for="surname"> Surname:</label>
    	<input type="text" id="surname" name="surname">
    	<br>

    	<label for="name"> Name:</label>
    	<input type="text" id="name" name="name">
    	<br>

    	<label for="passport">Photo of the last spread of the passport:</label>
    	<input type="file" name="passport" id="passport">
    	<br>

        <label for="payer_registration_number">Payer account number:</label>
        <input type="number" name="payer_registration_number" id="payer_registration_number">
    	<br>

        <label for="certificate_of_registration_of_an_individual_businessman">Certificate of registration of an individual businessman</label>
        <input type="file" name="certificate_of_registration_of_an_individual_businessman" id="certificate_of_registration_of_an_individual_businessman">
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

        <input type="hidden" name="legal_status" value="Individual businessman">

    	<button type="submit">Submit</button>
    </form>
@endsection
