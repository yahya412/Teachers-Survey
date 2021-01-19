


<form action="{{route('url.create',$id ?? '')}}" method="post">
@csrf
  
  <div class="form-group">
    <label for="section">Section</label>
    <input name ="section" type="text" class="form-control" id="section" placeholder="section">
  </div>
  <div class="form-group">
    <label for="date">date</label>
    <input name ="date" type="date" class="form-control" id="date" placeholder="date">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>