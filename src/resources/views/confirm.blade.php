@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__title">
    <h2>Confirm</h2>
</div>
<form class="form" action="/thanks" method="post">
    @csrf
    <div class="confirm-table">
        <table border="1">
            <tr>
                <th class="name">お名前</th>
                <td>
                {{ $contact['name_first'] }}
                &nbsp;
                {{ $contact['name_last'] }}
                </td>
                <input class="name_first" type="hidden" name="name_first" value="{{ $contact['name_first'] }}">
                <input class="name_last" type="hidden" name="name_last" value="{{ $contact['name_last'] }}">
            </tr>
            <tr>
                <th class="gender">性別</th>
                <td>
                    @if ($contact['gender'] == '1')<p>男性</p>
                    @elseif ($contact['gender'] == '2')<p>女性</p>
                    @else<p>その他</p>
                    @endif
                </td>
                <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
            </tr>
            <tr>
                <th class="email">メールアドレス</th>
                <td>
                {{ $contact['email'] }}
                </td>
                <input type="hidden" name="email" value="{{ $contact['email'] }}">
            </tr>
            <tr>
                <th class="tel">電話番号</th>
                <td>
                    {{ $contact['tell_1'] }}
                    {{ $contact['tell_2'] }}
                    {{ $contact['tell_3'] }}
                </td>
                <input type="hidden" name="tell" value="{{ $contact['tell_1'] }}">
                <input type="hidden" name="tell" value="{{ $contact['tell_2'] }}">
                <input type="hidden" name="tell" value="{{ $contact['tell_3'] }}">
            </tr>
            <tr>
                <th class="address">住所</th>
                <td>
                {{ $contact['address'] }}
                </td>
                <input type="hidden" name="address" value="{{ $contact['address'] }}">
            </tr>
            <tr>
                <th class="building">建物名</th>
                <td>
                {{ $contact['building'] }}
                </td>
                <input type="hidden" name="building" value="{{ $contact['building'] }}">
            </tr>
            <tr>
                <th class="inquiry">お問い合わせの種類</th>
                <td>
                {{ $contact['inquiry_type'] }}
                </td>
                <input type="hidden" name="inquiry_type" value="{{ $contact['inquiry_type'] }}">
            </tr>
            <tr>
                <th class="textarea">お問い合わせ内容</th>
                <td>
                {{ $contact['detail'] }}
                </td>
                <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
            </tr>
        </table>
    </div>
    <div>
        <input type="submit" value="送信" name="send">
        
    </div>
</form>
<input type="submit" value="修正" name="back">
@endsection