@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
    <div>
        <div class="thanks">
            <p class="thanks_message">お問い合わせありがとうございました</p>
            <div>
                <form class="thanks_button" action="/" method="">
                    <button>HOME</button>
                </form>
            </div>
        </div>
        <div class="thanks_back">Thank you</div>
    </div>
@endsection