@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Categories</div>

                <div class="panel-body">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary">
                        New
                    </a>

                    <br>
                    <br>

                    @include('layouts.partials.notifications')
                </div>

                @if (count($categories) > 0)
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($categories as $categoria)
                                <tr>
                                    <td>{{ $categoria->name }}</td>
                                    <td>
                                        <a href="#" class="btn btn-xs btn-success">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

                <div class="panel-footer">
                    {{ $categories->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
