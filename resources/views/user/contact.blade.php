@extends('layouts.user')
@section('content')
        <div id="findus">
            <div class="coninfo" id="location">
                <h6 class="condets">OFFICE</h6>
                <p>VICTORY PLAZA 3RD FLOOR, Thika.<span class="importantinfo">Open from 9am to 5pm</span></p>
            </div>
            <div class="coninfo" id="telephone">
                <h6 class="condets">TELEPHONE</h6>
                <p>Nairobi: (+254)716615207.<br>Thika: (+254)728010172, (+254)705055983 <span class="importantinfo"> Available 24/7</span>.
                </p>
            </div>
            <div class="coninfo" id="socials">
                <h6 class="condets">OUR SOCIALS</h6>
                <ion-icon class="socialicons" name="logo-facebook"></ion-icon>
                <ion-icon class="socialicons" name="logo-instagram"></ion-icon>
                <ion-icon class="socialicons" name="logo-whatsapp"></ion-icon>
            </div>
        </div>

        <div id="clientcontact">
            <form action="" method="" id="contact_form" name="contactform">
                <fieldset>
                    <legend style="float:right">Contact Us:</legend>
                    <label for="first_name" class="contactlabels"> First Name:</label>
                    <input type="text" name="first_name" class="contactinputs" placeholder="First Name">
                    <label for="surname_name" class="contactlabels"> Surname Name:</label>
                    <input type="text" name="surname_name" class="contactinputs" placeholder="Surname Name"><br><br>
                    <label for="phone" class="contactlabels"> Phone Number:</label>
                    <input type="number" name="phone" class="contactinputs" placeholder="Telephone">
                    <label for="email" class="contactlabels"> Email:</label>
                    <input type="text" name="email" class="contactinputs" placeholder="Email"><br><br>
                    <label for="Query" class="contactlabels">Questions/Suggestions:</label>
                    <textarea name="Query" rows="7" max-width="95%" class="contactinputs" placeholder="Enter any query you may have (Optional)">
                    </textarea><br><br>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </fieldset> 
            </form>
        </div>
@endsection
