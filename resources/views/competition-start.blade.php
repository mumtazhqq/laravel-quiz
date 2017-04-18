@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="/app/blog/public/challange" method="post">
                {{ csrf_field() }}
                @foreach ($questions as $question)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $question->body }}
                    </div>
                    <div class="panel-body">
                        <ul>
                            @foreach ($question->answers as $answer)
                                <input name="question-{{ $question->id }}" value="{{ $answer->body }}" type="radio" id="{{ $answer->id }}">
                                <label for="{{ $answer->id }}">{{ $answer->body }}</label><br>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
                <div class="container">
                    <p class="text-center">
                        <input type="submit" name="submit" value="Zapisz" class="btn btn-primary btn-lg">
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
