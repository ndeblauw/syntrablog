@if(session()->has('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-4" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session()->get('success') }}</span>
    </div>
@endif

@if(session()->has('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative my-4" role="alert">
        <strong class="font-bold">Error!</strong>
        <span class="block sm:inline">{{ session()->get('error') }}</span>
    </div>
@endif
