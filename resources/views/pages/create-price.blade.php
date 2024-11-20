@extends('layouts.app')
@section('content')
{{-- @vite(['resources/css/app.css' , 'resources/js/app.js']) --}}
<form method="POST" action="/price-create" class="p-10">
    @csrf
<div>
    <div class="sm:col-span-4">
    <label for="price" class="block text-sm/6 font-medium text-gray-900">Price</label>
    <div class="relative mt-2 rounded-md shadow-sm">
      <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
        <span class="text-gray-500 sm:text-sm">R</span>
      </div>
      <input type="text" name="price" id="price" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" placeholder="0.00">
    </div>
    </div>
  </div>
  <div class="sm:col-span-4">
    <label for="artikelkode" class="block text-sm/6 font-medium text-gray-900">artikelkode</label>
    <div class="mt-2">
      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
        <input type="text" name="artikelkode" id="artikelkode" autocomplete="artikelkode" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6" placeholder="Artikelkode">
      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center gap-x-6 " >
    <button type="submit" class="rounded-md bg-green-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>
@endsection