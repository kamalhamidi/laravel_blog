@extends('layouts.app')

@section('content')

@if (session()->has('message'))
<div class="bg-red-900 text-center py-4 lg:px-4">
    <div class="p-2 bg-red-800 items-center text-gray-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
        <span class="flex rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3">NEW</span>
        <span class="font-semibold mr-2 text-left flex-auto">{{session()->get('message')}}</span>
        <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
</div>
@endif

<div class="container m-auto text-center pt-10 pb-5 ">
    <h1 class="text-5xl font-bold ">All Posts</h1>    
</div>

@if (auth::check())
    <div class="container mx-auto sm:grid py-2 px-5 border-b border-gray-300">
        <a href="/blog/create" class="bg-green-500 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start"> Add new post</a>
    </div>
@endif


@foreach ($posts as $post)
    <div class="container mx-auto sm:grid grid-cols-2 gap-10 py-12 px-5 border-b border-gray-300">
        <div class="">
            <img class="object-cover" src="/images/{{$post -> image_path}}" alt="">
        </div>

        <div class="">
            <h2 class="text-gray-700 font-bold text-4xl py-3 md:pt-0 ">
                {{$post -> title}}
            </h2>
            <div class="">
                By: <span class="text-gray-500 italic pr-2">{{$post -> user -> name}}</span>
                On <span class="text-gray-500 italic">{{date('d-m-Y / h:m', strtotime($post -> updated_at))}}</span>
                
                <p class="text-l text-gray-700 py-8 leading-6">
                    {{$post -> descreption}}
                    
                    {{-- Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur ipsa odio dolore quasi voluptas suscipit pariatur tempore iste accusantium libero explicabo sunt culpa harum id ducimus, labore deserunt illo obcaecati.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur ipsa odio dolore quasi voluptas suscipit pariatur tempore iste accusantium libero explicabo sunt culpa harum id ducimus, labore deserunt illo obcaecati.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur ipsa odio dolore quasi voluptas suscipit pariatur tempore iste accusantium libero explicabo sunt culpa harum id ducimus, labore deserunt illo obcaecati.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur ipsa odio dolore quasi voluptas suscipit pariatur tempore iste accusantium libero explicabo sunt culpa harum id ducimus, labore deserunt illo obcaecati. --}}
                </p>
                
                <a href="/blog/{{$post -> slug}}" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Read More</a>
                
            </div>
        </div>
    </div>


@endforeach




@endsection

