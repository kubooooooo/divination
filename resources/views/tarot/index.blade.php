@component('components.layout')
    @slot('css')
        {{ url('css/tarot/styles.css') }}
    @endslot
    @slot('slot')
        <h1>タロット占い</h1>
        <p>タロットカードで今年の運勢を占います。</p>
        <p>
            カードを1枚選択してください。<br>
            Please select one card.
        </p>
        <div class="cards">
            @for ($i = 0; $i < 3; $i++)
                <div class="card">
                    <img src="{{ url('images/六芒星mini.png') }}" alt="">
                </div>
            @endfor
        </div>
        <form action="{{ route('tarot.show')}}">
            @csrf
            <button>カードを決定する</button>
        </form>
        <script src="js/tarot/main.js"></script>
    @endslot
@endcomponent
