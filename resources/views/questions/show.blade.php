@extends('layouts.app')

@section('content')
<div class="container-lg">
  <div class="col-lg-6 col-12 mx-auto my-4">
    <div class="card">
      <div class="card-body">
        <div class="text-secondary d-flex justify-content-between my-2">
          <div class="">
            @foreach ($tags as $tag)
            <span class="badge badge-info p-1">{{ $tag->name }}</span>
            @endforeach
          </div>

          @if(Auth::check())
            @if(Auth::user()->id === $question->user_id)
            <form action="{{ route('questions.edit', $question->id ) }}" method="GET">
              <input type="submit" class="btn btn-primary" value="編集">
            </form>
            @endif
          @endif

        </div>
        <h5 class="card-title text-left pt-3">{{ $question->title }}</h5>
        <p class="card-text text-left">
          {{ $question->detail }}
        <div class="text-secondary d-flex justify-content-between my-2">
          <time>{{ date('Y/m/d  G:i', strtotime($question->created_at)) }}</time>
          <p class="">{{ $ques_user->name }}</p>
        </div>
      </div>
    </div>
  </div>

<h5 class="py-3">回答{{ $count }}件</h5>

  <div class="col-lg-6 col-12 mx-auto my-4">
    @foreach($answers->answers as $answer)
    <div class="card mb-3">
      <div class="card-body">
        <div class="text-secondary d-flex justify-content-between my-2">
          <div class="ml-2 pt-1">
            <svg version="1.1" id="_x32_" class="heart" xmlns="http://www.w3.org/2000/svg"
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
            <span class="pl-2">30</span>
          </div>
          @if(Auth::check())
            @if(Auth::user()->id === $answer->user_id)
            <form action="{{ route('answers.delete', $answer->id) }}" method="GET">
              @csrf
              <input type="submit" class="btn btn-danger" value="削除" onclick="return confirm('本当に削除してよろしいですか？')">
            </form>
            @endif
          @endif
        </div>
        <p class="card-text text-left mt-4">
          {{ $answer->detail }}</p>

        <div class="text-secondary d-flex justify-content-between my-2">
          <time>{{ date('Y/m/d G:i', strtotime($answer->created_at)) }}</time>
          <p class="">{{ $answer->user->name }}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  @if(Auth::check())
  
  <h5 class="text-secondary py-3">回答する</h5>

  <form action="{{ route('answers.store', $question->id) }}" method="POST" class="col-lg-6 col-12 mx-auto my-3 d-block">
    @csrf

    <textarea name="answer" class="w-100 my-2 p-3 @error('answer') is-invalid @enderror" cols="30" rows="10" placeholder="入力してください">{{ old('answer') }}</textarea>

    @error('answer')
    <span class="text-danger d-block text-left mb-2">{{ $message }}</span>
    @enderror

    <input type="submit" class="btn btn-info d-block px-5 mx-auto my-4" value="登録"
      onclick="return confirm('この内容で登録してよろしいですか？')">
  </form>
  @endif

  <a href="" class="text-secondary mb-4">もどる</a>

</div>
@endsection
