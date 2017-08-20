@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">{{ $child->alias }}</div>

                <div class="panel-body">
                    <div class="row">
                        @foreach ($flashCards as $flashCard)
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="..." alt="...">

                                    <div class="caption">
                                        <h3 class="text-center">Image here</h3>

                                        <p>...</p>

                                        <p class="text-center">{{ $flashCard->title }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
