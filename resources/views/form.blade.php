<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mada&display=swap" rel="stylesheet">  
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>body{font-family: 'Mada', sans-serif;}</style>
    <title>نموذج استبيان</title>
</head>
<body >
    
    <div class="container">
    <div class="row p-5">
    <div class="col-4"><label class="p-3"><strong>مدرس المادة</strong></label> {{$u1->user->name}}</div>
    <div class="col-4"><label class="p-3"><strong>الشعبه</strong></label> {{$u1->section}} </div>
    <div class="col-4"><label class="p-3"><strong> التاريخ</strong></label> {{$u1->date}}</div>
    </div>
    <div class="row">
<form action="{{route('questions.create',$u1->id)}}" method="post">
@csrf

  
  
<div class="">
    <div class="label">يعرض الاستاذ المراجع الاساسية للمقرر على الطلاب في بداية الفصل الدراسي؟</div>
    
    <div>
    <input class="ms-2" type="radio" name="q1" value=1 {{ old('q1') == "1" ? 'checked' : '' }}><lable class="ms-5">لا أوافق بشدة</lable>
    <input class="ms-2" type="radio" name="q1" value=2 {{ old('q1') == "2" ? 'checked' : '' }}><lable class="ms-5">لا أوافق</lable>
    <input class="ms-2" type="radio" name="q1" value=3 {{ old('q1') == "3" ? 'checked' : '' }}><lable class="ms-5">صحيح لحد ما</lable>
    <input class="ms-2" type="radio" name="q1" value=4 {{ old('q1') == "4" ? 'checked' : '' }}><lable class="ms-5">أوافق</lable>
    <input class="ms-2" type="radio" name="q1" value=5 {{ old('q1') == "5" ? 'checked' : '' }}><lable class="ms-5">أوافق بشدة</lable>
    @error('q1')
    <small class="text-danger">حقل مطلوب</small>
    @enderror
    </div>

    
</div>
<br>
<br>
<div class="">
    <div class="label">يعرض الاستاذ اهداف المقرر  على الطلاب في أول محاضرة؟</div>
    <div>
    <input class="ms-2" type="radio" name="q2" value=1 {{ old('q2') == "1" ? 'checked' : '' }}><lable class="ms-5">لا أوافق بشدة</lable>
    <input class="ms-2" type="radio" name="q2" value=2 {{ old('q2') == "2" ? 'checked' : '' }}><lable class="ms-5">لا أوافق</lable>
    <input class="ms-2" type="radio" name="q2" value=3 {{ old('q2') == "3" ? 'checked' : '' }}><lable class="ms-5">صحيح لحد ما</lable>
    <input class="ms-2" type="radio" name="q2" value=4 {{ old('q2') == "4" ? 'checked' : '' }}><lable class="ms-5">أوافق</lable>
    <input class="ms-2" type="radio" name="q2" value=5 {{ old('q2') == "5" ? 'checked' : '' }}><lable class="ms-5">أوافق بشدة</lable>
    @error('q2')
    <small class="text-danger">حقل مطلوب</small>
    @enderror
    </div>

</div>
<br>
<br>
<div class="">
    <div class="label">ينفذ الاستاذ خطة المقرر كما خطط لها في بداية الفصل الدراسي؟</div>
    
    <div>
    <input class="ms-2" type="radio" name="q3" value=1 {{ old('q3') == "1" ? 'checked' : '' }}><lable class="ms-5">لا أوافق بشدة</lable>
    <input class="ms-2" type="radio" name="q3" value=2 {{ old('q3') == "2" ? 'checked' : '' }}><lable class="ms-5">لا أوافق</lable>
    <input class="ms-2" type="radio" name="q3" value=3 {{ old('q3') == "3" ? 'checked' : '' }}><lable class="ms-5">صحيح لحد ما</lable>
    <input class="ms-2" type="radio" name="q3" value=4 {{ old('q3') == "4" ? 'checked' : '' }}><lable class="ms-5">أوافق</lable>
    <input class="ms-2" type="radio" name="q3" value=5 {{ old('q3') == "5" ? 'checked' : '' }}><lable class="ms-5">أوافق بشدة</lable>
    @error('q3')
    <small class="text-danger">حقل مطلوب</small>
    @enderror
    </div>

