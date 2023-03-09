<footer>
    <div id="credits">
        <section class="DC-logo">
            <img class="DC-logo" src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}">
        </section>
        <section class="column">
            @foreach($all_lists as $index => $lists)
            <ul class="{{ $index === 0 || $index === 1 ? 'menu-second' : 'menu' }}">
                @foreach($lists as $item)
                    <li>
                        <a href="#" class="{{ $loop->first ? 'title' : 'item-credits' }}">{{ $item }}</a>
                    </li>
                @endforeach
            </ul>
            @endforeach
        </section>
    </div>
    <div id="info">
        <div class="sign-up">
            <button>SIGN-UP NOW!</button>
        </div>
        <div class="follow-us">
            <div>
                <h6>FOLLOW US</h6>
            </div>
            <div class="icon">
                <ul class="menu-icons">
                    @foreach($socialIcons as $icon)
                        <li class="icons">
                            <img src="{{ $icon }}" class="img">
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>
