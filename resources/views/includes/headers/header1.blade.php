<!-- SignUp Modal -->
<div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="signUpTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{{ trans('lang.join_now') }}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="signUpForm" method="POST" enctype="multipart/form-data" class="wt-formtheme wt-loginform do-login-form">
                    @csrf
                    <fieldset>
                        <div class="form-group form-group-half">
                            <input id="first_name" type="text" name="first_name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                   placeholder="{{{ trans('lang.ph_first_name') }}}" required autofocus>
                            @if ($errors->has('first_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group form-group-half">
                            <input id="last_name" type="text" name="last_name" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                   placeholder="{{{ trans('lang.ph_last_name') }}}" required autofocus>
                            @if ($errors->has('last_name'))
                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('last_name') }}</strong>
                                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="email" type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   placeholder="{{{ trans('lang.ph_email') }}}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="phone" type="text" name="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                   placeholder="Phone" required autofocus>
                            @if ($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                    </span>
                            @endif
                        </div>
                        <fieldset class="wt-formregisterstart startAs">
                            <div class="wt-title wt-formtitle">
                                <h4>{{{ trans('lang.start_as') }}}</h4>
                            </div>
                            @php
                                $register_form = App\SiteManagement::getMetaValue('reg_form_settings');
                                $roles = Spatie\Permission\Models\Role::all()->toArray();
                                $show_emplyr_inn_sec = !empty($register_form) && !empty($register_form[0]['show_emplyr_inn_sec']) ? $register_form[0]['show_emplyr_inn_sec'] : 'true';
                            @endphp
                            @if(!empty($roles))
                                <ul class="wt-accordionhold wt-formaccordionhold accordion">
                                    @foreach ($roles as $key => $role)
                                        @if (!in_array($role['id'] == 1, $roles))
                                            <li>
                                                <div class="wt-accordiontitle" id="headingOne" data-toggle="collapse" data-target="#collapseOne">
                                                    <span class="wt-radio">
                                                    <input id="wt-company-{{$key}}" type="radio" name="role" value="{{{ $role['role_type'] }}}" {{($role['name'] === 'freelancer') ? '' : 'checked'}}>
                                                    <label for="wt-company-{{$key}}">
                                                        {{ $role['name'] === 'freelancer' ? trans('lang.freelancer') : trans('lang.employer')}}
                                                        <span>
                                                            ({{ $role['name'] === 'freelancer' ? trans('lang.signup_as_freelancer') : trans('lang.signup_as_country')}})
                                                        </span>
                                                    </label>
                                                    </span>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                        </fieldset>
                        <div class="wt-logininfo">
                            <button type="submit" id="signUpButton" class="wt-btn do-login-button">Register</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Get Started -->
<div class="modal fade" id="getStarted" tabindex="-1" role="dialog" aria-labelledby="signUpTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> Get Started</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="getStartedForm" method="POST" enctype="multipart/form-data" class="wt-formtheme wt-loginform do-login-form">
                    @csrf
                    <fieldset>
                        <div class="form-group form-group-half">
                            <input id="gs_first_name" type="text" name="gs_first_name" class="form-control{{ $errors->has('gs_first_name') ? ' is-invalid' : '' }}"
                                   placeholder="First Name" required autofocus>
                            @if ($errors->has('gs_first_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('gs_first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group form-group-half">
                            <input id="gs_last_name" type="text" name="gs_last_name" class="form-control{{ $errors->has('gs_last_name') ? ' is-invalid' : '' }}"
                                   placeholder="Last Name" required autofocus>
                            @if ($errors->has('gs_last_name'))
                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('gs_last_name') }}</strong>
                                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="email" type="email" name="gs_email" class="form-control{{ $errors->has('gs_email') ? ' is-invalid' : '' }}"
                                   placeholder="Email" required autofocus>
                            @if ($errors->has('gs_email'))
                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('gs_email') }}</strong>
                                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="gs_phone" type="text" name="gs_phone" class="form-control{{ $errors->has('gs_phone') ? ' is-invalid' : '' }}"
                                   placeholder="Phone" required autofocus>
                            @if ($errors->has('gs_phone'))
                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('gs_phone') }}</strong>
                                                    </span>
                            @endif
                        </div>


                        <div class="form-group">
                            

                                   <textarea placeholder="Message"  id="gs_message" type="text" name="gs_message" class="form-control{{ $errors->has('gs_message') ? ' is-invalid' : '' }}"
                                    required autofocus  cols="30" rows="10"> </textarea>
                            @if ($errors->has('gs_message'))
                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('gs_message') }}</strong>
                                                    </span>
                            @endif
                        </div>


                        <div class="wt-logininfo">
                            <button type="submit" id="getStartedButton" class="wt-btn do-login-button">Submit</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


