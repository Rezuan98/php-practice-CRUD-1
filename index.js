$("#btn").click(function() {

   var name = document.getElementById("name").value;
   var email = document.getElementById("email").value;
    $.ajax({
    method:"post",
    data:{st_name:name,st_email:email},
    url:"insert.php",
    success:function(data){
      $("#select").html(data);
    }
   });
});

function OnSelect(){
   var name = document.getElementById("name").value;
   var email = document.getElementById("email").value;
    $.ajax({
    method:"post",
    data:{st_name:name,st_email:email},
    url:"select.php",
    success:function(data){
      $("#select").html(data);
    }
   });

}

function OnDelete(id){
   var name = document.getElementById("name").value;
   var email = document.getElementById("email").value;
    $.ajax({
    method:"get",
    data:{id:id},
    url:"delete.php",
    success:function(data){
      alert(data);
     OnSelect();
    }
   });
}