<form class="pt-3" role="form" action="{{ url('/assignments/'.$assignment->id)}}" id="editAssignment" >
    @csrf
    
    <div class="form-group">
      <input type="text" class="form-control text-capitalize" name="course_code" 
      placeholder="Course Code" required autocomplete="course_code">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="title" 
      placeholder="Title" required autocomplete="title">
    </div>
    <div class="form-group">
      <textarea name="body" id=""  class="form-control" autocomplete="body" required cols="30" rows="10">
        Assignment Body body goes here...
      </textarea>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="due_date" 
      placeholder="Due Date" required autocomplete="due_date" onfocus="(this.type='date')" 
      onblur="(this.type='text')">
    </div>
    <div class="form-group">
      <input type="number" class="form-control" name="total_mark" 
      placeholder="Total Mark" required autocomplete="total_mark">
    </div>
    <div class="form-group">
      <select name="status" id="" class="form-control" required>
        <option value="" selected disabled>Select Status</option>
        <option value="0">Pending</option>
        <option value="1">In Progress</option>
        <option value="2">Completed</option>
      </select>
    </div>
    <input type="hidden" name="_method" value="PUT">
</form>