<x-app-layout>
 
<div class="p-0 m-0 flex justify-center">
  
   
  <div>
   <table  class="table-fixed">
     <tr>
       <th>1</th>
       <th>2</th>
       <th>3</th>
       <th>4</th>
       <th>5</th>
       <th>avrage</th>

      </tr>
   
     @foreach( $data_show as $x => $y)
     <tr class="bg-emerald-200">
               @foreach ($y as $a => $b)
              
                   @foreach($b as $c => $e)
                   
                       @foreach($e as $m=>$n)
     
                       <td class="text-center"> 

                        @if (strpos($m,'total')!==false)

                        {{number_format($n/$count*100, 2, '.', ',')}}@if($n >0 )% @endif 

                        @else
                        {{number_format($n/$count,2,'.',',')}}
                        @endif


                        </td>


        

                        @endforeach
       
                   @endforeach
                  
               @endforeach
               </tr>         
     @endforeach
     
   </table> 
   </div>
   <div>
<table >
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
     
</div>

</x-app-layout>
