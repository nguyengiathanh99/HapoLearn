<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="hapo-form d-flex justify-content-center align-items-center" >
                    <div class="hapo-form-main hapo-login">
                        <div class="form-header">
                            <div class="row flex-row-reverse">
                                <div
                                    class="col-md-6 col-sm-6 col-6 form-header-content form-header-content-login header-reg">
                                    REGISTER
                                </div>
                                <div
                                    class="col-md-6 col-sm-6 col-6 form-header-content form-header-content-reg header-login">
                                    LOGIN
                                </div>
                            </div>
                            <div class="form-header-xmark close-icon">
                                <i class="fas fa-times" data-dismiss="modal"></i>
                            </div>
                        </div>
                        <div class="form-content">
                            <div class="container">
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    @if(session()->has('success'))
                                        <div class="alert alert-success reg-success" id="message">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="username">Username:</label>
                                        <input type="text" class="form-control @error('username') is-invalid form-login @enderror" id="username" name="username">
                                        @if ($errors->has('username'))
                                            <p class="text-danger">{{ $errors->first('username') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input type="password" class="form-control @error('password_log') is-invalid form-login @enderror" id="password" name="password_log">
                                        @if ($errors->has('password_log'))
                                            <p class="text-danger">{{ $errors->first('password_log') }}</p>
                                        @endif
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="form-check mb-2 mr-sm-2">
                                            <input class="form-check-input" type="checkbox" id="remember-me">
                                            <label class="form-check-label" for="remember-me">
                                                Remember me
                                            </label>
                                        </div>
                                        <a href="#" class="forgot-psw">Forgot password</a>
                                    </div>
                                    <button type="submit" class="btn-submit">LOGIN</button>
                                </form>
                            </div>
                            <p class="login-diff"><span>Login with</span></p>
                            <div class="container login-social">
                                <div class="login-google">
                                    <a href="#" class="login-special"><i
                                            class="fab fa-google-plus-g login-icon"></i>Google</a>
                                </div>
                                <div class="login-facebook">
                                    <a href="#" class="login-special"><i
                                            class="fab fa-facebook-f login-icon"></i>Facebook</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hapo-form d-flex justify-content-center align-items-center ">
                    <div class="hapo-form-main hapo-reg">
                        <div class="form-header">
                            <div class="row">
                                <div
                                    class="col-md-6 col-sm-6 col-6 form-header-content form-header-content-login header-login">
                                    LOGIN
                                </div>
                                <div
                                    class="col-md-6 col-sm-6 col-6 form-header-content form-header-content-reg header-reg">
                                    REGISTER
                                </div>
                            </div>
                            <div class="form-header-xmark close-icon">
                                <i class="fas fa-times" data-dismiss="modal"></i>
                            </div>
                        </div>
                        <div class="form-content">
                            <div class="container">
                                <form action="{{ route('register') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="username">Username:</label>
                                        <input type="text" class="form-control @error('name') is-invalid form-reg @enderror" id="username" name="name">
                                        @if ($errors->has('name'))
                                            <p class="text-danger">{{ $errors->first('name') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control @error('email') is-invalid form-reg @enderror" id="email" name="email">
                                        @if ($errors->has('email'))
                                            <p class="text-danger">{{ $errors->first('email') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                                        @if ($errors->has('password'))
                                            <p class="text-danger">{{ $errors->first('password') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm-password">Repeat Password:</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="confirm-password" name="password_confirmation">
                                        @if ($errors->has('password_confirmation'))
                                            <p class="text-danger">{{ $errors->first('password_confirmation') }}</p>
                                        @endif
                                    </div>
                                    <button type="submit" id="btn-reg" class="btn-submit">REGISTER</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
