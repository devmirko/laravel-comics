@extends('templates.base')

@section('pageTitle', 'Comics - Home')

@section('pageMain')

<main>
    <section id="hero">
        <!-- immgaine hero -->
    </section>
    <section id="series">
        <div id="current">CURRENT SERIES</div>
    </section>
    <section id="card_container">
        <div class="container">
            {{-- <div class="card">
                <div class="box_image">
                    <img :src="img" :alt="title">
                </div>
                <div class="box_title">
                    <h4>{{title}}</h4>
                </div>

            </div> --}}
        </div>
    </section>
    <section id="row_more">
        <div id="read_more">READ MORE</div>
    </section>
</main>

@endsection
