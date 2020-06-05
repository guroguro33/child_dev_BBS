@extends('layouts.app')

@section('content')
<div class="container-lg">

  @component('components.questionForm')
    @slot('question', $question)
    @slot('tags', $tags)
  @endcomponent

</div>
@endsection
