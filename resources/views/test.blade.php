

@foreach($data as $d)

@endforeach








@foreach( $data_show as $x => $y)
    
    @foreach ($y as $a => $b)

        @foreach($b as $c => $e)
            @foreach($e as $m=>$n)
        
        {{$n}}

            @endforeach
        @endforeach
    @endforeach
<br> 

@endforeach


