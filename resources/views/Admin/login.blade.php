@extends('Admin.main')

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{ route('login.post') }}" method="post">

                            {{ csrf_field() }}

                                <div class="form-group">
                                    <label> User Name </label>
                                    <input class="au-input au-input--full" type="text" name="login_username" placeholder="login_username">

                                    @if ($errors->has('login_username'))
                                    <span class="text-danger">{{ $errors->first('login_username') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="login_password" placeholder="login_password">

                                    @if ($errors->has('login_password'))
                                    <span class="error">{{ $errors->first('login_password') }}</span>
                                    @endif 
                                </div>
                                
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                    </div>
                                </div>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="{{URL::to('/aregistration')}}">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

    @yield('mainContent')