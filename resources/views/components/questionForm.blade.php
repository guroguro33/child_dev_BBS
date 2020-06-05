<section class="col-sm-12 col-md-6 m-auto">

  @if(empty($question))
  <h2 class="my-5">質問投稿</h2>
  @else
  <h2 class="my-5">質問編集</h2>
  @endif

  @if(empty($question))
  <form action="{{ route('questions.store') }}" method="post" class="text-left">
  @else
  <form action="{{ route('questions.update', $question->id) }}" method="post" class="text-left">
  @endif

    @csrf
      <label for="title" class="h5 py-2 fw-normal d-block">タイトル</label>
      <input type="text" class="w-100 p-2 mb-2 @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title', !empty($question)? $question->title : "") }}" placeholder="タイトルを入力">
      @error('title')
      <span class="text-danger d-block mb-2">{{ $message }}</span>
      @enderror
      
      <label for="detail" class="h5 py-2 fw-normal d-block">内容</label>
      <textarea class="w-100 p-2 mb-2 @error('detail') is-invalid @enderror" cols="30" rows="10" name="detail" id="detail" placeholder="内容を入力">{{ old('detail', !empty($question)? $question->detail : "") }}</textarea>
      @error('detail')
      <span class="text-danger d-block mb-2">{{ $message }}</span>
      @enderror

      <label for="tag1" class="h5 py-2 fw-normal d-block">タグ（２つまで）</label>
      <input type="text" name="tag1" id="tag1" class="w-100 mb-2 p-2 @error('tag1') is-invalid @enderror" value="{{ old('tag1', !empty($tags[0])? $tags[0]->name : "") }}" placeholder="タグ名を入力">
      @error('tag1')
      <span class="text-danger d-block mb-4">{{ $message }}</span>
      @enderror
      
      <input type="text" name="tag2" id="tag2" class="w-100 mb-2 p-2 @error('tag2') is-invalid @enderror" value="{{ old('tag2', !empty($tags[1])? $tags[1]->name : "") }}" placeholder="タグ名を入力">
      @error('tag2')
      <span class="text-danger d-block mb-4">{{ $message }}</span>
      @enderror
  
      <input type="submit" class="btn btn-info d-block px-5 mx-auto my-5" value="登録"
      onclick="return confirm('この内容で登録してよろしいですか？')">

  </form>
  
  @if(!empty($question))
  <form action="{{ route('questions.delete', $question->id) }}" method="GET">
    <input type="submit" class="btn btn-danger d-block px-5 mx-auto my-5" value="削除"
      onclick="return confirm('本当に削除してよろしいですか？')">
    </form>
  @endif


  <a href="{{ URL::previous() }}" class="text-secondary mb-4">&lt; もどる</a>
</section>