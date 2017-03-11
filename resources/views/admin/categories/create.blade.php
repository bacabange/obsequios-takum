@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Category</div>

                <div class="panel-body">
                    <div class="row">
                        <form role="form" method="POST" action="{{ route('categories.store') }}">
                            {{ csrf_field() }}
                            
                            <div class="col-md-6">

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name">Name (en)</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Name">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('name_fr') ? ' has-error' : '' }}">
                                    <label for="name_fr">Name (fr)</label>
                                    <input type="text" class="form-control" name="name_fr" id="name_fr" value="{{ old('name_fr') }}" placeholder="Name">

                                    @if ($errors->has('name_fr'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name_fr') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
