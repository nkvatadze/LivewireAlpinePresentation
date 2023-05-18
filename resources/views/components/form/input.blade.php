<input placeholder="{{ $placeholder }}" type="{{ $type }}"
       {{ $attributes->merge(['class'=>"border px-2  rounded-md py-1.5 w-full " . ($errors->has($name) ? 'border-red-600' : 'border-gray-300')]) }}
       name="{{ $name }}" id="{{ $id }}">
@error($name) <span class="text-red-600">{{ $message }}</span> @enderror
