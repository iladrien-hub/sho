<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>I♡Films - Welcome!</title>
    <link rel="stylesheet" href="{{ asset('css/style-welcome.css') }}">
    <link href="https:/fonts.googleapis.com/css?family=Amatic+SC:400,700|Oswald:200,300,400,500,600,700&display=swap&subset=cyrillic" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8ecc921254.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>
<body>

<div class="call_us">
    <i class="fas fa-phone"></i>
</div>

<header>
    <div class="container">
        <div class="logo">
            I<i class="far fa-heart"></i>FILMS
        </div>
        <i class="menu_toggle_btn fas fa-bars"></i>
        <nav class="">
            <a href="#">Фільми</a>
            <a href="#">Серіали</a>
            <a href="#">Мультфільми</a>
            <a href="#">Добірки</a>
        </nav>
    </div>
</header>

<section class="billboard">
    <div class="container">

        <div class="slider">

            <i class="slider_left fas fa-chevron-left"></i>

            <div class="content">

                @foreach($billboard as $film)
                <div class="item">
                    <a href="{{route('film',$film->id)}}" class="film">
                        <img class="portrait" src="{{ $film->poster }}" alt="">
                        <img class="landscape" src="{{ $film->bigposter }}" alt="">
                        <div class="info">
                            <div class="pricing">Free</div>
                            <div class="age">{{$film->mark}}</div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>

            <i class="slider_right fas fa-chevron-right"></i>

        </div>

        <div class="about">
            <div class="logo">
                I<i class="far fa-heart"></i>FILMS
            </div>
            <div class="quote">
                <div class="because">тому що, ...</div>
                <div class="quote_content"></div>
                <div class="quote_author"></div>
            </div>
        </div>

    </div>
</section>

<section class="recommended">

    <div class="container">

        <div class="section_title">
            <div class="text">Рекомендовані</div>
            <div class="icon">
                <i class="far fa-thumbs-up"></i>
            </div>
        </div>
        <div class="section_content">

            <div class="vertical_grid">

                @foreach($recommended as $film)
                    <div class="item">
                        <a href="{{route('film',$film->id)}}" class="film">
                            <div class="poster ratable" rate="1.41">
                                <img class="portrait" src="{{$film->poster}}" alt="">
                                <div class="info">
                                    <div class="age">{{$film->mark}}</div>
                                </div>
                            </div>
                            <div class="name">{{$film->name}}</div>
                            <div class="alternate_pricing free">Free</div>
                        </a>
                    </div>
                @endforeach

            </div>

        </div>

        <a href="#" class="section_button accent_button">Більше&nbsp;<i class="fas fa-arrow-right"></i></a>

    </div>
</section>

<section class="top">

    <div class="container">

        <div class="top_inner">
            <div class="section_title">
                <div class="text">Топ 5</div>
                <div class="icon">
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="section_content">

                <div class="left">

                    <div class="tabs_items">

                        @foreach($top5 as $film)
                        <div class="item">
                            <a href="{{route('film',$film->id)}}" class="film">
                                <img class="portrait" src="{{$film->poster}}" alt="">
                                <div class="info">
                                    <div class="pricing">Free</div>
                                    <div class="age">0+</div>
                                </div>
                            </a>

                            <a href="{{route('film',$film->id)}}" class="accent_button section_button">Придбати</a>

                            <div class="content">
                                <div class="name">{{$film->name}}</div>
                                <div class="descr">
                                    {{$film->about}}
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>

                <div class="right">

                    <div class="right_head">
                        <div class="name"></div>
                        <div class="tabs">
                            <i class="tabs_left fas fa-chevron-left"></i>
                            <div class="tab active">1</div>
                            <div class="tab">2</div>
                            <div class="tab">3</div>
                            <div class="tab">4</div>
                            <div class="tab">5</div>
                            <i class="tabs_right fas fa-chevron-right"></i>
                        </div>
                    </div>
                    <div class="right_about">

                    </div>

                </div>

            </div>
        </div>

    </div>
</section>

<footer>
    <div class="part1">
        <div class="container">
            <div class="contacts">
                <div>Маєш кльові ідеї? Пропонуй!</div>
                <div>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-telegram"></i>
                    <i class="fab fa-discord"></i>
                    <i class="fab fa-whatsapp"></i>
                </div>
            </div>
            <div class="quote">
                <i class="fas fa-quote-left"></i>
                <div class="text">
                    <div class="quote_content"></div>
                    <div class="quote_author"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="part2">
        <div class="container">
            <div class="search">
                <input type="text" placeholder="Що шукаємо?">
            </div>
            <div class="sections">
                <div class="item">
                    <div class="title">Розділи</div>
                    <a href="#" class="member">Фільми</a>
                    <a href="#" class="member">Серіали</a>
                    <a href="#" class="member">Мультфільми</a>
                    <a href="#" class="member">Добірки</a>
                </div>
                <div class="item">
                    <div class="title">Підтримка</div>
                    <div class="member">+380630000000</div>
                    <div class="member">+380635553535</div>
                    <div class="member">mail1@gmail.com</div>
                    <div class="member">mail2@gmail.com</div>
                </div>
            </div>
        </div>
    </div>
<footer>

<script>

    function resize() {
        $h = $(this).width() * parseFloat($(this).attr('rate'));
        $(this).height($h)
    }

    $(window).resize(function() {
        $(".ratable").each(resize);
        setTimeout(function(){
            $(".ratable").each(resize);
        },1000);
    });

    $(document).ready(function() {
        $(".ratable").each(resize);
        if( $(".grid_item").length < 4 ) {
            $(".grid").css({"justify-content":"left"});
            $(".grid_item").css({"margin-right":"30px"});
        }
    });

    $(".more").click(function() {
        $(this).parent().find("p").css("max-height","none");
        $(this).remove()
    });
</script>

<script src="{{asset('js/menu.js')}}"></script>
<script src="{{asset('js/quote.js')}}"></script>
<script src="{{asset('js/tabs.js')}}"></script>
<script src="{{asset('js/hscroll.js')}}"></script>
<script src="{{asset('js/slider.js')}}"></script>

</body>
</html>
