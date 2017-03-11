@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Category</div>

                <div class="panel-body">
                    <div class="row">
                        <form role="form" method="POST" action="{{ route('categories.update', $category) }}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            
                            <div class="col-md-6">

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name">Name (en)</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $category->translate('en')->name }}" placeholder="Name">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name_fr">Name (fr)</label>
                                    <input type="text" class="form-control" name="name_fr" id="name_fr" value="{{ $category->translate('fr')->name }}" placeholder="Name">
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
