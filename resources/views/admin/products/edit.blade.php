@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Product</div>

                <div class="panel-body">
                    <div class="row">
                        <form role="form" method="POST" action="{{ route('products.update', $product) }}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="col-md-6">

                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" value="{{ $product->translate('en')->title }}" placeholder="Title">

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="3">{{ $product->translate('en')->description }}</textarea>

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('value') ? ' has-error' : '' }}">
                                    <label for="value">Value</label>
                                    <input type="text" class="form-control" name="value" id="value" value="{{ $product->value }}" placeholder="Value">

                                    @if ($errors->has('value'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('value') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                    <label for="category_id">Category</label>
                                    
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option value="">Categories</option>
                                        @foreach ($categories as $category)
                                            @if($category->id == $product->category_id)
                                                <option value="{{ $category->id }}" selected="selected">{{ $category->name }}</option>
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                    @if ($errors->has('category_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('category_id') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title_fr">Title (fr)</label>
                                    <input type="text" class="form-control" name="title_fr" id="title_fr" value="{{ $product->translate('fr')->title }}" placeholder="Title">
                                </div>

                                <div class="form-group">
                                    <label for="description_fr">Description (fr)</label>
                                    <textarea class="form-control" name="description_fr" id="description_fr" rows="3">{{ $product->translate('fr')->description }}</textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
