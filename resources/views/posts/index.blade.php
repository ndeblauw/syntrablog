<x-site-layout title="Posts">

    <div class="mb-4">
        {{ $posts->links() }}
    </div>

    @foreach($posts as $post)

        <div class="bg-gray-50 rounded my-4 p-2">
            <h2 class="font-bold">{{ $post->title }}</h2>

            <div>
                {{ $post->content }}
            </div>
        </div>

    @endforeach

</x-site-layout>
