<x-layout>
  <x-slot:heading>
    Register
  </x-slot:heading>

  <section class="max-w-[900px] mx-auto m-4 p-6 rounded-xl border border-gray-100 shadow-sm bg-white">
    <form method="POST" action="/register">
      {{-- This will create the Token from Client and compare it with the URL session and then good to go! --}}
      @csrf 

      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
          <h2 class="text-base/7 font-semibold text-gray-900">Register Account</h2>
          <p class="mt-1 text-sm/6 text-gray-600">Create a new account to access the feature in the system.</p>
    
          <div class="mt-10 flex flex-col gap-4">
            <div class="flex items-center justify-between gap-4">
                {{-- First Name --}}
                <x-form-field>
                  <x-form-label for="first_name">First Name</x-form-label>
                  
                  <div class="mt-2">
                    <x-form-input name="first_name" id="first_name" placeholder="John"/>
                    <x-form-error name="first_name"/>
                  </div>
                </x-form-field>
        
                {{-- Last Name --}}
                <x-form-field>
                  <x-form-label for="last_name">Last Name</x-form-label>

                  <div class="mt-2">
                    <x-form-input name="last_name" id="last_name" placeholder="Doe"/>
                    <x-form-error name="last_name"/>
                  </div>
                </x-form-field>
            </div>

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

            {{-- Password Confirmation --}}
            <x-form-field>
              <x-form-label for="password_confirmation">Confirm Password</x-form-label>

              <div class="mt-2">
                <x-form-input name="password_confirmation" id="password_confirmation" type="password" placeholder="Confirm Password"/>
                <x-form-error name="password_confirmation"/>
              </div>
            </x-form-field>
          </div>
        </div>
      </div>
    
      <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
        <x-form-button>Register</x-form-button>
      </div>
    </form> 
  </section>
  
</x-layout> 
