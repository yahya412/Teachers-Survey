<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Survey Details
        </h2>
    </x-slot>



    <div class="container-fluid">
    <div class="block mb-8">
                <a href="{{route('summary.index')}}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Main Page</a>
            </div>
    <div class="row ">
        
        <table style="width:60% " class="table table-striped table-bordered table-res">
  <tr>
    
    <th>Questions</th>
    
   </tr>   

   
   <tr><td>يعرض الاستاذ المراجع الاساسية للمقرر على الطلاب في بداية الفصل الدراسي؟</td></tr>
   <tr><td>يعرض الاستاذ اهداف المقرر على الطلاب في أول محاضرة؟</td></tr>
   <tr><td>ينفذ الاستاذ خطة المقرر كما خطط لها في بداية الفصل الدراسي؟</td></tr>
   <tr><td>تبداء المحاضرة وتنتهي في موعدها المحدد؟</td></tr>
   <tr><td>طريقة تدريس المقرر تحفز الطلاب على المشاركة وابداء الرأي؟</td></tr>
   <tr><td>تتناسب اسئلة الاختبارات مع طريقة وأسلوب المدرس؟</td></tr>
   <tr><td>يسمح استاذ المقرر بمراجعة الطلاب لنتائج اختبارتهم؟</td></tr>
   <tr><td>استاذ المقرر متمكن من مادة العلمية؟</td></tr>
   <tr><td>يبداء استاذ المقرر وينتهي بنفس الدرجة من النشاط والحيوية؟</td></tr>
   <tr><td>اشعر بالرضى بشكل عام على استاذ المقرر؟</td></tr>
   
   
       </table>
      
        <table style="width:29% " class="table table-striped table-bordered table-res">
  <tr>
    
    <th>Avrage</th>
    
   </tr>   
           
            @foreach($data as $d)
                @foreach($d as $a)
                <tr> 
                  <td class="text-center"> {{number_format($a, 2, '.', ',')}} </td>
                  </tr>
                @endforeach
            @endforeach
        
        
        
            </table> 
        

   
   
<table style="width:10% " class="table table-striped table-bordered table-res">
  <tr>
    
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
   </tr>

  @foreach( $data_show as $x => $y)
  <tr>
            @foreach ($y as $a => $b)
           
                @foreach($b as $c => $e)
                
                    @foreach($e as $m=>$n)
  
 
    
    <td class="text-center"> {{$n}} </td>
    
                     @endforeach
    
                @endforeach
               
            @endforeach
            </tr>         
  @endforeach
  
</table> 
</div>








</x-app-layout>
