<div class="footer-top">
    <div class="bg-dc">
        <div class="links container">
            <div class="left-links">
                <div class="dc-comics-links">
                    <h4>DC COMICS</h4>
                    <ul>
                        @foreach(config('dc_comics_links') as $link)
                        <li>
                            <a href="#" class="">{{ $link['text'] }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="shop-links">
                    <h4>SHOP</h4>
                    <ul>
                        @foreach(config('shop_links') as $link)
                        <li>
                            <a href="#" class="">{{ $link['text'] }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="dc-links">
                <h4>DC</h4>
                <ul>
                    @foreach(config('dc_links') as $link)
                    <li>
                        <a href="#" class="">{{ $link['text'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="sites-links">
                <h4>SITES</h4>
                <ul>
                    <li>
                        <a href="#">DC</a>
                    </li>
                    <li>
                        <a href="#">MAD Magazine</a>
                    </li>
                    <li>
                        <a href="#">DC Kids</a>
                    </li>
                    <li>
                        <a href="#">DC Universe</a>
                    </li>
                    <li>
                        <a href="#">DC Power Visa</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
