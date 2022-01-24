<footer>
    <div id="footer-top">
        <div class="container">
            @foreach ($footerLists as $list)
                <nav>
                    <h3>{{$list['listName']}}</h3>
                    <ul>
                        @foreach ($list['listItems'] as $item)
                            <li>
                                <a href="{{$item['path']}}">{{$item['text']}}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            @endforeach
        </div>
    </div>
    <div id="footer-bottom">
        <div class="container">
            <div class="btn">sign-up now!</div>
            <div id="social">
                <div class="text">follow us</div>
                <div class="icons">
                    <img src="storage/img/footer-facebook.png" alt="">
                    <img src="storage/img/footer-periscope.png" alt="">
                    <img src="storage/img/footer-pinterest.png" alt="">
                    <img src="storage/img/footer-twitter.png" alt="">
                    <img src="storage/img/footer-youtube.png" alt="">
                </div>
            </div>
        </div>
    </div>
</footer>