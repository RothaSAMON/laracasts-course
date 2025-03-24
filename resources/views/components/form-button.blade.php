<button {{ $attributes->merge(['class'=>'rounded-md bg-gray-800 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-gray-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600', 'type' => 'submit']) }}>
  {{ $slot }}
</button>
