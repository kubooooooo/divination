@component('components.layout')
    @slot('css')

    @endslot
    @slot('slot')
        <h1>前世占い</h1>
        <p>名前と生年月日からあなたの前世を占います。</p>
        <p>
            あなたの名前と生年月日を入力して下さい。<br>
            Please enter your name and date of birth.
        </p>
        <form method="post" action="{{ route('person.show') }}" class="inputForm">
            @csrf
            <p>
                名前:
                <input type="text" name="name" value="{{ old('name') }}">
            </p>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror

            <label for="">生年月日:</label>
            <select name="year" id="">
                @for ($year = 1900; $year <= 2030; $year++)
                    <option value="{{ $year }}">{{ $year }}</option>
                @endfor
            </select>
            <label for="">年</label>
            <select name="month" id="">
                @for ($month = 1; $month <= 12; $month++)
                    <option value="{{ $month }}">{{ $month }}</option>
                @endfor
            </select>
            <label for="">月</label>
            <select name="day" id="">
                @for ($day = 1; $day <= 31; $day++)
                    <option value="{{ $day }}">{{ $day }}</option>
                @endfor
            </select>
            <label for="">日</label>
            @error('datetime_validation')
                <div class="error">{{ $message }}</div>
            @enderror
            <div>
                <button id="person_btn" class="subbtn">前世を占う</button>
            </div>
        </form>
    @endslot
@endcomponent
