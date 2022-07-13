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
</main>

@endsection
