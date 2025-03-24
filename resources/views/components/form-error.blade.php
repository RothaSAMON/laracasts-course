@props(['name'])

@error($name)
  <div class="mt-2 bg-red-50 p-4 rounded-md">
    <p class="text-red-600">{{ $message }}</p>
  </div>
@enderror