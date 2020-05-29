<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>I♡Films - {{$actor->name}}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Oswald:200,300,400,500,600,700&display=swap&subset=cyrillic" rel="stylesheet">
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

<section class="location">
    <div class="container">
        <div class="path">
            <a href="#">Головна</a> /
            <a href="#">Всі актори</a> /
            <a href="{route('actor',$actor->id)}}">{{ $actor->name }}</a>
        </div>
        <div class="title">
            <span>{{ $actor->name }}</span> <span class="on">на</span> <span class="logo">I<i class="far fa-heart"></i>FILMS</span>
        </div>
    </div>
</section>

<section class="content">

    <div class="container">

        <div class="inner">

            <div class="grid">

                @foreach($actor->films as $film)
                <div class="grid_item">
                    <a href="{{route('film',$film->id)}}" class="film">
                        <div class="poster ratable" rate="1.41">
                            <img class="portrait" src="{{ $film->poster }}" alt="">
                            <div class="info">
                                <div class="age">0+</div>
                            </div>
                        </div>
                        <div class="name">{{ $film->name }}</div>
                        <div class="alternate_pricing free">Free</div>
                    </a>
                </div>
                @endforeach
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
</footer>

<script>

    function resize() {
        $h = $(this).width() * parseFloat($(this).attr('rate'));
        $(this).height($h)
    }

    $(window).resize(function() {
        $(".ratable").each(resize);
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

</body>
</html>
