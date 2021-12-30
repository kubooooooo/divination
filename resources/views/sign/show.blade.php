@component('components.layout')
    @slot('css')
        {{ url('css/sign/sign.css') }}
    @endslot
    @slot('slot')
        <h1 class="signTitle">
            {{ $sign->name }}の今日の運勢は...
        </h1>
        <p class="signComment">
            {!! nl2br($comment->comment) !!}
        </p>
        <h2>
            ラッキーアイテム
        </h2>
        <p>
            {{ $item->item }}
        </p>
        <form action="{{ route('index') }}">
            @csrf
            <button class="homebtn">
                HOME
            </button>
        </form>
    @endslot
@endcomponent
