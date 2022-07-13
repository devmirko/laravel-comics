@extends('templates.base')

@section('pageTitle', 'Comics - Home')

@section('pageMain')

<main>
    <section id="hero">
        <!-- immagine hero in background-->
    </section>
    <section id="series">
        <div id="current">CURRENT SERIES</div>
    </section>
    <section id="card_container">
        <div class="container">
            @foreach ($arrComics as $item)
                <a class="card" href="{{  route('card_page', ['id' => $item['id']]) }}">
                    <div class="box_image">
                         <img src="{{$item['thumb']}}" alt="">
                    </div>
                    <div class="box_title">
                        <h4>{{ $item['title'] }}</h4>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
    <section id="row_more">
        <div id="read_more">READ MORE</div>
    </section>
    <section id="head_footer">
        <div class="container_footer">
            <ul>
                <li>
                    <img src="/images/buy-comics-digital-comics.png" alt="">
                    <span>DIGITAL COMICS</span>
                </li>
                <li>
                    <img src="/images/buy-comics-merchandise.png" alt="">
                    <span>DC MERCHAINDAISE</span>
                </li>
                <li>
                    <img src="/images/buy-comics-subscriptions.png" alt="">
                    <span>SUBSCRIPTION</span>
                </li>
                <li>
                    <img src="/images/buy-comics-shop-locator.png" alt="">
                    <span>COMIC SHOP LOCATOR</span>
                </li>
                <li>
                    <img src="/images/buy-dc-power-visa.svg" alt="">
                    <span>DC POWER VISA</span>
                </li>

            </ul>
        </div>
    </section>
</main>

@endsection
