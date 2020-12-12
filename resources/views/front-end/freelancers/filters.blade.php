<aside id="wt-sidebar" class="wt-sidebar wt-usersidebar">
    {!! Form::open(['url' => url('search-results'), 'method' => 'get', 'class' => 'wt-formtheme wt-formsearch', 'id' => 'wt-formsearch']) !!}
        <input type="hidden" value="{{$type}}" name="type">
        <div class="wt-widget wt-effectiveholder wt-startsearch">
            <div class="wt-widgettitle">
                <h2>{{ trans('lang.start_search') }}</h2>
            </div>
            <div class="wt-widgetcontent">
                <div class="wt-formtheme wt-formsearch">
                    <fieldset>
                        <div class="form-group">
                            <input type="text" name="s" class="form-control" placeholder="{{ trans('lang.ph_search_freelancer') }}" value="{{$keyword}}">
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="wt-widget wt-effectiveholder">
            <div class="wt-widgettitle">
                <h2>{{ trans('lang.skills') }}</h2>
            </div>
            <div class="wt-widgetcontent">
                <fieldset>
                    @if (!empty($skills))
                        <div class="wt-checkboxholder wt-verticalscrollbar">
                            @foreach ($skills as $key => $skill)
                                @php $checked = ( !empty($_GET['skills']) && in_array($skill->slug, $_GET['skills'])) ? 'checked' : '' @endphp
                                <span class="wt-checkbox">
                                    <input id="skill-{{{ $key }}}" type="checkbox" name="skills[]" value="{{{$skill->slug}}}" {{$checked}} >
                                    <label for="skill-{{{ $key }}}">{{{ $skill->title }}}</label>
                                </span>
                            @endforeach
                        </div>
                    @endif
                </fieldset>
            </div>
        </div>
        <div class="wt-widget wt-effectiveholder">
            <div class="wt-widgettitle">
                <h2>{{{ trans('lang.hourly_rate') }}}</h2>
            </div>
            <div class="wt-widgetcontent">
                <div class="wt-formtheme wt-formsearch">
                    <fieldset>
                        <div class="form-group">
                            <input type="text" class="form-control filter-records" placeholder="{{ trans('lang.ph_search_rate') }}">
                            <a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="wt-checkboxholder wt-verticalscrollbar">
                            @foreach (Helper::getHourlyRate() as $key => $hourly_rate)
                                @php $checked = ( !empty($_GET['hourly_rate']) && in_array($key, $_GET['hourly_rate'])) ? 'checked' : '' @endphp
                                <span class="wt-checkbox">
                                    <input id="rate-{{ $key }}" type="checkbox" name="hourly_rate[]" value="{{ $key }}" {{ $checked }}>
                                    <label for="rate-{{ $key }}">{{ $hourly_rate }}</label>
                                </span>
                            @endforeach
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        
        <div class="wt-widget wt-effectiveholder">
            <div class="wt-widgettitle">
                <h2>{{ trans('lang.freelancer_type') }}</h2>
            </div>
            <div class="wt-widgetcontent">
                <div class="wt-formtheme wt-formsearch">
                    <div class="wt-checkboxholder wt-verticalscrollbar">
                        @foreach (Helper::getFreelancerLevelList() as $key => $freelancer_level)
                        @php $checked = ( !empty($_GET['freelaner_type']) && in_array($key, $_GET['freelaner_type'])) ? 'checked' : '' @endphp
                            <span class="wt-checkbox">
                                <input id="rate-{{ $key }}" type="checkbox" name="freelaner_type[]" value="{{ $key }}" {{ $checked }}>
                                <label for="rate-{{ $key }}">{{ $freelancer_level }}</label>
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="wt-widget wt-effectiveholder">
            <div class="wt-widgetcontent">
                <div class="wt-applyfilters">
                    <span>{{ trans('lang.apply_filter') }}<br> {{ trans('lang.changes_by_you') }}</span>
                    {!! Form::submit(trans('lang.btn_apply_filters'), ['class' => 'wt-btn']) !!}
                </div>
            </div>
        </div>
    {!! form::close(); !!}
</aside>