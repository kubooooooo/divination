@component('components.layout')
    @slot('css')

    @endslot
    @slot('slot')
                <h1>最強占い</h1>
                <p>絶対に良い結果が出る占いです。</p>
                <div>
                    占う方法を選んでください。<br>
                    Please select a fortune-telling method.
                </div>
                <div>
                    <div class="btn">
                        <a href="{{ route('best.sign') }}">最強星座占い</a>
                    </div>
                    <div class="btn">
                        <a href="{{ route('best.person') }}">最強前世占い</a>
                    </div>
                    <div class="btn">
                        <a href="{{ route('best.tarot') }}">最強タロット占い</a>
                    </div>
                </div>
    @endslot
@endcomponent
