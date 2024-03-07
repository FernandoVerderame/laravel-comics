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
                    <li>
                        <a href="#">Terms Of Use</a>
                    </li>
                    <li>
                        <a href="#">Privacy policy (New)</a>
                    </li>
                    <li>
                        <a href="#">Ad Choices</a>
                    </li>
                    <li>
                        <a href="#">Advertising</a>
                    </li>
                    <li>
                        <a href="#">Jobs</a>
                    </li>
                    <li>
                        <a href="#">Subscriptions</a>
                    </li>
                    <li>
                        <a href="#">Talent Workshops</a>
                    </li>
                    <li>
                        <a href="#">CPSC Certificates</a>
                    </li>
                    <li>
                        <a href="#">Ratings</a>
                    </li>
                    <li>
                        <a href="#">Shop Help</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
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
