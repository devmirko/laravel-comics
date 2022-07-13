@extends('templates.base')

@section('pageTitle', $pageTitle)

@section('pageMain')

<main>
    <section id="hero">
        <!-- immagine hero in background-->
    </section>
    <section id="series_card">
        <div class="container_series">
            <img src="{{$card['thumb']}}" alt="questa è un immagine" id="poster_card">
        </div>
    </section>
    <section id="cards_container">
        <div class="container_cards">
            <div class="box_text">
                {{-- titolo --}}
                <h2 class="title">{{ $card['title']}}</h2>
                {{-- contenitore prezzo --}}
                <div class="price_product">
                    <div class="price_now">
                        {{-- prezzo --}}
                        <h4>{{ $card['price']}}</h4>
                        {{-- status --}}
                        <span>AVAILABLE</span>
                    </div>
                    <button class="btn">Check Availability</button>
                </div>
                {{-- descrizione --}}
                <p class="text_descr">{{ $card['description'] }}</p>
            </div>
            <div class="box_adv">
                {{-- titolo adv --}}
                <div class="title_adv">ADVERTISEMENT</div>
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
                    <h4>art by:</h4>
                    @foreach ($card["artists"] as $art)
                        <p>{{$art}}</p>
                    @endforeach
                </div>
                {{-- written by --}}
                <div class="written">
                    <h4>Written by</h4>
                    @foreach ($card["writers"] as $writen)
                        <p>{{$writen}}</p>
                    @endforeach
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
                    <p>{{ $card['series'] }}</p>
                </div>
                {{-- US price --}}
                <div class="price">
                    <h4>U.S. Price:</h4>
                    <p>{{ $card['price']}}</p>
                </div>
                {{-- On Sale Date --}}
                <div class="Sale_date">
                    <h4>On Sale Date:</h4>
                    <p>{{ $card['sale_date']}}</p>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection

<style scoped>
#series_card{
   background-color:#0C7CEC;
   min-height: 50px;





}

.container_series{
    width: 60%;
    margin: 0 auto;
    position: relative

}

#poster_card{
    border: 2px solid white;
    position: absolute;
    left: 0;
    bottom: -25;
}

#cards_container{
    min-height: 600px;
    background-color: white;
    display: flex;
    justify-content: center;
    align-items: center

}

.container_cards{
    width: 60%;
    display: flex;

}

.box_text{
    padding-right: 20px;
}

.title{
    font-size: 30px;
    margin-bottom: 10px;

}

.price_product{
    width: 100%;
    min-height: 30px;
    background-color:#55BA59;
    display: flex;
    margin-bottom: 20px;

}

.price_now{
    width: 80%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-left: 5px;
    padding-right: 5px;
    border-right: 2px solid black
}

.btn{
    width: 20%;
    background-color: #55BA59;
    border: none;
    cursor: pointer;
}

.text_descr{
    font-size: 24px;
    color: #838583;
}

.title_adv{
    display: flex;
    justify-content: end;
    align-items: center;
    color: #838583;
    min-height: 30px;


}



</style>


