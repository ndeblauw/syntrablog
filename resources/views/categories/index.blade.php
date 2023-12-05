<x-site-layout title="Our categories">

    <div class="grid grid-cols-4 gap-6">
        @foreach($categories as $category)
            <div class="bg-white rounded p-2 flex justify-between">
                <a href="{{route('categories.show', ['category' => $category])}}">{{ $category->name }}</a>
                <span>{{ $category->posts->count() }}</span>
            </div>
        @endforeach
    </div>

</x-site-layout>
