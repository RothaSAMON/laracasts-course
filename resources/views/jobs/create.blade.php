{{-- create: Which to create a new jo0b --}}
{{-- Show : Job which is the specfic one job --}}
<x-layout>
  <x-slot:heading>
    Create Job
  </x-slot:heading>

  <section class="m-4 p-6 rounded-xl border border-gray-100 shadow-sm bg-white">
    <form method="POST" action="/jobs">
      {{-- This will create the Token from Client and compare it with the URL session and then good to go! --}}
      @csrf 

      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
          <h2 class="text-base/7 font-semibold text-gray-900">Create a New Job</h2>
          <p class="mt-1 text-sm/6 text-gray-600">A new job that related to the real world.</p>
    
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <x-form-field>
              {{-- <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label> --}}
              <x-form-label for="title">Title</x-form-label>
              
              <div class="mt-2">
                {{-- <div class="flex items-center rounded-md border border-gray-200 bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                  <input type="text" name="title" id="title" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Job title ...">
                </div> --}}
                <x-form-input name="title" id="title" placeholder="Job title ..."/>

                {{-- @error('title')
                <div class="mt-2 bg-red-50 p-4 rounded-md">
                  <p class="text-red-600">{{ $message }}</p>
                </div>
                @enderror --}}
                <x-form-error name="title"/>
              </div>
            </x-form-field>
    
            <x-form-field>
              {{-- <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label> --}}
              <x-form-label for="salary">Salary</x-form-label>

              <div class="mt-2">
                {{-- <div class="flex items-center rounded-md border border-gray-200 bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                  <input type="text" name="salary" id="salary" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="$XX,XXX">
                </div> --}}
                <x-form-input name="salary" id="salary" placeholder="$XXX,XXX"/>

                {{-- @error('salary')
                <div class="mt-2 bg-red-50 p-4 rounded-md">
                  <p class="text-red-600">{{ $message }}</p>
                </div>
                @enderror --}}
                <x-form-error name="salary"/>
              </div>
            </x-form-field>
          </div>

          {{-- @if ($errors->any())
          <div class="mt-6 bg-red-50 p-4 rounded-md">
            <ul>
              @foreach (@$errors->all() as $error )
                <li class="text-red-600">{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif --}}
        </div>
      </div>
    
      <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/jobs" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
        <x-form-button>Save</x-form-button>
      </div>
    </form>
  </section>
  
</x-layout>