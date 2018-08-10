@include('includes.header4')

        <div class="form-group row">
         <div class="col-md-6">
            <div class="card" style="margin-top: 50px;">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                       
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} bar" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                       
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} bar" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                       
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} bar" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                    
                                <input id="password-confirm" type="password" class="form-control bar" name="password_confirmation" required>
                            
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                       

                              <div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                              </div>  
                   </form>
                  </div>
              </div>
             </div>
            </div>
@include('includes.footer')
