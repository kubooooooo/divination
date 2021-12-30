@component('components.layout')
    @slot('css')
        {{ url('css/sign/sign.css') }}
    @endslot
    @slot('slot')
                <h1>星座占い</h1>
                <p>星座から今日の運勢を占います。</p>
                <p>あなたの星座を選択してください。<br>
                    Please choose your constellation.
                </p>
                <ul>
                    @foreach ($signs as $sign)
                        <li>
                            <a href="{{ route('sign.show', $sign) }}">
                                <div class="signicon">
                                    <div class="signimage">
                                        <img src="{{ url('images/sign', [$sign->image])}}">
                                    </div>
                                    <p class="sign_name">{{ $sign->name }}</p>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
    @endslot
@endcomponent
