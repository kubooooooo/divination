@component('components.layout')
    @slot('css')
        {{ url('css/person/styles.css') }}
    @endslot
    @slot('slot')
        <h1 class="personTitle">
            {{ $name }}さんの前世は「最強」です。
        </h1>
        <p class="personComment">
            全ての生命体を超越した存在である「最強」。<br>
            そんな「最強」を前世にもつあたなは、唯一無二の選ばれし者です。<br>
            生きる奇跡であるあなたを、世界が祝福しています。<br>
            Thank you very much!
        </p>
        <form action="{{ route('index') }}">
            @csrf
            <button class="homebtn">
                HOME
            </button>
        </form>
    @endslot
@endcomponent
