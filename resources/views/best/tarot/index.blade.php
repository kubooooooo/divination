@component('components.layout')
    @slot('css')
        {{ url('css/tarot/styles.css') }}
    @endslot
    @slot('slot')
        <h1>タロット占い</h1>
        <p>カードを1枚選択してください。</p>
        <div class="cards">
            @for ($i = 0; $i < 3; $i++)
                <div class="card">
                    <img src="{{ url('images/六芒星.png') }}" alt="">
                </div>
            @endfor
        </div>
        <form action="{{ route('best.tarot.show')}}">
            @csrf
            <button>カードを決定する</button>
        </form>
        <script src="{{ url('js/tarot/main.js') }}"></script>
    @endslot
@endcomponent
