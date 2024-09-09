@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact__title">
    <h2>Contact</h2>
</div>
<form action="/confirm" method="post">
@csrf
    <table>
        <div class="form">
            <div class="contact__form">
                <tr>
                    <th>
                        <div>
                            <p class="required">お名前</p>
                        </div>
                    </th>
                    <td>
                        <div class="name">
                            <div class="name_first">
                                <input class="name_first--text" type="text" name="name_first" placeholder=例：山田 value="{{ old('name_first') }}">
                                <div class="name-first__alert">
                                    @if ($errors->has('name_first'))
                                    <div class="name-first__alert--danger">
                                        <p>{{ $errors->first('name_first') }}</p>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="name_last">
                                <input class="name_last--text" type="text" name="name_last" placeholder=例：太郎 value="{{ old('name_last') }}">
                                <div class="name-last__alert">
                                    @if ($errors->has('name_last'))
                                    <div class="name-last__alert--danger">
                                        <p>{{ $errors->first('name_last') }}</p>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <div>
                            <p class="required">性別</p>
                        </div>
                    </th>
                    <td>
                        <div>
                            <label><input class="radio" type="radio" name="gender" value="1">男性</label>
                            <label><input class="radio" type="radio" name="gender" value="2">女性</label>
                            <label><input class="radio" type="radio" name="gender" value="3">その他</label>
                            @if ($errors->has('gender'))
                            <div class="gender__alert--danger">
                                <p>{{ $errors->first('gender') }}</p>
                            </div>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <div>
                            <p class="required">メールアドレス</p>
                        </div>
                    </th>
                    <td>
                        <div>
                            <input class="email--text" type="email" name="email" placeholder=例:test@example.com value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <div class="email__alert--danger">
                                <p>{{ $errors->first('email') }}</p>
                            </div>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <div>
                            <p class="required">電話番号</p>
                        </div>
                    </th>
                    <td>
                        <div class="tell--text">
                            <input class="tell" type=”tel”  name="tell_1" placeholder="080" value="{{ old('tell_1') }}"/>
                        &nbsp;-&nbsp;
                            <input class="tell" type=”tel”  name="tell_2" placeholder="1234" value="{{ old('tell_2') }}"/>
                        &nbsp;-&nbsp;
                            <input class="tell" type=”tel”  name="tell_3" placeholder="5678" value="{{ old('tell_3') }}"/>
                        </div>
                        <div>
                            <p class="phone__alert--danger">
                            @if ($errors->has('tell_1'))
                            {{$errors->first('tell_1')}}
                            @elseif ($errors->has('tell_2'))
                            {{$errors->first('tell_2')}}
                            @else
                            {{$errors->first('tell_3')}}
                            @endif
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <div>
                            <p class="required">住所</p>
                        </div>
                    </th>
                    <td>
                        <div class="address--text">
                            <input class="address" type="text" name="address" placeholder=例:東京都渋谷区千駄々谷1-2-3 value="{{ old('address') }}">
                            @if ($errors->has('address'))
                            <div class="address__alert--danger">
                                <p>{{ $errors->first('address') }}</p>
                            </div>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <div>
                            <p class="building">建物名</p>
                        </div>
                    </th>
                    <td>
                        <div class="building_name--text">
                            <input class="building_name" type="text" name="building" placeholder=例:千駄々谷マンション101 value="{{ old('building') }}">
                            @if ($errors->has('building_name'))
                            <div class="building__alert--danger">
                                <p>{{ $errors->first('building_name') }}</p>
                            </div>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <div>
                            <p class="required">お問い合わせの種類</p>
                        </div>
                    </th>
                    <td>
                        <div class="select_wrapper">
                            <select class="select" name="inquiry_type" id="">
                                <option class="select--first" value="">選択してください</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->content }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('inquiry_type'))
                            <div class="inquiry-type__alert--danger">
                                <p>{{ $errors->first('inquiry_type') }}</p>
                            </div>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <div>
                            <p class="required">お問い合わせ内容</p>
                        </div>
                    </th>
                    <td>
                        <div class="inquiry--area">
                            <textarea class="inquiry" name="detail" id="" placeholder=お問い合わせ内容をご記入ください >{{ old('textarea') }}</textarea>
                            @if ($errors->has('textarea'))
                            <div class="textarea__alert--danger">
                                <p>{{ $errors->first('textarea') }}</p>
                            </div>
                        @endif
                        </div>
                    </td>
                </tr>
            </div>
        </table>
    </div>
    <div class="confirmation__button">
        <button class="confirmation__button-submit">確認画面</button>
    </div>
</form>
@endsection