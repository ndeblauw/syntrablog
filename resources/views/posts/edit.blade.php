<x-site-layout title="Editeer post">

    <form action="{{route('posts.update', $post)}}" method="POST">
        @csrf
        @method('PUT')

        <x-form-input name="title" value="{{$post->title}}" placeholder="Geef een titel (min 3 tekens)" />
        <x-form-input name="author_id" value="{{$post->author_id}}" label="Id van auteur" placeholder="getal tussen 1 en 10" />

        <x-form-textarea name="body" value="{{$post->body}}" placeholder="Geef de inhoud van de post" />

        <button>Submit</button>
    </form>

</x-site-layout>
