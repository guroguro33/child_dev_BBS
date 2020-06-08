@extends('layouts.app')

@section('content')
  <section class="hero-view">
    <h2 class="hero-msg">ひとりで悩まず</h2>
    <h2 class="hero-msg">相談してみませんか？</h2>
  </section>

  <router-view :questions="{{$questions}}" :tags="{{$tags}}"></router-view>


@endsection
