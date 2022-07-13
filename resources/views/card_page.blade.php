@extends('templates.base')

@section('pageTitle', $pageTitle)

@section('pageMain')

<main>
    <section id="hero">
        <!-- immagine hero in background-->
    </section>
    <section id="series">
        <img src="{{$card['thumb']}}" alt="questa è un immagine">
    </section>
    <section id="cards_container">
        <div class="container_cards">
            <div class="box_text">
                {{-- titolo --}}
                <h2>{{ $card['title']}}</h2>
                {{-- contenitore prezzo --}}
                <div></div>
                {{-- descrizione --}}
                <p>{{ $card['description'] }}</p>
            </div>
            <div class="box_adv">
                {{-- titolo adv --}}
                <div>ADVERTISEMENT</div>
                {{-- immagine adv --}}
                <div class="box_img">
                    <img src="{{ asset('images/adv.jpg') }}" alt="questa è un immagine">
                </div>
            </div>
        </div>
    </section>
    <section id="descrizione">
        <div class="container">

            {{-- creatori --}}
            <div class="talent">
                {{-- titolo --}}
                <div class="title_talent">
                    <h3>Talent</h3>
                </div>
                {{-- art by --}}
                <div class="art">
                    <h4></h4>
                    <p></p>
                </div>
                {{-- written by --}}
                <div class="written">
                    <h4></h4>
                    <p></p>
                </div>
            </div>

            {{-- specifiche --}}
            <div class="specs">
                {{-- titolo --}}
                <div class="title_talent">
                    <h3>Specs</h3>
                </div>
                {{-- Series --}}
                <div class="Series">
                    <h4>Series:</h4>
                    <p></p>
                </div>
                {{-- US price --}}
                <div class="price">
                    <h4>U.S. Price:</h4>
                    <p></p>
                </div>
                {{-- On Sale Date --}}
                <div class="Sale_date">
                    <h4>On Sale Date:</h4>
                    <p></p>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
