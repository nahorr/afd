<div class="modal fade login-modal-main" id="login-modal">
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
                           <form method="POST" action="{{ route('login') }}">
                            @csrf
                              <div class="tab-pane active" id="login" role="tabpanel">
                                 <h5 class="heading-design-h5">Login to your account</h5>
                                 <fieldset class="form-group">
                                    <label>Email</label>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                   @if ($errors->has('email'))
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $errors->first('email') }}</strong>
                                       </span>
                                   @endif
                                 </fieldset>
                                 <fieldset class="form-group">
                                    <label>Enter Password</label>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                   @if ($errors->has('password'))
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $errors->first('password') }}</strong>
                                       </span>
                                   @endif
                                 </fieldset>

                                 <fieldset class="form-group">
                                    <button type="submit" class="btn btn-lg btn-secondary btn-block">Login to your account</button>
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                 </fieldset>

                                 <div class="login-with-sites">
                                    <p>or Login with your social profile:</p>
                                    <button class="btn-facebook login-icons btn-lg"><i class="mdi mdi-facebook"></i> Facebook</button>
                                    <button class="btn-google login-icons btn-lg"><i class="mdi mdi-google"></i> Google</button>
                                    <button class="btn-twitter login-icons btn-lg"><i class="mdi mdi-twitter"></i> Twitter</button>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                                 </div>
                              </div>
                           </form>
                           
                           </div>
                           <div class="clearfix"></div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>