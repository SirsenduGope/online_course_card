$(document).ready(function(){
    console.log("hf");
    $('#add').click(function()
  {
    console.log("hfejk");
      var same=$('#primary_add').val();
      alert(same);
      $('#local_add').val(same).material_textarea;
  })
});
