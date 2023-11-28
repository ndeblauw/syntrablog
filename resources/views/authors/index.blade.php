<x-site-layout title="Our authors">

    <div class="grid grid-cols-4 gap-6">
        @foreach($authors as $author)
            <div class="bg-white rounded p-2 flex justify-between">
                <span>{{ $author->name }}</span>
                <span>{{ $author->posts->count() }}</span>
            </div>
        @endforeach

    </div>

</x-site-layout>
