var queId = 0;

$(function() {
  var $queList = $('#que_list');
  var box = $(".container_modules");
  box.show();

  $('#new-question').on('click', function() {
    $queList.append('\
    <li class="module_data">\
      \
      <div class="data">\
        <label class="label">Module Name</label><br>\
        <input type="text" name="module_name" class="module_name" id="module_name">\
      \
      </div>\
      \
      \
      <div class="data">\
        <label class="label">Term</label><br>\
        <input type="number" name="term" class="term" id="term">\
        \
      </div>\
      \
      <div class="data">\
        <label class="label">Lecturer</label><br>\
        <select id = "lecturer" name="lecturer" class = "lecturer">\
          <option value="lecturer1" >lecturer1</option>\
          <option value="lecturer2">lecturer2</option>\
          <option value="lecturer4">lecturer3</option>\
          <option value="lecturer3">lecturer4</option>\
        </select>\
      </div>\
	  <div class="data">\
        <label class="label">Description</label><br>\
        <textarea name="description" class="description" id="description" rows= "4"></textarea>\
      \
      </div>\
      \
      <button type="submit" name="que_remove" class="que_remove">Remove Module</button>\
    </li>');
      
    

    queId++;
   
  });
} );
