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
        <div class="container_description">

            {{-- creatori --}}
            <div class="talent">
                {{-- titolo --}}
                <div class="title_talent">
                    <h3>Talent</h3>
                </div>
                {{-- art by --}}
                <div class="row_description">
                    <h4>art by:</h4>
                    <div class="container_author">
                        @foreach ($card["artists"] as $art)
                            <a href="">{{$art}}</a>
                        @endforeach
                    </div>
                </div>
                {{-- written by --}}
                <div class="row_description">
                    <h4>Written by</h4>
                   <div class="container_author">
                    @foreach ($card["writers"] as $writen)
                    <a href="">{{$writen}}</a>
                     @endforeach
                   </div>
                </div>
            </div>

            {{-- specifiche --}}
            <div class="specs">
                {{-- titolo --}}
                <div class="title_talent">
                    <h3>Specs</h3>
                </div>
                {{-- Series --}}
                <div class="row_specs">
                    <h4>Series:</h4>
                    <p>{{ $card['series'] }}</p>
                </div>
                {{-- US price --}}
                <div class="row_specs">
                    <h4>U.S. Price:</h4>
                    <p>{{ $card['price']}}</p>
                </div>
                {{-- On Sale Date --}}
                <div class="row_specs">
                    <h4>On Sale Date:</h4>
                    <p>{{ $card['sale_date']}}</p>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection

<style scoped>
/* sezione card */
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

/* sezione descrizione card */
#descrizione{
    min-height: 400px;
    background-color: #F6F6F6;
    display: flex;
    justify-content: center
}

.container_description{
    width: 60%;
    display: flex;

}

.talent{
    width: 50%;
    padding-right: 20px;

}

.title_talent{
   min-height: 50px;
   display: flex;
   align-items: center;
   font-size: 28px;
   border-bottom: 2px solid  rgba(204, 204, 204, 0.499);;
}

.row_description{
    display: flex;
    padding: 20px 0;
    border-bottom: 2px solid rgba(204, 204, 204, 0.499);;
}

.row_description h4{
    min-width: 20%;
}

.container_author{
    min-width: 80%;
}


.specs{
    width: 50%;
    padding-left: 20px;
}

.row_specs{
    display: flex;
    padding: 20px 0;
    border-bottom: 2px solid rgba(204, 204, 204, 0.499);
}

.row_specs h4{
    margin-right: 100px;
}


</style>


