@extends('layouts.app')

@section('title', 'お問合わせ送信完了')

@section('content')
  <p>お問合わせは正常に送信されました。<br />ありがとうございました。</p>
  <form action="{{ route('index') }}">
      <div class="button-area">
          <button type="submit" class="go">
              HOME
          </button>
      </div>
  </form>
@endsection

