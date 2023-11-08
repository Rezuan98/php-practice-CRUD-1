


    
  var button = document.getElementById("button");
  var select = document.getElementById("select");
  button.addEventListener("click",function(){

    var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var url = "insert.php";
      var method ="post";
      var data = {user_name:name,user_email:email};
      console.log(name);
    axios.post(url,data)
    .then(function (response) {
    // handle success
   console.log(response.data);
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    })

  })

  select.addEventListener("click",function(){

    var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var url = "select.php";
      var method ="post";
      var data = {user_name:name,user_email:email};
      console.log(name);
    axios.post(url,data)
    .then(function (response) {
    // handle success
   console.log(response.data);
    
   document.getElementById("table_data").innerHTML=response.data;
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    })

  })
  function OnDelete(id)
  {
    alert(id);
  }
   
      
