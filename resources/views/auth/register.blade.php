@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h3 class="mt-3 mb-3">新規会員登録</h3>

            <hr>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <label for="last_name" class="col-md-5 col-form-label text-md-left">氏名（性）<span class="ml-1 tabelog-require-input-label"><span class="tabelog-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror tabelog-login-input" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus placeholder="侍">

                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>氏名（性）を入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="first_name" class="col-md-5 col-form-label text-md-left">氏名（名）<span class="ml-1 tabelog-require-input-label"><span class="tabelog-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror tabelog-login-input" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus placeholder="太郎">

                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>氏名（名）を入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="postal_code" class="col-md-5 col-form-label text-md-left">郵便番号<span class="ml-1 tabelog-require-input-label"><span class="tabelog-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input type="text" class="form-control @error('postal_code') is-invalid @enderror tabelog-login-input" name="postal_code" required placeholder="150-0043">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="address_prefecture" class="col-md-5 col-form-label text-md-left">住所（都道府県）<span class="ml-1 tabelog-require-input-label"><span class="tabelog-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input type="text" class="form-control @error('address_prefecture') is-invalid @enderror tabelog-login-input" name="address_prefecture" required placeholder="東京都">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address_city" class="col-md-5 col-form-label text-md-left">住所（市区町村）<span class="ml-1 tabelog-require-input-label"><span class="tabelog-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input type="text" class="form-control @error('address_city') is-invalid @enderror tabelog-login-input" name="address_city" required placeholder="渋谷区">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address_street" class="col-md-5 col-form-label text-md-left">住所（番地・ビル名）<span class="ml-1 tabelog-require-input-label"><span class="tabelog-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input type="text" class="form-control @error('address_street') is-invalid @enderror tabelog-login-input" name="address_street" required placeholder="道玄坂２丁目１１−１">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone_number" class="col-md-5 col-form-label text-md-left">電話番号<span class="ml-1 tabelog-require-input-label"><span class="tabelog-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input type="text" class="form-control @error('phone_number') is-invalid @enderror tabelog-login-input" name="phone_number" required placeholder="03-5790-9039">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="birth_date" class="col-md-5 col-form-label text-md-left">生年月日<span class="ml-1 tabelog-require-input-label"><span class="tabelog-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input type="text" class="form-control @error('birth_date') is-invalid @enderror tabelog-login-input" name="birth_date" required placeholder="1995/10/13">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="occupation" class="col-md-5 col-form-label text-md-left">職業<span class="ml-1 tabelog-require-input-label"></span></label>

                    <div class="col-md-7">
                        <input type="text" class="form-control @error('occupation') is-invalid @enderror tabelog-login-input" name="occupation" placeholder="会社員">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-5 col-form-label text-md-left">メールアドレス<span class="ml-1 tabelog-require-input-label"><span class="tabelog-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror tabelog-login-input" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="samurai@samurai.com">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>メールアドレスを入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-5 col-form-label text-md-left">パスワード<span class="ml-1 tabelog-require-input-label"><span class="tabelog-require-input-label-text">必須</span></span><br><span class="tabelog-precaution-text">※8文字以上の大文字・小文字の英字と、数字を組み合わせて作成してください。</span></label>
                    <div class="col-md-7">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror tabelog-login-input" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-5 col-form-label text-md-left">パスワード確認用</label>

                    <div class="col-md-7">
                        <input id="password-confirm" type="password" class="form-control tabelog-login-input" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn tabelog-submit-button w-100">
                        アカウント作成
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection