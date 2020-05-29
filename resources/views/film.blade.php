<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>I♡Films - {{$film->name}}</title>
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
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

<section class="info_section">
    <div class="container">
        <div class="path">
            <a href="/">Головна</a> /
            <a href="/director/{{ $film->director->id }}">{{$film->director->name}}</a> /
            <a href="{{route('film',$film->id)}}">Рекомендовані</a>
        </div>

        <div class="info_head ratable" rate="0.29">
            <div class="nameyear">
                <div class="name">{{$film->name}}</div>
                <div class="year">{{$film->year}}</div>
            </div>
            <img src="{{ $film->bigposter }}" alt="">
        </div>

        <div class="info_content">

            <div class="info_wrapper">
                <div class="info_poster ratable" rate="1.519">
                    <img src="{{ $film->poster }}" alt="">
                </div>
                <div class="info_inner">
                    <div class="name">
                        {{$film->name}}
                        <div class="original">{{$film->origin}}</div>
                        <div class="categories">
                            <a href="#" >{{$film->year}}</a>
                            <a href="#" >{{$film->country}}</a>
                            @foreach($film->genre as $one)
                                <a href="#" >{{$one}}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="about">
                        Опис
                        <div class="disclaimer"><i class="fas fa-exclamation-triangle"></i> Спойлери! <span class="grey">Можливі, але не точно.</span></div>
                        <p class="grey">
                            {{$film->about}}
                        </p>
                        <div class="more">Повністю...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container buyme">
        <div class="buyme_inner">
            <div class="buy ratable" rate="0.56">
                <div class="buy_inner">
                    <div class="text_wrapper">
                        <div class="text">Для розблокування проведіть оплату</div>
                        <i class="fas fa-shopping-cart"></i>
                        <div class="text">500 американських гривень</div>
                    </div>
                    <a href="#" class="section_button accent_button">Придбати</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="actors_inner">
            <div class="actors">
                <div class="title">Актори</div>
                <div class="actors_grid">

                    @foreach( $film->actors as $actor )
                    <a href="{{route('actor',$actor->id)}}" class="item">
                        <div class="item_inner">
                            <div class="photo">
                                <img src="{{ $actor->photo }}" alt="">
                            </div>
                            <div class="actors_name">{{$actor->name}}</div>
                        </div>
                    </a>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

<section class="seealso">
    <div class="container">
        <div class="section_title">
            <div class="text">Дивіться також</div>
            <div class="icon">
                <i class="fas fa-award"></i>
            </div>
        </div>

        <div class="seealso_grid">
            @foreach($film->see_also as $item)
            <div class="grid_item">
                <a href="{{route('film',$item['id'])}}" class="film">
                    <div class="poster ratable" rate="1.41">
                        <img class="portrait" src="{{ $item["poster"] }}" alt="">
                        <div class="info">
                            <div class="age">{{$item["mark"]}}</div>
                        </div>
                    </div>
                    <div class="name">{{ $item["name"] }}</div>
                    <div class="alternate_pricing free">Free</div>
                </a>
            </div>
            @endforeach
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
        $(this).height($h);
    }

    $(window).resize(function() {
        $(".ratable").each(resize);
    });

    $(document).ready(function() {
        $(".ratable").each(resize);
        setTimeout(function(){
            $(".ratable").each(resize);
        },1000);
    });

    $(".more").click(function() {
        $(this).parent().find("p").css("max-height","none");
        $(this).remove();
    });
</script>

<script src="{{asset('js/menu.js')}}"></script>
<script src="{{asset('js/quote.js')}}"></script>

</body>
</html>
