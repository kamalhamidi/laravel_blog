@extends('layouts.app')

@section('content')

    {{--image in hero--}}
    <div class="hero-bg-image flex flex-col items-center justify-center h-screen">
        <h1 class="text-white text-4xl uppercase font-bold pb-10">Welcome to my Blog </h1> 
        <h1><a href="/blog" class="text-gray-700 bg-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-xl ">Start reading</a></h1>
    </div>

    {{-- how to be like me  --}}
    <div class="container sm:grid grid-cols-2 gap-10 mx-auto py-10"> {{--smm kat3ni men small interface andir had les methodes--}}
        <div class="mx-2 md:mx-0">
            <img class="rounded-lg" src="https://picsum.photos/id/239/960/620" alt=""> {{--rounded bach dwer tswira b7al sabona--}}
        </div>
        <div class="flex flex-col items-left justify-center m-10 sm:m-0">
            <h2 class="font-bold text-gray-800 text-4xl uppercase">
                how to be like me in 2023
            </h2>

            <p class="font-bold text-gray-600 text-xl pt-2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex molestias, excepturi magni tempora
            </p>

            <p class="py-4 text-gray-500 text-sm leading-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita officiis tempora repellat quas id ullam accusamus dolor quos unde eum perferendis tenetur, perspiciatis obcaecati aliquid iusto beatae inventore mollitia? Corrupti.
            </p>

            <a href="/" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Read More</a>
        </div>
    </div>

    {{-- blog categories --}}
    <div class="text-center p-12 bg-gray-700 text-gray-200">
        <h2 class="text-2xl">
            BLOG Categories
        </h2>
        <div class="container mx-auto pt-10 sm:grid grid-cols-4 ">
            <div class="font-bold text-3xl py-2">UX designs thinking</div>
            <div class="font-bold text-3xl py-2">Programming Language</div>
            <div class="font-bold text-3xl py-2">Graphic design</div>
            <div class="font-bold text-3xl py-2">Front-End DEVLOPERs</div>
        </div>
    </div>

    {{-- recent posts --}}
    <div class="container mx-auto text-center py-15">
        <h2 class="font-bold text-5xl py-10">Recent posts</h2>

        <p class="text-gray-400 leading-6 px-10">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur tempore nemo itaque hic in ad, ex reprehenderit quae eveniet magni facilis eos consequatur magnam repellendus! Neque a doloribus expedita enim!  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur tempore nemo itaque hic in ad, ex reprehenderit quae eveniet magni facilis eos consequatur magnam repellendus! Neque a doloribus expedita enim! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur tempore nemo itaque hic in ad, ex reprehenderit quae eveniet magni facilis eos consequatur magnam repellendus! Neque a doloribus expedita enim!
        </p>
        
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
        <div class="flex bg-yellow-700 text-gray-100  pt-10">
            <div class="block m-auto p-4 pb-14 w-4/5">
                
                <ul class="md:flex text-xs gap-1">{{-- gap for espace --}}
                    <li><a class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300" href="/">PHP</a></li>
                    <li><a class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300" href="/">Programmin</a></li>
                    <li><a class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300" href="/">Languages</a></li>
                    <li><a class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300" href="/">Backend </a></li>
                </ul>

                <h3 class="text-l py-10 leading-6">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione aliquid id placeat voluptates adipisci, doloribus molestias, corrupti omnis, consectetur culpa dolorum voluptate earum libero exercitationem accusantium aut eaque obcaecati labore? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione aliquid id placeat voluptates adipisci, doloribus molestias, corrupti omnis, consectetur culpa dolorum voluptate earum libero exercitationem accusantium aut eaque obcaecati labore? 
                </h3>

                <a href="/" class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg uppercase font-bold text-l inline-block hover:bg-yellow-100 hover:text-yellow-700 transition duration-300">READ MORE</a>
            </div>
        </div>
        
        <div class="flex">
            <img class="object-cover" src="https://picsum.photos/id/242/960/620" alt="">
        </div>
    </div>

@endsection