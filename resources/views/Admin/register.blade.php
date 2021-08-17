@extends('Admin.main')

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                       
                        <div class="login-form">
                            <form action="{{ route('register.postadmin') }}" method="post">

                            @csrf

                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input class="au-input au-input--full" type="text" name="admin_name" placeholder="admin_name">

                                    @if ($errors->has('admin_name'))
                                    <span class="error">{{ $errors->first('admin_name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input class="au-input au-input--full" type="text" name="admin_mobile" placeholder="admin_mobile">
                                    @if ($errors->has('admin_mobile'))
                                    <span class="error">{{ $errors->first('admin_mobile') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="admin_email" placeholder="admin_email">

                                    @if ($errors->has('admin_email'))
                                    <span class="error">{{ $errors->first('admin_email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="au-input au-input--full" type="text" name="admin_address" placeholder="admin_address">

                                    @if ($errors->has('admin_address'))
                                    <span class="error">{{ $errors->first('admin_address') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>User Name</label>
                                    <input class="au-input au-input--full" type="text" name="login_username" placeholder="login_username">

                                    @if ($errors->has('login_username'))
                                    <span class="error">{{ $errors->first('login_username') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="login_password" placeholder="login_password">

                                   @if ($errors->has('login_password'))
                                   <span class="error">{{ $errors->first('login_password') }}</span>
                                   @endif 
                                   </div>
                            

                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                                
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="{{URL::to('/alogin')}}">Sign In</a>
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