@extends('layouts.app')

@section('content')
  <section class="hero-view">
    <h2 class="hero-msg">ひとりで悩まず</h2>
    <h2 class="hero-msg">相談してみませんか？</h2>
  </section>
  
  <index-component></index-component>

  <section class="btn-group d-flex col-6 mx-auto my-4 p-4" role="group">
    <button type="button" class="btn btn-info w-100">新着</button>
    <button type="button" class="btn btn-outline-info w-100">タグ</button>
  </section>
  
  <section class="container">
    <div class="row">
      <div class="col-lg-6 mb-4">
        <div class="card">
          <div class="card-body">
            <a href="" class="h5 card-title text-left">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</a>
            <p class="card-text text-left">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト...</p>
            <div class="text-left">
              <span class="badge badge-info">７歳</span>
              <span class="badge badge-info">ADHD</span>
            </div>
            <div class="text-secondary d-flex justify-content-between mt-3">
              <p class="a-count">回答 <span>20</span></p>
              <time>2020/6/30 13:00</time>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card">
          <div class="card-body">
            <a href="" class="h5 card-title text-left">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</a>
            <p class="card-text text-left">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト...</p>
            <div class="text-left">
              <span class="badge badge-info">７歳</span>
              <span class="badge badge-info">ADHD</span>
            </div>
            <div class="text-secondary d-flex justify-content-between mt-3">
              <p class="a-count">回答 <span>20</span></p>
              <time>2020/6/30 13:00</time>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card">
          <div class="card-body">
            <a href="" class="h5 card-title text-left">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</a>
            <p class="card-text text-left">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト...</p>
            <div class="text-left">
              <span class="badge badge-info">７歳</span>
              <span class="badge badge-info">ADHD</span>
            </div>
            <div class="text-secondary d-flex justify-content-between mt-3">
              <p class="a-count">回答 <span>20</span></p>
              <time>2020/6/30 13:00</time>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card">
          <div class="card-body">
            <a href="" class="h5 card-title text-left">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</a>
            <p class="card-text text-left">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト...</p>
            <div class="text-left">
              <span class="badge badge-info">７歳</span>
              <span class="badge badge-info">ADHD</span>
            </div>
            <div class="text-secondary d-flex justify-content-between mt-3">
              <p class="a-count">回答 <span>20</span></p>
              <time>2020/6/30 13:00</time>
            </div>
          </div>
        </div>
      </div>
  
    </div>
  </section>
@endsection
