@component('components.layout')
    @slot('css')
        {{ url('css/tarot/styles.css') }}
    @endslot
    @slot('slot')
        <div class="tarottext">
            <div class="tarotcard">
                <img src="{{ url('images/tarot', [$tarot->image]) }}">
                <div class="tarotName">- {{ $tarot->name }} -</div>
            </div>
            <div>
                <div class="commentTitle">あなたの今年の運勢は...</div>
                <div class="tarotcomment">{!! nl2br($tarot->comment) !!}</div>
            </div>
        </div>
        <form action="{{ route('tarot.show')}}">
            @csrf
            <button>
                もう一度占う
            </button>
        </form>
        <form action="{{ route('index') }}">
            @csrf
            <button>
                HOME
            </button>
        </form>
    @endslot
@endcomponent
