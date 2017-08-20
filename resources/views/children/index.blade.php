@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Select a Profile</div>

                <div class="panel-body">
                    @foreach ($children as $child)
                        <article>
                            <h4>
                                <a href="{{ $child->path() }}">
                                    {{ $child->alias }}
                                </a>
                            </h4>
                            <div class="body">Active 12 minutes ago</div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
