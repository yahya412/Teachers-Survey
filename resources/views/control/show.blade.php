<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            The URL has been Generated!!
        </h2>
    </x-slot>

    <div>
         
 
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
           
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <div class="card">
                        <div class="card-head">URL</div>
                        <div class="card-body">
                        
                        {{$fullUrl}}  
                        </div>
                        
                        </div>                       
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
