@extends('layouts.app')

@section('content')
<div class="container-lg">

  <section class="p-5">
    <h5 class="text-secondary">
        ようこそ！ <span class="">{{ $user->name }}</span>様
    </h5>
  </section>

  <section class="container mb-4">
    <h6 class="text-secondary mb-3">自分の質問</h6>
    <div class="row">

      @foreach ($user->questions as $question)
      <div class="col-lg-6 mb-4">
        <div class="card">
          <div class="card-body">
            <a href="{{ route('questions.show', $question->id ) }}" class="h5 card-title text-left">{{ $question->title }}</a>
            <p class="card-text text-left">{{ mb_strimwidth($question->detail, 0, 120, "...") }}</p>
            <div class="text-left">
              @foreach ($question->tags as $tag)
              <span class="badge badge-info p-2">{{ $tag->name }}</span>
              @endforeach
            </div>
            <div class="text-secondary d-flex justify-content-between mt-3">
            <p class="a-count">回答 <span>{{ $answers->where('question_id', $question->id)->count() }}</span></p>
              <time>{{ date("Y/m/d  G:i"  , strtotime($question->updated_at)) }}</time>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </section>

  <section class="container mb-4">
  <h6 class="text-secondary mb-3">自分の回答</h6>
  <div class="row">
    
    @foreach ($user->answers as $answer)
    <div class="col-lg-6 mb-4">
      <div class="card">
          <div class="card-body">
          <div class="text-secondary d-flex justify-content-between my-2">
            <div class="ml-2 pt-1">
              <svg version="1.1" id="_x32_" class="@if(!empty($answer->likes->count()))heart @endif" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" fill="#4B4B4B"
                  style="width: 30px; height: 30px; opacity: 1;" xml:space="preserve">
                <g>
                <path class="st0"
                    d="M456.795,27.9c-74.557-59.281-178.762-17.77-200.801,65.114C233.954,10.13,129.758-31.381,55.202,27.9
                            c-71.446,56.823-65.676,169.955,4.27,260.67c64.627,83.824,165.602,164.591,192.814,220.66c1.077,2.236,3.506,2.77,3.709,2.77
                            c0.211,0,2.641-0.534,3.727-2.77c27.192-56.069,128.168-136.836,192.804-220.66C522.48,197.856,528.24,84.723,456.795,27.9z">
                </path>
                </g>
              </svg>
              <span class="pl-2">{{ $answer->likes->count() }}</span>
            </div>
          </div>
          <a href="{{ route('questions.show', $answer->question_id) }}" class="card-text d-block text-left mt-4">
              {!! nl2br(e(mb_strimwidth($answer->detail,0 ,120, "..."))) !!}</a>

          <div class="text-secondary d-flex justify-content-between my-2">
            <time>{{ date('Y/m/d  G:i', strtotime($answer->created_at)) }}</time>
            <p class="">{{ $answer->user->name }}</p>
          </div>
        </div>
      </div>
    </div>
    @endforeach

  </div>
  </section>

  <a href="" class="text-secondary mb-4">&lt; もどる</a>

</div>
@endsection
