@props(['listing'])
@php
    $imgSrc = '';
    if(gettype($listing->logo) === 'string'){
        $imgSrc = asset('storage/' . $listing->logo);
    }else{
        $imgSrc = asset('images/no-image.png');
    }
@endphp
<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$imgSrc}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
            <x-listing-tags :tagsCsv="$listing->tags"/>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
            </div>
        </div>
    </div>
</x-card>