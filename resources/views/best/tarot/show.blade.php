@component('components.layout')
    @slot('css')
        {{ url('css/tarot/styles.css') }}
    @endslot
    @slot('slot')
        <div class="tarottext">
            <div class="tarotcard">
                <img src="{{ url('images/tarot/tarot22.png') }}">
                <div class="tarotName">- 最強 -</div>
            </div>
            <div>
                <div class="commentTitle">あなたの今年の運勢は...</div>
                <div class="tarotcomment">
                    最高の一年です。<br>
                    自分の力が最大限発揮できます。<br>
                    目標が達成でき、長年の願いが叶うでしょう。<br>
                    また、人間関係も非常に良好になり、周囲から高い評価が得られます。<br>
                    あたなの未来は約束されています。
                </div>
            </div>
        </div>
        <form action="{{ route('index') }}">
            @csrf
            <button>
                HOME
            </button>
        </form>
    @endslot
@endcomponent
