<x-layout>
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
</x-layout>