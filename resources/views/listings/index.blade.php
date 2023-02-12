<x-layout>
    @include('partials._search')
    @if(count($listings)>0)

        @foreach ($listings as $listing)
            <x-listing-card :listing="$listing"/>
        @endforeach

    @else
        <h1 class="text-red">No lists found!</h1>
    @endif
    <div class="mt-6 p-4">
        {{$listings->links()}}
    </div>
</x-layout>
