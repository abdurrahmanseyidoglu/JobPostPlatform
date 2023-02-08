<x-layout>
    @include('partials._search')
    @foreach ($listings as $listing)
        <x-listing-card :listing="$listing" />
    @endforeach
</x-layout>
