<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<!-- component -->
<!-- Root element for center items -->
<div class="flex flex-col h-screen bg-gray-100">
    <!-- Auth Card Container -->
    <div class="grid place-items-center mx-2 my-20 sm:my-auto">
        <!-- Auth Card -->
        <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 
            px-6 py-10 sm:px-10 sm:py-6 
            bg-white rounded-lg shadow-md lg:shadow-lg">

           
            <form class="mt-10" action="{{route('url.create',$id ?? '')}}" method="post">
            @csrf
                <!-- section Input -->
                <label for="section" class="block text-xs font-semibold text-gray-600 uppercase">Section</label>
                <input id="section" type="text" name="section"  autocomplete="section"
                    class="block w-full py-3 px-1 mt-2 
                    text-gray-800 appearance-none 
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required />

                <!-- date Input -->
                <label for="date" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">date</label>
                <input id="date" type="date" name="date" placeholder="date" autocomplete="current-date"
                    class="block w-full py-3 px-1 mt-2 mb-4
                    text-gray-800 appearance-none 
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required />

                <!-- Auth Buttton -->
                <button type="submit"
                    class="w-full py-3 mt-10 bg-gray-800 rounded-sm
                    font-medium text-white uppercase
                    focus:outline-none hover:bg-gray-700 hover:shadow-none">
                    Generate URL
                </button>
            </form>
        </div>
    </div>
</div>


</x-app-layout>
