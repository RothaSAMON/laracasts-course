{{-- index: Jobs which is listing all the Jobs --}}
<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($jobs as $job)
            <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200">
                <!-- Image Section -->
                <img 
                src="https://cdn.dribbble.com/userupload/26417037/file/original-5fd418dbaf23b364eb0158e7340b8244.png?format=webp&resize=400x300&vertical=center" 
                alt="cover" 
                class="w-full h-48 object-cover rounded-lg"
                >
                <!-- Job Details Section -->
                <div class="p-6">
                    <p class="font-bold text-gray-700">{{ $job->employer->name }}</p>

                    <h3 class="text-lg font-semibold text-blue-600 mt-2">
                        <a href="/jobs/{{ $job['id'] }}" class="hover:underline">{{ $job['title'] }}</a>
                    </h3>
                    <p class="text-gray-500 mt-2">Pays {{ $job['salary'] }} per year.</p>
                </div>
            </div>
        @endforeach

    </div>
    <div class="my-6">
        {{ $jobs->links() }}
    </div>
</x-layout>

