@extends('layouts.app')
@section('content')






<main>
    <section class="button back">
        <img src="@asset('images/Polygon_back.png')" alt="">
        <p> <a href="<?php echo home_url()?>">back</a></p>
    </section>
    <h1 class="title_indiv">{!! get_the_title() !!}</h1>
    <section class="agent_container">
        <div>
            <div class="capa_desc">
                <h2>Lore and Storyline</h2>
                <span>{!! get_field('lore_and_storyline') !!}</span>
            </div>
            <div class="aside">
                <div class="left-side">
                    <img src="@asset('images/stream.png')" alt="">
                </div>
                <div class="right-side">
                    <h2>Agents Information</h2>
                    <div class="info">
                        <p>Name :</p>
                        <p>{!! get_the_title() !!}</p>
                    </div>
                    <div class="info">
                        <p>Country :</p>
                        <p>{!! get_field('origin') !!}</p>
                    </div>
                    <div class="info">
                        <p>Abilities :</p>
                        <p>{!! get_field('ability')["second_ability"]["title"] !!}, {!! get_field('ability')["third_ability"]["title"] !!}, {!! get_field('ability')["four_ability"]["title"] !!}</p>
                    </div>
                    <div class="info">
                        <p>Ultimate :</p>
                        <p>{!! get_field('ability')["first_ability"]["title"] !!}</p>
                    </div>
                </div>
                <div class="rectangle_decoration">
                    <div class="deco main"></div>
                    <div class="deco second"></div>
                    <div class="deco second"></div>
                    <div class="deco second"></div>
                </div>
            </div>
            <div class="abils">
                <div class="abil first">
                    <img src="<?php echo( get_field('indiv_capacity')[0]['url'])?>" alt="">
                    <p class="capa_title">
                        {!! get_field('ability')["first_ability"]["title"] !!} :
                    </p>
                    <p class="capa_desc">{!! get_field('ability')["first_ability"]["desc"] !!}</p>
                </div>
                <div class="abil">
                    <img src="<?php echo( get_field('indiv_capacity')[1]['url'])?>" alt="">
                    <p class="capa_title">
                       {!! get_field('ability')["second_ability"]["title"] !!} :
                    </p>
                    <p class="capa_desc">{!! get_field('ability')["second_ability"]["desc"] !!}</p>
                </div>
                <div class="abil">
                    <img src="<?php echo( get_field('indiv_capacity')[2]['url'])?>" alt="">
                    <p class="capa_title">{!! get_field('ability')["third_ability"]["title"] !!} :
                    </p>
                    <p class="capa_desc">{!! get_field('ability')["third_ability"]["desc"] !!}</p>
                </div>
                <div class="abil">
                    <img src="<?php echo( get_field('indiv_capacity')[3]['url'])?>" alt="">
                    <p class="capa_title">{!! get_field('ability')["four_ability"]["title"] !!} :
                    </p>
                    <p class="capa_desc">{!! get_field('ability')["four_ability"]["desc"] !!}</p>
                </div>
            </div>
        </div>
        <img class="perso" src="<?= get_field('illustration')['url'] ?>" alt="">
    </section>
</main>
    
@endsection