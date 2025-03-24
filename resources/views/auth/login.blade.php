<x-layout>
  <x-slot:heading>
    Login
  </x-slot:heading>

  <section class="m-4 p-6 rounded-xl border border-gray-100 shadow-sm bg-white">
    <form method="POST" action="/login">
      {{-- This will create the Token from Client and compare it with the URL session and then good to go! --}}
      @csrf 

      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12 space-y-4">
          <h2 class="text-base/7 font-semibold text-gray-900">Login Account</h2>
          <p class="mt-1 text-sm/6 text-gray-600">Login to access the feature in the system.</p>
    
            {{-- Email --}}
            <x-form-field>
              <x-form-label for="email">Email</x-form-label>

              <div class="mt-2">
                <x-form-input name="email" id="email" placeholder="example@gmail.com"/>
                <x-form-error name="email"/>
              </div>
            </x-form-field>

            {{-- Password --}}
            <x-form-field>
              <x-form-label for="password">Password</x-form-label>

              <div class="mt-2">
                <x-form-input name="password" id="password" type="password" placeholder="Password"/>
                <x-form-error name="password"/>
              </div>
            </x-form-field> 
          </div>
        </div>
    
      <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
        <x-form-button>Login</x-form-button>
      </div>
    </form>
  </section>
  
</x-layout> 
