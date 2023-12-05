<div>
    <label for="{{$name}}" class="block mb-2 text-sm text-gray-600 ">{{$label}}</label>
    <textarea name="{{$name}}" id="{{$name}}" placeholder="Geef de inhoud van de post" rows="10" class="@if($errors->has($name)) text-red-500  border-red-500 @else  border-gray-200 @endif border rounded mb-2 w-full p-2">{{old($name)}}</textarea>
    @error($name)
    <div class="text-red-500">{{ $message }}</div>
    @enderror
</div>
