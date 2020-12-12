<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{{ trans('lang.join_now') }}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}" class="wt-formtheme wt-loginform do-login-form">
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
                        <div class="form-group">
                            <input id="company" type="company" name="company" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}"
                                   placeholder="Company" required>
                            @if ($errors->has('company'))
                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('company') }}</strong>
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
                                $employees = Helper::getEmployeesList();
                                $departments = App\Department::all();
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
                                                @if ($role['role_type'] === 'employer')
                                                    @if ($show_emplyr_inn_sec === 'true')
                                                        <div class="wt-accordiondetails collapse show" id="collapseOne" aria-labelledby="headingOne">
                                                            <div class="wt-radioboxholder">
                                                                <div class="wt-title">
                                                                    <h4>{{{ trans('lang.no_of_employees') }}}</h4>
                                                                </div>
                                                                @foreach ($employees as $key => $employee)
                                                                    <span class="wt-radio">
                                                                                        <input id="wt-just-{{{$key}}}" type="radio" name="employees" value="{{{$employee['value']}}}" checked="">
                                                                                        <label for="wt-just-{{{$key}}}">{{{$employee['title']}}}</label>
                                                                                    </span>
                                                                @endforeach
                                                            </div>
                                                            @if ($departments->count() > 0)
                                                                <div class="wt-radioboxholder">
                                                                    <div class="wt-title">
                                                                        <h4>{{{ trans('lang.your_department') }}}</h4>
                                                                    </div>
                                                                    @foreach ($departments as $key => $department)
                                                                        <span class="wt-radio">
                                                                                            <input id="wt-department-{{{$department->id}}}" type="radio" name="department" value="{{{$department->id}}}" checked="">
                                                                                            <label for="wt-department-{{{$department->id}}}">{{{$department->title}}}</label>
                                                                                        </span>
                                                                    @endforeach
                                                                </div>
                                                                <div class="form-group wt-othersearch d-none">
                                                                    <input type="text" name="department_name" class="form-control" placeholder="{{{ trans('lang.enter_department') }}}">
                                                                </div>
                                                            @endif
                                                        </div>
                                                    @endif
                                                @endif
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                        </fieldset>
                        <div class="wt-logininfo">
                            <button type="submit" class="wt-btn do-login-button">Register</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<header id="wt-header" class="wt-header wt-haslayout wt-headervtwo">
    <div class="wt-navigationarea">
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
                                <a href="javascript:void(0);" data-target="#exampleModalCenter" data-toggle="modal" class="wt-btn">{{{ trans('lang.join_now') }}}</a>
                                <div id="joinNow" class="wt-loginformhold" @if ($errors->has('email') || $errors->has('password')) style="display: block;" @endif>
                                    <div class="wt-registerheader">
                                        <span>{{{ trans('lang.join_now') }}}</span>
                                        <a href="javascript:;"><i class="fa fa-times"></i></a>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}" class="wt-formtheme wt-loginform do-login-form">
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
                                            <div class="form-group">
                                                <input id="company" type="company" name="company" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}"
                                                       placeholder="Company" required>
                                                @if ($errors->has('company'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('company') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <fieldset class="wt-formregisterstart">
                                                <div class="wt-title wt-formtitle">
                                                    <h4>{{{ trans('lang.start_as') }}}</h4>
                                                </div>
                                                @php
                                                    $register_form = App\SiteManagement::getMetaValue('reg_form_settings');
                                                    $roles = Spatie\Permission\Models\Role::all()->toArray();
                                                    $employees = Helper::getEmployeesList();
                                                    $departments = App\Department::all();
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
                                                                    @if ($role['role_type'] === 'employer')
                                                                        @if ($show_emplyr_inn_sec === 'true')
                                                                            <div class="wt-accordiondetails collapse show" id="collapseOne" aria-labelledby="headingOne">
                                                                                <div class="wt-radioboxholder">
                                                                                    <div class="wt-title">
                                                                                        <h4>{{{ trans('lang.no_of_employees') }}}</h4>
                                                                                    </div>
                                                                                    @foreach ($employees as $key => $employee)
                                                                                        <span class="wt-radio">
                                                                                        <input id="wt-just-{{{$key}}}" type="radio" name="employees" value="{{{$employee['value']}}}" checked="">
                                                                                        <label for="wt-just-{{{$key}}}">{{{$employee['title']}}}</label>
                                                                                    </span>
                                                                                    @endforeach
                                                                                </div>
                                                                                @if ($departments->count() > 0)
                                                                                    <div class="wt-radioboxholder">
                                                                                        <div class="wt-title">
                                                                                            <h4>{{{ trans('lang.your_department') }}}</h4>
                                                                                        </div>
                                                                                        @foreach ($departments as $key => $department)
                                                                                            <span class="wt-radio">
                                                                                            <input id="wt-department-{{{$department->id}}}" type="radio" name="department" value="{{{$department->id}}}" checked="">
                                                                                            <label for="wt-department-{{{$department->id}}}">{{{$department->title}}}</label>
                                                                                        </span>
                                                                                        @endforeach
                                                                                    </div>
                                                                                    <div class="form-group wt-othersearch d-none">
                                                                                        <input type="text" name="department_name" class="form-control" placeholder="{{{ trans('lang.enter_department') }}}">
                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                        @endif
                                                                    @endif
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </fieldset>
                                            <div class="wt-logininfo">
                                                <button type="submit" class="wt-btn do-login-button">Register</button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
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