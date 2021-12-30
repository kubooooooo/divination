@component('components.layout')
    @slot('css')

    @endslot
    @slot('slot')
        <div>
            大爆笑間違いなし！超絶面白い占い結果があなたを待っています。
        </div>
        <div>
            占う方法を選んでください。<br>
            Please select a fortune-telling method.
        </div>
        <div>
            <div class="btn">
                <a href="{{ route('sign.index') }}">星座占い</a>
            </div>
            <div class="btn">
                <a href="{{ route('person.index') }}">前世占い</a>
            </div>
            <div class="btn">
                <a href="{{ route('tarot.index') }}">タロット占い</a>
            </div>
            <div class="btn">
                <a href="{{ route('best.index') }}">最強占い</a>
            </div>
        </div>
    @endslot
@endcomponent
