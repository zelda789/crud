$('#txtcari').focus(function(event) {

   $.ajax({
     type:"get",
     url:"../crud/cari.php",
     data:"q=",
     success: function(data){
      $("#hasil").html(data);
     }
    });


  });





  $("#txtcari").keyup(function(e) {
    
   var strcari = $("#txtcari").val(); 
   if (strcari != "") 
   {
    
    $("#hasil").html() 

    $.ajax({
     type:"get",
     url:"../crud/cari.php",
     data:"q="+ strcari,
     success: function(data){
      $("#hasil").html(data);
     }
    });
   }else{
    $.ajax({
     type:"get",
     url:"../crud/cari.php",
     data:"q=",
     success: function(data){
      $("#hasil").html(data);
     }
    });
   }

    e.preventDefault();
  });
