<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            List of Avalible Users
        </h2>
    </x-slot>


    <div>

<div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
   
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">


<table class="table-fixed">  
<thead >
<tr>
<th class="w-1/2 ...">Name</th>
<th class="w-1/4 ...">Generate Link</th>
<th class="w-1/4 ...">Make Admin</th>
</tr>
</thead>


<tbody>
@foreach($users as $user)
<tr class="bg-blue-100">

<td>{{$user->name}}</td>
<td>

    @if ($user->role===0)
    <form action="{{route('users.makeadmin',$user->id)}}" method="post">
    @csrf
    <button type="submit">Make Admin</button>
    </form>
    @endif
    @if($user->role===1)
    <form action="{{route('users.makeadmin',$user->id)}}" method="post">
    @csrf
    <button type="submit">Make User</button>
    </form>
    @endif

</td>
<td>
    <a href="{{route('url.generateurl',$user->id)}}">Generate URL</a>
</td>
 

</tr>
@endforeach 
</tbody>
</table>

</div></div></div></div></div></div>


</x-app-layout>
