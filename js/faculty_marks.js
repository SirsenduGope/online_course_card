$(document).ready(function(){

    /* ******FACULTY MARKSS ********/
           $('#f_marks_internal_div').hide();
            $('#f_marks_course').on('change',function()
             {

                $('#f_marks_subject').prop('disabled',false).material_select();
            });
             $('#f_marks_subject').on('change',function()
             {
                $('#f_marks_exam').prop('disabled',false).material_select();
            });
            $('#f_marks_exam').on('change',function()
            {
                console.log('enter')
                if($('#f_marks_exam').val()=='1')
                 {
                     $('#f_marks_internal_div').show();
                 }
                else{
                    $('#f_marks_year').prop('disabled',false).material_select();
                    $('#f_marks_internal_div').hide();
                }

            });
            $('#f_marks_internal').on('change',function()
                                  {
                $('#f_marks_year').prop('disabled',false).material_select();
            });
    /* *************** Student DETAILS ***************/
         $('#f_std_course').on('change',function()
            {
                if($('#f_std_course').val()=='1')
                 {
                     $('#3rd').prop('disabled',false);

                 }
             else if($('#f_std_course').val()=='2' || $('#f_std_course').val()=='3')
                 {
                     $('#3rd').prop('disabled',true);
                 }

                    $('#f_std_year').prop('disabled',false).material_select();
            });
        $('#f_std_year').on('change',function()
            {
                $('#f_std_semester').prop('disabled',false).material_select();
            });
        $('#f_std_semester').on('change',function()
            {
                $('#f_std_subject').prop('disabled',false).material_select();
            });

    /* ******************************************************* */
});