</div>
<br>
<br>
<div class="">
    <div class="label">تبداء المحاضرة وتنتهي في موعدها المحدد؟</div>
    <div>
    <input class="ms-2" type="radio" name="q4" value=1 {{ old('q4') == "1" ? 'checked' : '' }}><lable class="ms-5">لا أوافق بشدة</lable>
    <input class="ms-2" type="radio" name="q4" value=2 {{ old('q4') == "2" ? 'checked' : '' }}><lable class="ms-5">لا أوافق</lable>
    <input class="ms-2" type="radio" name="q4" value=3 {{ old('q4') == "3" ? 'checked' : '' }}><lable class="ms-5">صحيح لحد ما</lable>
    <input class="ms-2" type="radio" name="q4" value=4 {{ old('q4') == "4" ? 'checked' : '' }}><lable class="ms-5">أوافق</lable>
    <input class="ms-2" type="radio" name="q4" value=5 {{ old('q4') == "5" ? 'checked' : '' }}><lable class="ms-5">أوافق بشدة</lable>
    @error('q4')
    <small class="text-danger">حقل مطلوب</small>
    @enderror
    </div>
</div>
<br>
<br>
<div class="">
    <div class="label">طريقة تدريس المقرر تحفز الطلاب على المشاركة وابداء الرأي؟</div>
    <div>
    <input class="ms-2" type="radio" name="q5" value=1 {{ old('q5') == "1" ? 'checked' : '' }}><lable class="ms-5">لا أوافق بشدة</lable>
    <input class="ms-2" type="radio" name="q5" value=2 {{ old('q5') == "2" ? 'checked' : '' }}><lable class="ms-5">لا أوافق</lable>
    <input class="ms-2" type="radio" name="q5" value=3 {{ old('q5') == "3" ? 'checked' : '' }}><lable class="ms-5">صحيح لحد ما</lable>
    <input class="ms-2" type="radio" name="q5" value=4 {{ old('q5') == "4" ? 'checked' : '' }}><lable class="ms-5">أوافق</lable>
    <input class="ms-2" type="radio" name="q5" value=5 {{ old('q5') == "5" ? 'checked' : '' }}><lable class="ms-5">أوافق بشدة</lable>
    @error('q5')
    <small class="text-danger">حقل مطلوب</small>
    @enderror
    </div>
</div>
<br>
<br>
<div class="">
    <div class="label">تتناسب اسئلة الاختبارات مع طريقة وأسلوب المدرس؟</div>
    
    <div>
    <input class="ms-2" type="radio" name="q6" value=1 {{ old('q6') == "1" ? 'checked' : '' }}><lable class="ms-5">لا أوافق بشدة</lable>
    <input class="ms-2" type="radio" name="q6" value=2 {{ old('q6') == "2" ? 'checked' : '' }}><lable class="ms-5">لا أوافق</lable>
    <input class="ms-2" type="radio" name="q6" value=3 {{ old('q6') == "3" ? 'checked' : '' }}><lable class="ms-5">صحيح لحد ما</lable>
    <input class="ms-2" type="radio" name="q6" value=4 {{ old('q6') == "4" ? 'checked' : '' }}><lable class="ms-5">أوافق</lable>
    <input class="ms-2" type="radio" name="q6" value=5 {{ old('q6') == "5" ? 'checked' : '' }}><lable class="ms-5">أوافق بشدة</lable>
    @error('q6')
    <small class="text-danger">حقل مطلوب</small>
    @enderror
    </div>
</div>
<br>
<br>
<div class="">
    <div class="label">يسمح استاذ المقرر بمراجعة الطلاب لنتائج اختبارتهم؟</div>
    <div>
    <input class="ms-2" type="radio" name="q7" value=1 {{ old('q7') == "1" ? 'checked' : '' }}><lable class="ms-5">لا أوافق بشدة</lable>
    <input class="ms-2" type="radio" name="q7" value=2 {{ old('q7') == "2" ? 'checked' : '' }}><lable class="ms-5">لا أوافق</lable>
    <input class="ms-2" type="radio" name="q7" value=3 {{ old('q7') == "3" ? 'checked' : '' }}><lable class="ms-5">صحيح لحد ما</lable>
    <input class="ms-2" type="radio" name="q7" value=4 {{ old('q7') == "4" ? 'checked' : '' }}><lable class="ms-5">أوافق</lable>
    <input class="ms-2" type="radio" name="q7" value=5 {{ old('q7') == "5" ? 'checked' : '' }}><lable class="ms-5">أوافق بشدة</lable>
    @error('q7')
    <small class="text-danger">حقل مطلوب</small>
    @enderror
    </div>
