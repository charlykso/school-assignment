{{-- <script>
    $('body').on('keyup', '#searchAssignment', function(){
        var searchRequest= $(this).val();
        
        $.ajax({
            method: 'POST',
            url: '{{ route("search")}}',
            dataType: 'json',
            data: {
                '_token': '{{ csrf_token() }}',
                searchRequest: searchRequest
            },
            success: function(res) {
                console.log(res);
                var tableRow = '';
                // $('#forSearch').html('');
                $('#forSearch').filter();

                // run jquery forech
                $.each(res, function(index, value) {
                    tableRow = '<tr>'+
                        '<td class="align-middle text-center"><span class="text-xs ">'+value.full_name+ ' </span></td>'+
                        '<td class="align-middle text-center"><span class="text-xs ">' +value.course_code+ '</span></td>'+
                        '<td class="align-middle text-center"><span class="text-xs ">'+value.title+'</span></td>'+
                        '<td class="align-middle text-center"><span class="text-xs " style="width: 10rem; word-wrap:break-word">'+value.body+'</span></td>'+
                        '<td class="align-middle text-center"><span class="text-xs ">'+value.due_date+'</span></td>'+
                        'if ('+value.status == 0 +')'+
                        '<td class="align-middle text-center text-sm"> <span class="badge badge-sm bg-gradient-info">Pending</span></td>'+
                        'else'+
                            'if (' +value.status == 1+')'+
                                '<td class="align-middle text-center text-sm"><span class="badge badge-sm bg-gradient-secondary">In Progress</span></td>'+
                            'else'+
                                '<td class="align-middle text-center text-sm"><span class="badge badge-sm bg-gradient-success">Completed</span></td>'+
                            'endif'+
                        'endif'+
                        '<td class="align-middle text-center">'+
                          '<a href="" class=" font-weight-bold editUserBtn" data-toggle="modal" data-target="#editAssignment'+value.id+' data-id="'+value.id+'">'+
                              '<i class="ti-pencil text-bold text-info"></i>'+
                          '</a>'+
                          '<a href="" class="text-danger font-weight-bold editUserBtn" data-toggle="modal" data-target="#deleteAssignment'+value.id+'" data-id="'+value.id+'}">'+
                            '<i class="ti-trash text-bold text-danger"></i>'+
                          '</a>'+
                          
                          '<div class="modal fade" id="editAssignment'+value.id+'" tabindex="-1" role="dialog" aria-hidden="true">'+
                            '<div class="modal-dialog" role="document">'+
                              '<div class="modal-content">'+
                                '<div class="modal-header">'+
                                  '<h4 class="modal-title text-primary" >Edit Assignment</h4>'+
                                  '<a class="close" type="button" data-dismiss="modal" aria-label="Close">'+
                                    '<i class="ti-close opacity-10 text-info"></i>'+
                                  '</a>'+
                                '</div>'+
                                '<div class="modal-body" id="editAssignmentModalBody">'+
                                  '<form class="pt-3" role="form" method="POST" action="/assignments/'+value.id+'" id="editAssignment" >'+
                                    '@csrf'+
                                    
                                    '<div class="form-group">'+
                                      '<input type="text" class="form-control text-capitalize" name="course_code" '+
                                      'placeholder="Course Code" required autocomplete="course_code" value="'+value.course_code+'">'+
                                    '</div>'+
                                    '<div class="form-group">'+
                                      '<input type="text" class="form-control" name="title" '+
                                      'placeholder="Title" required autocomplete="title" value="'+value.title+'">'+
                                    '</div>'+
                                    '<div class="form-group">'+
                                      '<textarea name="body" id=""  class="form-control" value="" autocomplete="body" required cols="30" rows="10">'+
                                        ''+value.body+''+
                                      '</textarea>'+
                                    '</div>'+
                                    '<div class="form-group">'+
                                      '<input type="text" class="form-control" name="due_date" '+
                                      'placeholder="Due Date" required autocomplete="due_date" onfocus="'+(this.type='date')+'"' +
                                      'onblur="'+(this.type='text')+'" value="'+value.due_date+'">'+
                                    '</div>'+
                                    '<div class="form-group">'+
                                      '<input type="number" class="form-control" name="total_mark" '+
                                      'placeholder="Total Mark" required autocomplete="total_mark" value="'+value.total_mark+'">'+
                                    '</div>'+
                                    '<div class="form-group">'+
                                      '<select name="status" id="" class="form-control" required>'+
                                        'if ('+value.status == 0+')'+
                                          '<option value="0" selected>Pending</option>'+
                                          '<option value="1">In Progress</option>'+
                                          '<option value="2">Completed</option>'+
                                        'endif'+
                                        'if ('+value.status == 1+')'+
                                          '<option value="0" >Pending</option>'+
                                          '<option value="1" selected>In Progress</option>'+
                                          '<option value="2">Completed</option>'+
                                        'endif'+
                                        'if ('+value.status == 2+')'+
                                          '<option value="0">Pending</option>'+
                                          '<option value="1">In Progress</option>'+
                                          '<option value="2" selected>Completed</option>'+
                                        'endif'+
                                        
                                      '</select>'+
                                    '</div>'+
                                    '<input type="hidden" name="_method" value="PUT">'+
                                
                                '</div>'+
                                '<div class="modal-footer">'+
                                  '<div class="row">'+
                                    '<div class="col-md-12">'+
                                      '<button type="submit" class="btn btn-primary btn-md font-weight-medium auth-form-btn">'+
                                        'Save'+
                                      '</button>'+
                                    '</div>'+
                                  '</div>'+
                                '</div>'+
                              '</form>'+
                              '</div>'+
                            '</div>'+
                          '</div>'+

                        '</td>'+
                        '<!--Delete Assignment-->'+
                        '<div class="modal fade" id="deleteAssignment'+value.id+'" tabindex="-1" role="dialog" aria-hidden="true">'+
                          '<div class="modal-dialog" role="document">'+
                            '<div class="modal-content">'+
                              '<div class="modal-header">'+
                                '<h4 class="modal-title text-primary" >Delete Assignment</h4>'+
                                '<a class="close" type="button" data-dismiss="modal" aria-label="Close">'+
                                  '<i class="ti-close opacity-10 text-info"></i>'+
                                '</a>'+
                              '</div>'+
                              '<div class="modal-body" id="DeleteAssignmentModalBody">'+
                                '<p class="lead display-4 font-weight-bold">'+
                                '  Are you sure you wish to remove this "'+value.course_code+'" Assignment?'+
                                '</p>'+
                                '<form method="POST" action="/assignments/'+value.id+'" id="deleteAssignment">'+
                                    '@csrf'+
                                   ' <input type="hidden" name="_method" value="DELETE">'+
                                
                              '</div>'+
                              '<div class="modal-footer">'+
                                '<div class="row">'+
                                  '<div class="col-md-12">'+
                                    '<button type="submit" class="btn btn-danger btn-md font-weight-medium auth-form-btn">'+
                                      'Yes'+
                                    '</button>'+
                                  '</div>'+
                                '</div>'+
                              '</div>'+
                            '</form>'+
                            '</div>'+
                          '</div>'+
                        '</div>'+
                      '</tr>';


                    //   console.log(tableRow);
                    $('#forSearch').append(tableRow);
                });
            }
        });
    });
</script> --}}
<script>
function searchAssignment() {
    // Declare variables 
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchAssignment");
    filter = input.value.toUpperCase();
    table = document.getElementById("assignmentTable");
    tr = table.getElementsByTagName("tr");
  
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      } 
    }
  }
  </script>

{{-- <script>
    $('#search').on('keyup',function(){
        $value = $(this).val();
        $.ajax({
            type : 'get',
            url : '{{URL::to('search')}}',
            data : {'search':$value},
            success : function(data){
                $('tbody').html(data);
            }
        });
    })
</script>
<script>
    $.ajaxSetup({headers: {'csrftoken':'{{csrf_token()}}'}});
</script> --}}