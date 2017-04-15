@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach ($questions as $question)
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $question->body }}
                </div>
                <div class="panel-body">
                    <ul>
                        @foreach ($question->answers as $answer)
                            <li>{{ $answer->body}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
