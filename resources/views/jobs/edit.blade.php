{{-- create: Which to create a new jo0b --}}
{{-- Show : Job which is the specfic one job --}}
<x-layout>
  <x-slot:heading>
    Edit Job : {{ $job->title }}
  </x-slot:heading>

  <section class="m-4 p-6 rounded-xl border border-gray-100 shadow-sm bg-white">
    <form method="POST" action="/jobs/{{ $job->id }}">
      {{-- This will create the Token from Client and compare it with the URL session and then good to go! --}}
      @csrf 
      @method('PATCH')

      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
          <h2 class="text-base/7 font-semibold text-gray-900">Edit the existing Job</h2>
          <p class="mt-1 text-sm/6 text-gray-600">A new job that related to the real world.</p>
    
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
              <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
              <div class="mt-2">
                <div class="flex items-center rounded-md border border-gray-200 bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                  <input 
                  type="text" 
                  name="title" 
                  id="title" 
                  class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" 
                  value="{{ $job->title }}"
                  placeholder="Job title ...">
                </div>

                @error('title')
                <div class="mt-2 bg-red-50 p-4 rounded-md">
                  <p class="text-red-600">{{ $message }}</p>
                </div>
                @enderror
              </div>
            </div>
    
            <div class="sm:col-span-4">
              <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
              <div class="mt-2">
                <div class="flex items-center rounded-md border border-gray-200 bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                  <input 
                  type="text" 
                  name="salary" 
                  id="salary" 
                  class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" 
                  value="{{ $job->salary }}"
                  placeholder="$XX,XXX">
                </div>

                @error('salary')
                <div class="mt-2 bg-red-50 p-4 rounded-md">
                  <p class="text-red-600">{{ $message }}</p>
                </div>
                @enderror
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="mt-6 flex items-center justify-between gap-x-6">
        <div class="flex items-center">
          <button form="delete-form" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
            Delete
          </button>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
          <a href="/jobs/{{ $job->id }}" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
          <button type="submit" class="rounded-md bg-gray-800 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-gray-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Update</button>
        </div>
      </div>
    </form>
  </section>
  
  <form method="POST" id="delete-form" action="/jobs/{{ $job->id }}" class="hidden">
    @csrf
    @method('DELETE')
  </form>
</x-layout>