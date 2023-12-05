<x-site-layout title="Category: {{$category->name}}">

    <h2 class="font-bold text-4xl">Posts for this category</h2>

    @foreach($category->posts as $post)

        <div class="bg-gray-50 rounded my-4 p-2">
            <div class="flex justify-between">
                <div>
                    <h2 class="font-bold">{{ $post->title }} ({{$post->id}}</h2>
                    <h3 class="text-purple-500">{{ $post->author->name }}</h3>
                </div>
                <div>
                    @forelse($post->categories as $category)
                        <span class="bg-purple-200 text-purple-500 rounded-full px-2 py-1 text-xs font-bold mr-2">{{ $category->name }}</span>
                    @empty
                        NIKS
                    @endforelse
                </div>

            </div>

            <div>
                {{ Str::limit($post->body,50) }}
            </div>
        </div>

    @endforeach


</x-site-layout>