</div>
<br>
<br>
<div class="">
    <div class="label">استاذ المقرر متمكن من مادة العلمية؟</div>
    
    <div>
    <input class="ms-2" type="radio" name="q8" value=1 {{ old('q8') == "1" ? 'checked' : '' }}><lable class="ms-5">لا أوافق بشدة</lable>
    <input class="ms-2" type="radio" name="q8" value=2 {{ old('q8') == "2" ? 'checked' : '' }}><lable class="ms-5">لا أوافق</lable>
    <input class="ms-2" type="radio" name="q8" value=3 {{ old('q8') == "3" ? 'checked' : '' }}><lable class="ms-5">صحيح لحد ما</lable>
    <input class="ms-2" type="radio" name="q8" value=4 {{ old('q8') == "4" ? 'checked' : '' }}><lable class="ms-5">أوافق</lable>
    <input class="ms-2" type="radio" name="q8" value=5 {{ old('q8') == "5" ? 'checked' : '' }}><lable class="ms-5">أوافق بشدة</lable>
    @error('q8')
    <small class="text-danger">حقل مطلوب</small>
    @enderror
    </div>
</div>
<br>
<br>
<div class="">
    <div class="label">يبداء استاذ المقرر وينتهي بنفس الدرجة من النشاط والحيوية؟</div>
    
    <div>
    <input class="ms-2" type="radio" name="q9" value=1 {{ old('q9') == "1" ? 'checked' : '' }}><lable class="ms-5">لا أوافق بشدة</lable>
    <input class="ms-2" type="radio" name="q9" value=2 {{ old('q9') == "2" ? 'checked' : '' }}><lable class="ms-5">لا أوافق</lable>
    <input class="ms-2" type="radio" name="q9" value=3 {{ old('q9') == "3" ? 'checked' : '' }}><lable class="ms-5">صحيح لحد ما</lable>
    <input class="ms-2" type="radio" name="q9" value=4 {{ old('q9') == "4" ? 'checked' : '' }}><lable class="ms-5">أوافق</lable>
    <input class="ms-2" type="radio" name="q9" value=5 {{ old('q9') == "5" ? 'checked' : '' }}><lable class="ms-5">أوافق بشدة</lable>
    @error('q9')
    <small class="text-danger">حقل مطلوب</small>
    @enderror
    </div>
</div>
<br>
<br>
<div class="">
    <div class="label">اشعر بالرضى بشكل عام على استاذ المقرر؟</div>
    
    <div>
    <input class="ms-2" type="radio" name="q10" value=1 {{ old('q10') == "1" ? 'checked' : '' }}><lable class="ms-5">لا أوافق بشدة</lable>
    <input class="ms-2" type="radio" name="q10" value=2 {{ old('q10') == "2" ? 'checked' : '' }}><lable class="ms-5">لا أوافق</lable>
    <input class="ms-2" type="radio" name="q10" value=3 {{ old('q10') == "3" ? 'checked' : '' }}><lable class="ms-5">صحيح لحد ما</lable>
    <input class="ms-2" type="radio" name="q10" value=4 {{ old('q10') == "4" ? 'checked' : '' }}><lable class="ms-5">أوافق</lable>
    <input class="ms-2" type="radio" name="q10" value=5 {{ old('q10') == "5" ? 'checked' : '' }}><lable class="ms-5">أوافق بشدة</lable>
    @error('q10')
    <small class="text-danger">حقل مطلوب</small>
    @enderror
    </div>
</div>
<br>
<br>
<div class="">
    <div class="label">ملاحظات عامة أو رسالة تود تقديمها لمدرس المادة:</div>
    <textarea  name="qn" cols=50 rows=4 ></textarea>
    @error('qn')
    <small class="text-danger">حقل مطلوب</small>
    @enderror
</div>
<br>
<br>



  <button type="submit" class="btn btn-primary">أرسال</button>
</form>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</div>
</div>
</body>
</html>