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
                                       <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                      @if ($errors->has('name'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('name') }}</strong>
                                          </span>
                                      @endif
                                    </fieldset>
                                    <fieldset class="form-group">
                                       <label>Email</label>
                                       <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                      @if ($errors->has('email'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                    </fieldset>
                                    <fieldset class="form-group">
                                       <label>Password</label>
                                       <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                      @if ($errors->has('password'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                      @endif
                                    </fieldset>
                                    <fieldset class="form-group">
                                       <label>Confirm Password </label>
                                       <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </fieldset>
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="customCheck2">
                                       <label class="custom-control-label" for="customCheck2">I Agree with <a href="#">Term and Conditions(<span style="color: red;">please read</span>)</a></label>
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