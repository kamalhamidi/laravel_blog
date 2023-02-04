@extends('layouts.app')

@section('content')
<div class="container m-auto text-center pt-10 pb-5 ">
    <h1 class="text-5xl font-bold uppercase">Add new post</h1>    
</div>

<div class="container m-auto text-right pt-10 pb-5 ">
    <form action="/blog" method="POST" enctype="multipart/form-data">
    @csrf    

        <input class="w-full h-20 text-5xl rounded-lg shadow-lg border-b p-7 mb-5" 
                type="text" 
                name="title_form"
                placeholder="Title">

        <textarea class="w-full h-60 text-xl rounded-lg shadow-lg border-b  p-7 mb-5" 
                    name="descreption_form"
                    id="" 
                    cols="30" 
                    placeholder="Descreption"></textarea>


        <div class="flex items-center justify-center w-full pb-4">
            <label for="image_form" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload image</span> or drag and drop</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                </div>
                <input id="image_form" name="image_form" type="file" class="hidden" />
            </label>
        </div> 

        {{-- <input type="file" name="image_form" id=""> --}}
                    

        <button class="bg-green-700 hover:bg-green-200
                       text-gray-200 hover:text-gray-700
                       text
                       transition duration-300
                       cursor-pointer
                       p-5 rounded-lg
                       font-bold uppercase" 
                type="submit">Share the post</button>
    
    </form>
</div>



@endsection