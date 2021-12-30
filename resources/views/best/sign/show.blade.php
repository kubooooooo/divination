@component('components.layout')
    @slot('css')
        {{ url('css/sign/sign.css') }}
    @endslot
    @slot('slot')
        <h1 class="signTitle">
            {{ $sign->name }}の今日の運勢は...
        </h1>
        <p class="signComment">
            最高の一日です。<br>
            全てが上手くいくでしょう。<br>
            周りの人や環境、偶然までもがあなたに味方します。<br>
            自分が信じるように行動しましょう。
        </p>
        <h2>
            ラッキーアイテム
        </h2>
        <p>
            あなた以上に幸運な存在はありません。
        </p>
        <form action="{{ route('index') }}">
            @csrf
            <button class="homebtn">
                HOME
            </button>
        </form>
    @endslot
@endcomponent
