<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chiron+Sung+HK:ital,wght@0,200..900;1,200..900&family=Lora:ital,wght@0,400..700;1,400..700&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chiron+Sung+HK:ital,wght@0,200..900;1,200..900&family=IBM+Plex+Sans+JP&family=Lora:ital,wght@0,400..700;1,400..700&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>

<body>
  <main>
    @extends('layouts.app')

    @section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    @endsection

    @section('content')

    <div class="contact-form__content">
      <div class="contact-form__heading">
        <a class="contact-form__heading" href="/">
          Contact
        </a>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-content">
              <label for="name">お名前</label>
              <label for="required"><font color="#ff0000">※</font></label>
              <input type="text" name="first_name"placeholder="例:山田" value="{{ old('first_name') }}" required/>
              <input type="text" name="last_name" placeholder="例:太郎" value="{{ old('last_name') }}" required/>
          </div>
            <div class="form__error">
              @error('name')
              {{ $message }}
              @enderror
            </div>
        </div>
        <div class="form__group">
          <div class="form__group-content">
            <div class="form__input--checkbox">
              <label for="name">性別</label>
              <label for="required"><font color="#ff0000">※</font></label>
              <input type="radio" name="gender" value="male" value="{{ old('gender') }}" required /> 男性
              <input type="radio" name="gender" value="female" value="{{ old('gender') }}" required /> 女性
              <input type="radio" name="gender" value="other" value="{{ old('gender') }}" required /> その他
            </div>
            <div class="form__error">
              @error('gender')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-content">
            <div class="form__input--text">
              <label for="name">メールアドレス</label>
              <label for="required"><font color="#ff0000">※</font></label>
              <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" required />
            </div>
            <div class="form__error">
              @error('email')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-content">
              <label for="name">電話番号</label>
              <label for="required"><font color="#ff0000">※</font></label>
              <input type="tel1" name="tel1" placeholder="080" value="{{ old('tel1') }}" required />
              -
              <input type="tel2" name="tel2" placeholder="1234" value="{{ old('tel2') }}" required />
              -
              <input type="tel3" name="tel3" placeholder="5678" value="{{ old('tel3') }}" required />
            <div class="form__error">
              @error('tel')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-content">
            <div class="form__input--text">
              <label for="name">住所</label>
              <label for="required"><font color="#ff0000">※</font></label>
              <input type="address" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" required />
            </div>
            <div class="form__error">
              @error('address')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-content">
            <div class="form__input--text">
              <label for="name">建物名</label>
              <input type="building" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
            </div>
            <div class="form__error">
              @error('building')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-content">
            <div class="form__input--select">
              <label for="name">お問い合わせの種類</label>
              <label for="required"><font color="#ff0000">※</font></label>
              <select name="select" value="{{ old('select') }}" required>
                <option value="" disabled selected style="display:none;" >
                  選択してください
                </option>
                <option>商品のお届けについて</option>
                <option>商品の交換について</option>
                <option>商品トラブル</option>
                <option>ショップへのお問い合わせ</option>
                <option>その他</option>
              </select>
            </div>
            <div class="form__error">
              @error('select')
              {{ $message }}
              @enderror
            </div>
            </div>
          </div>
        </div>
          <div class="form__group">
            <div class="form__group-content">
              <div class="form__input--text">
                <label for="name">お問い合わせ内容</label>
                <label for="required"><font color="#ff0000">※</font></label>
                <textarea name="content" placeholder="お問い合わせ内容をご記載ください" value="{{ old('content') }}" required></textarea>
                <div class="form__error">
                  @error('content')
                  {{ $message }}
                  @enderror
                </div>
              </div>
            </div>
          </div>
          <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
          </div>
      </form>
    </div>
    @endsection
  </main>
</body>

</html>
