$(document).ready(function(){
  var index=$("#index").val();
  $.ajax({
    url: "dbOperations/load_terms.php?index="+index,
    method: "POST",
    success: function(data){
      $('#terms').html(data);
    },
    error: function(error){
      alert(error);
    }
  });
});
function displayterms(){
  document.getElementById("terms").classList.toggle("show");
}
window.onclick= function(event){

  if(!event.target.matches('.dropbtn')){
    var dropdowns=document.getElementsByClassName("dropdown-content");
    var i;
    for(i=0 ;i< dropdowns.length;i++){
      var openDropdown= dropdowns[i];
      if(openDropdown.classList.contains('show')){
        openDropdown.classList.remove('show');
      }
    }
  }
};
function hideterms(term){
  alert(term);
  alert("YESSSSSS");
  var elements=document.getElementsByClassName("mod_link");
  var j;
  for(j=0;j<elements.length;j++){
     var ele=elements[i];
     ele.hide();
  }
  if(event.target.matches('.term1')){
    alert("ye");
    var modules=document.getElementsByClassName('term1');
    var i;
    for(i=0;i<modules.length;i++){
      var openDropdown=modules[i];
      if(openDropdown.classList.contains('show')){
        openDropdown.classList.remove('show');
      }
    }
  }
  return true;

};
