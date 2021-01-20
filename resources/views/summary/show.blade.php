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
        <div class="col-6 col-md-6 col-sm-6" style="width:5%; display:inline-table;" >
        <table style="width:25% " class="table table-striped table-bordered table-res">
  <tr>
    
    <th>Questions</th>
    
   </tr>   

   
   <tr>يعرض الاستاذ المراجع الاساسية للمقرر على الطلاب في بداية الفصل الدراسي؟</tr>
   <tr>يعرض الاستاذ اهداف المقرر على الطلاب في أول محاضرة؟</tr>
   <tr>ينفذ الاستاذ خطة المقرر كما خطط لها في بداية الفصل الدراسي؟</tr>
   <tr>تبداء المحاضرة وتنتهي في موعدها المحدد؟</tr>
   <tr>طريقة تدريس المقرر تحفز الطلاب على المشاركة وابداء الرأي؟</tr>
   <tr>تتناسب اسئلة الاختبارات مع طريقة وأسلوب المدرس؟</tr>
   <tr>يسمح استاذ المقرر بمراجعة الطلاب لنتائج اختبارتهم؟</tr>
   <tr>استاذ المقرر متمكن من مادة العلمية؟</tr>
   <tr>يبداء استاذ المقرر وينتهي بنفس الدرجة من النشاط والحيوية؟</tr>
   <tr>اشعر بالرضى بشكل عام على استاذ المقرر؟</tr>
   
   
       </table>
       
        <table style="width:25% " class="table table-striped table-bordered table-res">
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
        </div>

   
   
<div class="col-6 col-md-6 col-sm-6" style="width:40%; display:inline-table;">
<table style="width:25% " class="table table-striped table-bordered table-res">
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
</div>







</x-app-layout>
