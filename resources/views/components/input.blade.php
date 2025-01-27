@props(['placeholder','type','id','name','value'])

<div class="mt-2 w-full">
    <input value="{{$value ?? ''}}" placeholder="{{ $placeholder }}" type={{$type}} id="{{$id}}" name="{{$name}}"
        rows="3" class="block w-full rounded-md border-0 py-1.5 px-4
        text-gray-900 shadow-sm ring-1 ring-inset
         ring-gray-300 placeholder:text-gray-400
         focus:ring-2 focus:ring-inset focus:ring-indigo-600
         sm:text-sm sm:leading-6" />
</div>