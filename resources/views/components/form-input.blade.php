<div>
    <label for="{{$name}}" class="block mb-2 text-sm text-gray-600 ">{{$label}}</label>
    <input type="text" name="{{$name}}" id="{{$name}}" value="{{old($name)}}" placeholder="{{$placeholder}}" class="@if($errors->has($name)) text-red-500  border-red-500 @else  border-gray-200 @endif border  p-2 rounded mb-2">
    @error($name)
    <div class="text-red-500">{{ $message }}</div>
    @enderror

</div>

