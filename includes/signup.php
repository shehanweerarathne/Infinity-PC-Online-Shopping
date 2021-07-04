 <h4 class="checkout-subtitle">create a new account</h4>
                     <form class="register-form outer-top-xs" role="form" method="post" name="register" onSubmit="return valid();">
                        <div class="form-group">
                           <label class="info-title" for="fullname">Full Name </label>
                           <input type="text" class="form-control unicase-form-control text-input" id="fullname" name="fullname" required="required">
                        </div>
                        <div class="form-group">
                           <label class="info-title" for="exampleInputEmail2">Email Address </label>
                           <input type="email" class="form-control unicase-form-control text-input" id="email" name="emailid" required >
                           <span id="user-availability-status1" style="font-size:12px;"></span>
                        </div>
                        <div class="form-group">
                           <label class="info-title" for="password">Password </label>
                           <input type="password" class="form-control unicase-form-control text-input" id="password" name="password"  required >
                        </div>
                        <div class="form-group">
                           <label class="info-title" for="confirmpassword">Confirm Password </label>
                           <input type="password" class="form-control unicase-form-control text-input" id="confirmpassword" name="confirmpassword" required >
                        </div>
                        <button type="submit" name="submit" class="btn btn-secondary" id="submit">Sign Up</button>
                     </form>