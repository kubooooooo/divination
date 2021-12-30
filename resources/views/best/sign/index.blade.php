@component('components.layout')
    @slot('css')
        {{ url('css/sign/sign.css') }}
    @endslot
    @slot('slot')
        <h1>星座占い</h1>
        <p>あなたの星座を選択してください。</p>
        <ul>
            @foreach ($signs as $sign)
                <li>
                    <div>
                        <a href="{{ route('best.sing.show', $sign) }}">
                            <div class="signicon">
                                <div class="signimage">
                                    <img src="{{ url('images/sign', [$sign->image])}}">
                                </div>
                                <p class="sign_name">{{ $sign->name }}</p>
                            </div>
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
    @endslot
@endcomponent
