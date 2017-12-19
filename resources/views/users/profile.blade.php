@extends('layouts.app')

@section('content')
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                @lang('profile.update')
            </div>
        </div>

        <div class="panel-body">
            {!! Form::open(['url' => 'user/update', 'class' => 'form-horizontal']) !!}
            {{ csrf_field() }}

            <!-- User name -->
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">@lang('profile.name')</label>
                <div class="col-md-6">
                    <div class="input-group" style="width: 100%;">
                        <input id="name" class="form-control" style="border-radius:5px" type="text"  name="name" value="{!! $current_user_name !!}" placeholder="@lang('profile.example_name')" autofocus>
                    </div>
                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <!-- User height -->
            <div class="form-group{{ $errors->has('height') ? ' has-error' : '' }}">
                <label for="height" class="col-md-4 control-label">@lang('profile.height')</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <input id="height" type="text" class="form-control" name="height" value="{!! $current_user_height !!}" placeholder="@lang('profile.example_height')">
                        <span class="input-group-addon" id="height-addon1">@lang('profile.cm')</span>
                    </div>
                    @if ($errors->has('height'))
                    <span class="help-block">
                        <strong>{{ $errors->first('height') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <!-- User birth date -->
            <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                <label for="birthdate" class="col-md-4 control-label">@lang('profile.birthday')</label>
                <div class="col-md-6">
                    <div class='input-group date' id='user_birthdate'>
                        <input id="birthdate" type='text' class="form-control" name="birthdate" value="{!! $current_user_birthdate !!}" placeholder="YYYY-MM-DD" >
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                    @if ($errors->has('birthdate'))
                    <br>
                    <span class="help-block">
                        <strong>{{ $errors->first('birthdate') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <!-- User sex -->
            <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                <label for="sex" class="col-md-4 control-label">@lang('profile.sex')</label>
                <div class="col-md-6">
                    <select id="sex" class="form-control" name="sex" @if( $current_user_sex !== NULL ) disabled @endif >
                        <option> </option>
                        <option value="Male" @if( $current_user_sex === "Male") selected="selected" @endif >@lang('profile.male')</option>
                        <option value="Female" @if( $current_user_sex === "Female") selected="selected" @endif >@lang('profile.female')</option>
                    </select>

                    @if ($errors->has('sex'))
                    <span class="help-block">
                        <strong>{{ $errors->first('sex') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <!-- Submit button -->
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        @lang('profile.submit')
                    </button>
                </div>
            </div>
            {!! Form::close() !!}
            <!-- </form> -->
        </div>
    </div>
</div>
@endsection
