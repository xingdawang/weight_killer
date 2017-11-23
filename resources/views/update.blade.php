@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update</div>

                <div class="panel-body">
                        {!! Form::open(['url' => 'user/update', 'class' => 'form-horizontal']) !!}
                        {{ csrf_field() }}

                        <!-- User height -->
                        <div class="form-group{{ $errors->has('height') ? ' has-error' : '' }}">
                            <label for="height" class="col-md-4 control-label">Height</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <input id="height" type="text" class="form-control" name="height" value="{!! $current_user_height !!}" autofocus>
                                    <span class="input-group-addon" id="height-addon1">cm</span>
                                    @if ($errors->has('height'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('height') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- User birth date -->
                        <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                            <label for="birthdate" class="col-md-4 control-label">Birth Date</label>
                            <div class="col-md-6">
                                <div class='input-group date' id='user_birthdate'>
                                    <input id="birthdate" type='text' class="form-control" name="birthdate" value={!! $current_user_birthdate !!}>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    @if ($errors->has('birthdate'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('birthdate') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- User sex -->
                        <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                            <label for="sex" class="col-md-4 control-label">Sex</label>

                            <div class="col-md-6">
                                <select  id="sex" class="form-control" name="sex">
                                    <option> </option>
                                    <option @if( $current_user_sex === "Male") selected="selected" @endif >Male</option>
                                    <option @if( $current_user_sex === "Female") selected="selected" @endif >Female</option>
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
                                    Update
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
