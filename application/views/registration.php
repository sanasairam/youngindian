<section class="registration-section">

        <div class="row">
        </div>
        <div class="container">
            <div class="row my-4">
                <div class="col">
                    <h3 class="main-heading text-center">
                        Registration For Volunteer
                    </h3>
                    <span><?php if($userDetails){
                     echo "<p class='bg-success'> Registered Successfully We will get back to you soon</p>" ;
                    } if($registrationFailed){
                        echo "<p class='bg-danger'>" .$errormessage. "</p>";
                    } ?></span>
                </div>
            </div>
            <div class="registration-form my-5">
                <form class="volunteerRegistration" action="./register" method="POST" enctype="multipart/form-data">
                <div class="row mb-2">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="first_name">First Name * :</label>
                            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Enter First Name" required>
                            <small id="errorMsg" class="form-text text-muted"> </small>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="sur_name">Last Name / Surname * :</label>
                            <input type="text" name="sur_name" class="form-control" id="sur_name" placeholder="Enter Surname">
                            <small id="errorMsg" class="form-text text-muted"> </small>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="last_name">Gender * :</label>
                            <div class="d-flex">
                                <div class="radio">
                                    <label><input id="gender"  type="radio" class="form-check-input" value="male" name="gender">Male</label>
                                </div>
                                <div class="radio">
                                    <label><input id="gender" type="radio" class="form-check-input" value="female" name="gender">Female</label>
                                </div>
                                <label id="gender-error" class="error" for="gender"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="dob">Date Of Birth * :</label>
                            <input type="text" name="dob" class="form-control" id="dob" placeholder="Enter DOB">
                            <small id="errorMsg" class="form-text text-muted"> </small>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-lg-3">
                        <div class="form-group">
                            <label for="email_id">Email * :</label>
                            <input type="email" name="email_id" class="form-control" id="email_id" placeholder="Enter Email">
                            <small id="errorMsg" class="form-text text-muted"> </small>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="mobile_num">Mobile Number * :</label>
                            <input type="text" name="mobile_num" class="form-control" id="mobile_num" placeholder="Enter Mobile Number">
                            <small id="errorMsg" class="form-text text-muted"> </small>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="country">Select Country * :</label>
                            <select class="countries form-control" name="country" id="country" required>
                                <option value="">select Country</option>
                            </select>
                            <small id="errorMsg" class="form-text text-muted"> </small>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="state">Select State * :</label>
                            <select class="states form-control" name="state" id="state"  required>
                                <option value="">select State</option>
                            </select>
                            <small id="errorMsg" class="form-text text-muted"> </small>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="city">Select city * :</label>
                            <select class="cities form-control" name="city" id="city" required>
                                <option value="">select City</option>
                            </select>
                            <small id="errorMsg" class="form-text text-muted"> </small>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="pincode">Pincode * :</label>
                            <input type="text" name="pincode" class="form-control" id="pincode" placeholder="Enter Pincode">
                            <small id="errorMsg" class="form-text text-muted"> </small>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-lg-3">
                        <div class="form-group">
                            <label for="education">Education Qualification :</label>
                            <input type="text" name="education" class="form-control" id="education" placeholder="Enter Education Qualification">
                            <small id="errorMsg" class="form-text text-muted"> </small>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="jobprofile">Job Qualification :</label>
                            <input type="text" name="jobprofile" class="form-control" id="jobprofile" placeholder="Enter Job Qualification">
                            <small id="errorMsg" class="form-text text-muted"> </small>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="address">Address * :</label>
                        <textarea class="form-control" name="address" rows="3" id="address"></textarea>
                    </div>
                </div>
                </div>

                <div class="row mb-2">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="profileimage">Profile Image * :</label>
                                    <input type="file" class="form-control-file" name="profileimage" id="profileimage" onchange="readImgURL(this);" required>
                                </div>  
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                    <img class="img-thumbnail" id="ProfileImageShow" src="http://placehold.it/180" alt="your image" />
                            </div>
                        </div>  
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="identityproof">Govt Identity Proof * :</label>
                                    <input type="file" class="form-control-file" name="identityproof" id="identityproof" onchange="readProofURL(this);" required>
                                </div>  
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                    <img class="img-thumbnail" id="IdentityProofShow" src="http://placehold.it/180" alt="your image" />
                            </div>
                        </div>  
                    </div>
                </div>                
                <div class="row text-center">
                    <button type="submit" name="redg-submit" class="btn btn-primary" value="16345">Submit</button>
                </div>
                </form>
            </div>

        </div>
    </section>

<script>
     function readImgURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#ProfileImageShow')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readProofURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#IdentityProofShow')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }</script>
        