<header id="wt-header" class="wt-header wt-haslayout wt-headervtwo">
    <div class="wt-navigationarea @if(request()->segment(1) === 'page') nav-1 @endif">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    @auth
                        {{ Helper::displayEmailWarning() }}
                    @endauth
                    @if (!empty($logo) || Schema::hasTable('site_managements'))
                        <strong class="wt-logo"><a href="{{{ url('/') }}}"><img src="{{{ asset($logo) }}}" alt="{{{ trans('Logo') }}}"></a></strong>
                    @endif
                    @if (!empty(Route::getCurrentRoute()) && Route::getCurrentRoute()->uri() != '/' && Route::getCurrentRoute()->uri() != 'home')
                        <search-form
                                :placeholder="'{{ trans('lang.looking_for') }}'"
                                :freelancer_placeholder="'{{ trans('lang.search_filter_list.freelancer') }}'"
                                :employer_placeholder="'{{ trans('lang.search_filter_list.employers') }}'"
                                :job_placeholder="'{{ trans('lang.search_filter_list.jobs') }}'"
                                :service_placeholder="'{{ trans('lang.search_filter_list.services') }}'"
                                :no_record_message="'{{ trans('lang.no_record') }}'"
                        >
                        </search-form>
                    @endif
                    <div class="wt-rightarea">
                        @if (file_exists(resource_path('views/extend/includes/menu.blade.php')))
                            @include('extend.includes.menu', ['page_order' => $page_order])
                        @else
                            @include('includes.menu', ['page_order' => $page_order])
                        @endif
                        @guest
                            <div class="wt-loginarea">
                                <div class="wt-loginoption">
                                    <a href="javascript:void(0);" id="wt-loginbtn" class="wt-loginbtn">{{{trans('lang.login') }}}</a>
                                    <div id="signIn" class="wt-loginformhold" @if ($errors->has('email') || $errors->has('password')) style="display: block;" @endif>
                                        <div class="wt-loginheader">
                                            <span>{{{ trans('lang.login') }}}</span>
                                            <a href="javascript:;"><i class="fa fa-times"></i></a>
                                        </div>
                                        <form method="POST" action="{{ route('login') }}" class="wt-formtheme wt-loginform do-login-form">
                                            @csrf
                                            <fieldset>
                                                <div class="form-group">
                                                    <input id="email" type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                           placeholder="Email" required autofocus>
                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <input id="password" type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                           placeholder="Password" required>
                                                    @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="wt-logininfo">
                                                    <button type="submit" class="wt-btn do-login-button">{{{ trans('lang.login') }}}</button>
                                                    <span class="wt-checkbox">
                                                        <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label for="remember">{{{ trans('lang.remember') }}}</label>
                                                    </span>
                                                </div>
                                            </fieldset>
                                            <div class="wt-loginfooterinfo">
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}" class="wt-forgot-password">{{{ trans('lang.forget_pass') }}}</a>
                                                @endif
                                                <a href="{{{ route('register') }}}">{{{ trans('lang.create_account') }}}</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" data-target="#signUp" data-toggle="modal" class="wt-btn">{{{ trans('lang.join_now') }}}</a>
                            </div>
                        @endguest
                        @auth
                            @php
                                $user = !empty(Auth::user()) ? Auth::user() : '';
                                $role = !empty($user) ? $user->getRoleNames()->first() : array();
                                $profile = \App\User::find(Auth::user()->id)->profile;
                                $user_image = !empty($profile) ? $profile->avater : '';
                                $employer_job = \App\Job::select('status')->where('user_id', Auth::user()->id)->first();
                                $profile_image = !empty($user_image) ? '/uploads/users/'.$user->id.'/'.$user_image : 'images/user-login.png';
                                $payment_settings = \App\SiteManagement::getMetaValue('commision');
                                $payment_module = !empty($payment_settings) && !empty($payment_settings[0]['enable_packages']) ? $payment_settings[0]['enable_packages'] : 'true';
                                $employer_payment_module = !empty($payment_settings) && !empty($payment_settings[0]['employer_package']) ? $payment_settings[0]['employer_package'] : 'true';
                            @endphp
                            <div class="wt-userlogedin">
                                <figure class="wt-userimg">
                                    <img src="{{{ asset(Helper::getImage('uploads/users/' . Auth::user()->id, $profile->avater, '' , 'user.jpg')) }}}" alt="{{{ trans('lang.user_avatar') }}}">
                                </figure>
                                <div class="wt-username">
                                    <h3>{{{ Helper::getUserName(Auth::user()->id) }}}</h3>
                                    <span>{{{ !empty(Auth::user()->profile->tagline) ? str_limit(Auth::user()->profile->tagline, 26, '') : Helper::getAuthRoleName() }}}</span>
                                </div>
                                @if (file_exists(resource_path('views/extend/back-end/includes/profile-menu.blade.php')))
                                    @include('extend.back-end.includes.profile-menu', ['styling' => $page_header_styling])
                                @else
                                    @include('back-end.includes.profile-menu', ['styling' => $page_header_styling])
                                @endif
                            </div>
                        @endauth
                        @if (!empty(Route::getCurrentRoute()) && Route::getCurrentRoute()->uri() != '/' && Route::getCurrentRoute()->uri() != 'home')
                            <div class="wt-respsonsive-search"><a href="javascript:;" class="wt-searchbtn"><i class="fa fa-search"></i></a></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>