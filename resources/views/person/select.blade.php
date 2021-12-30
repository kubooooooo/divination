@component('components.layout')
    @slot('css')
        {{ url('css/person/styles.css') }}
    @endslot
    @slot('slot')
        <h1>前世占い</h1>
        <h2 class="selecter">人物から選ぶ</h2>
        <form method="POST" action="{{ route('person.selected')}}" class="personform">
            @csrf
            <select name="id" id="" class="option">
                @foreach ($persons as $person)
                    <option value="{{ $person->id }}">{{ $person->name }}</option>
                @endforeach
            </select>
            <button class="selecterbtn">
                前世を占う
            </button>
        </form>

        <h2 class="selecter">特徴から選ぶ</h2>
        <form method="POST" action="{{ route('person.selected')}}" class="personform">
            @csrf
            <select name="id" id=""  class="option">
                @foreach ($persons as $person)
                    <option value="{{ $person->id }}">{{ $person->personality }}</option>
                @endforeach
            </select>
            <button class="selecterbtn">
                前世を占う
            </button>
        </form>
    @endslot
@endcomponent
