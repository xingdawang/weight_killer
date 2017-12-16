@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        Update Today Weight
                    </div>
                </div>

                <div class="panel-body">
                        {!! Form::open(['url' => 'user/store-weight', 'class' => 'form-horizontal']) !!}
                        {{ csrf_field() }}

                        <!-- User weight -->
                        <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                            <label for="weight" class="col-md-4 control-label">Weight</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input id="weight" type="text" class="form-control" name="weight" autofocus>
                                    <span class="input-group-addon" id="weight-update">kg</span>
                                </div>
                                @if ($errors->has('weight'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('weight') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Weight added time -->
                        <div class="form-group{{ $errors->has('weight-time') ? ' has-error' : '' }}">
                            <label for="weight_added_time" class="col-md-4 control-label">Time</label>
                            <div class="col-md-6">
                                <div class='input-group date' id='today_weight'>
                                    <input type='text' class="form-control" name="weight_added_time" >
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-time"></span>
                                    </span>
                                </div>
                                @if ($errors->has('weight-time'))
                                    <br>
                                    <span class="help-block">
                                        <strong>{{ $errors->first('weight-time') }}</strong>
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