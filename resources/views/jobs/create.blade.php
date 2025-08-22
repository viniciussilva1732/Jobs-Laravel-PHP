<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    
<form method="POST" action="/jobs" class="mt-10">
    @csrf
    
  <div class="space-y-12">
    <div class="border-b border-black/10 pb-12">
      <h2 class="text-base/7 font-semibold text-black">Create a New Job</h2>
      <p class="mt-1 text-sm/6 text-black-400">We just need a handful of details from you.</p>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="title" class="block text-sm/6 font-medium text-black">Title</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-black/5 pl-3 outline-1 -outline-offset-1 outline-black/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
              <input id="title" type="text" name="title" placeholder="Shift Leader" class="block min-w-0 grow bg-transparent py-1.5 pr-3 px-3 text-base text-black placeholder:text-gray-500 focus:outline-none sm:text-sm/6" required/>
            </div>

            @error('title')
                <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
              
            @enderror
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="salary" class="block text-sm/6 font-medium text-black">Salary</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-black/5 pl-3 outline-1 -outline-offset-1 outline-black/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
              <input id="salary" type="text" name="salary" placeholder="$50,000 Per Year" class="block min-w-0 grow bg-transparent py-1.5 pr-3 px-3 text-base text-black placeholder:text-gray-500 focus:outline-none sm:text-sm/6" required />
            </div>

             @error('salary')
                <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
              
            @enderror
          </div>
        </div>

        {{-- 
        @if ($errors->any())
            <div class="sm:col-span-6">
          <div class="bg-red-50 border-l-4 border-red-400 p-4">
              <h3 class="text-sm font-medium text-red-800">There were some problems with your input.</h3>
              <ul class="mt-2 text-sm text-red-700 list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
              </ul>
          </div>
            </div>
        @endif
        --}}

        
      </div>
    </div>


    
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm/6 font-semibold text-black">Cancel</button>
    <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-black focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
  </div>
</form>


</x-layout>
