@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $child->alias }}</div>

                <div class="panel-body">
                    <div class="links">
                        <a href="{{ $child->path() }}/flash-cards">
                            Flash Cards
                        </a>
                        <a href="#">
                            Add Flash Cards
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
