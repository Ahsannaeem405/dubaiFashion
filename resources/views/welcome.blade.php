@extends('layouts.main')
@section('content')
    <section class="mt-5 mb-5 pt-5">
        <div class="container con_shadow p-5">
            <p class="p1">IMPORTANT NOTE:</p>
            <p class="p1">Please fill in all the information below to help us identify your profile. We will review the application and confirm your attendance after having reviewed your data.</p>
            <p class="p1">Kindly provide true and accurate information. Our team carefully reviews each profile and wrongful applications will not be confirmed.</p>
            <form action="#" method="post">
                <div class="row pt-3">
                    <div class="col-md-6 col-12 pt-3">
                        <label for=""><b><span class="text-danger">*</span>&nbsp; First Name</b></label>
                        <input type="text" class="mt-2 form-control" name="fname" required>

                    </div>
                    <div class="col-md-6 col-12 pt-3">
                        <label for=""><b><span class="text-danger">*</span>&nbsp; Last Name</b></label>
                        <input type="text" class="mt-2 form-control" name="lname" required>

                    </div>
                    <div class="col-md-12 col-12 pt-3">
                        <label for=""><b><span class="text-danger">*</span>&nbsp;Email</b></label>
                        <input type="text" class="mt-2 form-control" name="lname" required>

                    </div>
                    <div class="col-md-6 col-12 pt-3">
                        <label for=""><b><span class="text-danger">*</span>&nbsp;Phone</b></label><br>
                        <input id="phone" name="phone" class="form-control" type="tel" required>
                        <span id="valid-msg" class="hide">Valid</span>
                        <span id="error-msg" class="hide">Invalid number</span>

                    </div>
                    <div class="col-md-12 col-12 pt-3">
                        <label for=""><b>Instagram(Optional)</b></label>
                        <input type="text" class="form-control" name="insta" required>
                    </div>
                    <div class="col-md-12 col-12 pt-3">
                        <label for=""><b>linkedin (Optional)</b></label>
                        <input type="text" class="form-control" name="linked" required>
                    </div>
                    <div class="col-md-12 col-12 pt-3">
                        <label for=""><b><span class="text-danger">*</span>&nbsp;Profile Category</b></label>
                        <select name="cat" class="form-control" id="" required>
                            <option value="">-Select</option>

                            <option value="Press">Press</option>
                            <option value="Photographer">Photographer</option>
                            <option value="Celebrity">Celebrity or Influencer</option>
                            <option value="Press">Guest</option>

                        </select><br>
                        <i class="p1">* Are you attending with someone who has already registered? Please mention their name below to ensure your seats are assigned together. Ps. If you want to attend with another guest please ask them to rsvp. Plus 1 is not accepted
                            unless the name is on the list.</i>


                    </div>
                    <div class="col-md-12 col-12 pt-3">
                        <label for=""><b>Other guest's name</b></label>
                        <input type="text" class="form-control" name="gname"><br>
                        <i class="p1">* Invite code should be provided to you by the brand or partner that invited you to the event. If you haven't receive one please skip this part.</i>

                    </div>
                    <div class="col-md-12 col-12 pt-3">
                        <a href="{{url('events')}}"> <button type="button" class="btn btn-dark pl-3 pr-3"><b>Next</b> </button></a>
                    </div>


                </div>
            </form>
        </div>

    </section>
@endsection

