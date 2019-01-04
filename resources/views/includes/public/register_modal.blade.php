<div class="modal fade login-modal-main" id="register-modal">
   <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-body">
            <div class="login-modal">
               <div class="row">
                  <div class="col-lg-6 pad-right-0">
                     <div class="login-modal-left">
                     </div>
                  </div>
                  <div class="col-lg-6 pad-left-0">
                     <button type="button" class="close close-top-right" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
                     <span class="sr-only">Close</span>
                     </button>
                        <div class="login-modal-right">  
                           <!-- Tab panes -->
                           <div class="tab-content">
                              <form method="POST" action="{{ route('register') }}">
                              @csrf
                                 <div class="tab-pane" id="register" role="tabpanel">
                                    <h5 class="heading-design-h5">Register Now!</h5>
                                    <fieldset class="form-group">
                                       <label>Full Name</label>
                                       <input type="text" class="form-control" placeholder="Enter your full name">
                                    </fieldset>
                                    <fieldset class="form-group">
                                       <label>Email</label>
                                       <input type="email" class="form-control" placeholder="email">
                                    </fieldset>
                                    <fieldset class="form-group">
                                       <label>Enter Password</label>
                                       <input type="password" class="form-control" placeholder="********">
                                    </fieldset>
                                    <fieldset class="form-group">
                                       <label>Enter Confirm Password </label>
                                       <input type="password" class="form-control" placeholder="********">
                                    </fieldset>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="customCheck2">
                                       <label class="custom-control-label" for="customCheck2">I Agree with <a href="#">Term and Conditions</a></label>
                                    </div>
                                    <fieldset class="form-group">
                                       <button type="submit" class="btn btn-lg btn-secondary btn-block">Create Your Account</button>
                                    </fieldset>  
                                 </div>
                              </form>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>