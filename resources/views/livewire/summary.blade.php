<div>
  @foreach($data as $result)
  <br>{{$result->name}}
  {{$result->section}}
  {{$result->date}}
  {{$result->url}}
  {{$result->count ?? 0}}<br>
  
  
  
  @endforeach
   </div>




