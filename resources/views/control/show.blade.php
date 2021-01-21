<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            The URL has been Generated!!
        </h2>
    </x-slot>

  <!-- component -->
<div class="flex items-center h-screen w-full justify-center">

<div class="max-w-xs">
    <div class="bg-white shadow-xl rounded-lg py-3">
        
        <div class="p-2">
            <h3 class="text-center text-xl text-gray-900 font-medium leading-8">URL has been Generated</h3>
            <div class="text-center text-gray-400 text-xs font-semibold">
               
            </div>
            <td class="px-2 py-2  font-semibold"><a href="{{$fullUrl}}">{{$fullUrl}}</a></td>

           

            

        </div>
    </div>
</div>

</div>
</x-app-layout>
