@extends('layouts.app')

@section('title', 'お問合わせ')

@section('script')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script type="text/javascript">
  function onClick(e) {
    document.getElementById("contactform").submit();
  }

  function validateRecaptcha ( code ) {
    if ( !!code ) {
      var form = document.querySelector(".recaptcha");
      form.removeAttribute('disabled');
    }
  }
</script>
@endsection

@section('content')
  @error('token')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <form method="POST" id="contactform" action="/inquiry/confirm">
    @csrf
    <table class="table-form">
      <tr>
        <th>お名前</th>
        <td>
          <input type="text" name="name" value="{{ old('name') }}"/>
          @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>
          <input type="email" name="email" value="{{ old('email') }}"/>
          @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </td>
      </tr>
      <tr>
        <th>メッセージ</th>
        <td>
          <textarea name="message">{{ old('message') }}</textarea>
          @error('message')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </td>
      </tr>
    </table>
    <div class="button-area">
        <button type="button" class="back" onclick="javascript:window.history.back(-1);return    false;">戻る</button>
      <button type="button" class="go" onclick="onClick(event)" id="submit_btn">確認する</button>
    </div>
    <div class="g-recaptcha" data-callback="validateRecaptcha" data-sitekey="{{ config('no-captcha.sitekey') }}"></div>
  </form>
  {!! no_captcha()->script() !!}
@endsection
