@component('components.layout')
    @slot('css')
        {{ url('css/person/styles.css') }}
    @endslot
    @slot('slot')
        <h1 class="personTitle">
            あなたの前世は<br>
            「{{ $person->name }}」です。
        </h1>
        <p class="personComment">
            {!! nl2br($person->comment) !!}
        </p>
        <h2>結果が気に入らない方へ</h2>
        <form action="{{ route('person.retake') }}">
            <button>
                もう一度占う
            </button>
        </form>
        <form action="{{ route('person.select')}}">
            @csrf
            <button>
                自分で選ぶ
            </button>
        </form>
        <form action="{{ route('index') }}">
            @csrf
            <button class="homebtn">
                HOME
            </button>
        </form>
    @endslot
@endcomponent
