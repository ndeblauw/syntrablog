<x-site-layout title="Creeer post">

    <form action="/posts" method="POST">
        @csrf

        <x-form-input name="title" placeholder="Geef een titel (min 3 tekens)" />
        <x-form-input name="author_id" label="Id van auteur" placeholder="getal tussen 1 en 10" />

        <x-form-textarea name="content" placeholder="Geef de inhoud van de post" />

        <button>Submit</button>
    </form>

</x-site-layout>
