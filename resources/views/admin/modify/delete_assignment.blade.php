<p class="lead display-4 font-weight-bold">
    Are you sure you wish to remove this Assignment?
</p>
<form action="{{ url('/assignments/'.$assignment->id)}}" id="deleteAssignment">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
</form>