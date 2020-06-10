@extends('layouts.app')

@section('content')
<div class="container-lg">
  <div class="col-lg-6 col-12 mx-auto my-4">
    <div class="card">
      <div class="card-body">
        <div class="text-secondary d-flex justify-content-between my-2">
          <div class="">
            @foreach ($tags as $tag)
            <span class="badge badge-info p-2">{{ $tag->name }}</span>
            @endforeach
          </div>

          @auth
            @if($user->id == $question->user_id)
            <form action="{{ route('questions.edit', $question->id ) }}" method="GET">
              <input type="submit" class="btn btn-primary" value="編集">
            </form>
            @else
            <span>error</span>
            @endif
          @endauth

        </div>
        <h5 class="card-title text-left pt-3">{{ $question->title }}</h5>
        <p class="card-text text-left">
          {!! nl2br(e($question->detail)) !!}
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

          @auth
          <likes-component :answer="{{$answer}}" login-flg="{{true}}" user-id="{{$user->id}}"></likes-component>
          @else
          <likes-component :answer="{{$answer}}" login-flg="{{false}}" user-id=""></likes-component>
          @endauth

          @auth
            @if($user->id === $answer->user_id)
            <form action="{{ route('answers.delete', $answer->id) }}" method="GET">
              @csrf
              <input type="submit" class="btn btn-danger" value="削除" onclick="return confirm('本当に削除してよろしいですか？')">
            </form>
            @endif
          @endauth

        </div>
        <p class="card-text text-left mt-4">
          {!! nl2br(e($answer->detail)) !!}</p>

        <div class="text-secondary d-flex justify-content-between my-2">
          <time>{{ date('Y/m/d G:i', strtotime($answer->created_at)) }}</time>
          <p class="">{{ $answer->user->name }}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  @auth
  
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
  @endauth

  <a href="" class="text-secondary mb-4">もどる</a>

</div>
@endsection
