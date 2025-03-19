{{-- <x-layout>
  <x-slot:heading>
    Job Listings
  </x-slot:heading>

  <ul>
    @foreach ($jobs as $job)
    <li li>
      <a href="/jobs/{{ $job['id'] }}">
        <strong class="text-blue-600 hover:underline">{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year.
      </a>
    </li>
    @endforeach
  </ul>
</x-layout> --}}

<x-layout>
  <x-slot:heading>
      Job Listings
  </x-slot:heading>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach ($jobs as $job)
          <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200">
              <h3 class="text-lg font-semibold text-blue-600">
                  <a href="/jobs/{{ $job['id'] }}" class="hover:underline">{{ $job['title'] }}</a>
              </h3>
              <p class="text-gray-700 mt-2">Pays {{ $job['salary'] }} per year.</p>
          </div>
      @endforeach
  </div>
</x-layout>

