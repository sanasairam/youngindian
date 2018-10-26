<section class="registration-section">

        <div class="row">
        </div>
        <div class="container">
            <div class="row my-4">
                <div class="col">
                    <h3 class="main-heading text-center">
                        Want To Join US
                    </h3>
                </div>
            </div>
            <div class="registration-form my-5">
                <form class="volunteerRegistration" action="./register" method="POST">
                    <div class="row">
                    <span><?php if($userDetails){
                     echo "submited successfully" ;
                    } if($registrationFailed){
                        echo "registration failed";
                    } ?></span>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="first_name">First Name :</label>
                                <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Enter First Name" required>
                                <small id="errorMsg" class="form-text text-muted"> </small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="last_name">Last Name :</label>
                                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter Last Name">
                                <small id="errorMsg" class="form-text text-muted"> </small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-lg-3">
                            <div class="form-group">
                                <label for="sur_name">Surname :</label>
                                <input type="text" name="sur_name" class="form-control" id="sur_name" placeholder="Enter Surname">
                                <small id="errorMsg" class="form-text text-muted"> </small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group radio_check">
                                <label for="">Gender :</label>
                                <div class="d-flex">
                                    <div class="form-check">
                                        <label class="form-check-label mr-3">
                                            <input id="gender"  type="radio" class="form-check-input" value="male" name="gender">Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input id="gender" type="radio" class="form-check-input" value="female" name="gender">Female
                                        </label>
                                    </div>
                                </div>
                                <!-- <label id="gender-error" class="error" for="gender">This field is required.</label> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="dob">Date Of Birth :</label>
                                <input type="text" name="dob" class="form-control" id="dob" placeholder="Enter DOB">
                                <small id="errorMsg" class="form-text text-muted"> </small>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-lg-3">
                            <div class="form-group">
                                <label for="email_id">Email :</label>
                                <input type="email" name="email_id" class="form-control" id="email_id" placeholder="Enter Email">
                                <small id="errorMsg" class="form-text text-muted"> </small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="mobile_num">Mobile Number :</label>
                                <input type="text" name="mobile_num" class="form-control" id="mobile_num" placeholder="Enter Mobile Number">
                                <small id="errorMsg" class="form-text text-muted"> </small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="country">Select Country:</label>
                                <select class="countries form-control" name="country" id="country">
                                    <option value="0">select bandy</option>
                                </select>
                                <small id="errorMsg" class="form-text text-muted"> </small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-lg-3">
                            <div class="form-group">
                                <label for="state">Select State:</label>
                                <select class="states form-control" name="state" id="state" >
                                    <option value="0">select bandy</option>
                                </select>
                                <small id="errorMsg" class="form-text text-muted"> </small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-lg-3">
                            <div class="form-group">
                                <label for="city">Select city:</label>
                                <select class="cities form-control" name="city" id="city">
                                    <option value="0">select bandy</option>
                                </select>
                                <small id="errorMsg" class="form-text text-muted"> </small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="city">City :</label>
                                <input type="text" name="city" class="form-control" id="city" placeholder="Enter City">
                                <small id="errorMsg" class="form-text text-muted"> </small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="area">Area :</label>
                                <input type="text" name="area" class="form-control" id="area" placeholder="Enter Area">
                                <small id="errorMsg" class="form-text text-muted"> </small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-lg-3">
                            <div class="form-group">
                                <label for="pincode">Pincode :</label>
                                <input type="text" name="pincode" class="form-control" id="pincode" placeholder="Enter Pincode">
                                <small id="errorMsg" class="form-text text-muted"> </small>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-lg-3">
                        <div class="form-group">
                            <label for="ProfileImage">Profile Image</label>
                            <input type="file" class="form-control-file" id="ProfileImage">
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-lg-3">
                            <div class="form-group">
                                <label for="IdentityProof">Identity Proof</label>
                                <input type="file" class="form-control-file" id="IdentityProof">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="address">Address :</label>
                                <textarea class="form-control" name="address" rows="3" id="address"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <button type="submit" name="redg-submit" class="btn btn-primary" value="16345">Submit</button>

                    </div>
                </form>
            </div>

        </div>
    </section>
    