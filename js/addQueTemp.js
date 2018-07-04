var queId = 0;

$( function() {
  var $queList = $('#que_list');

  //add new question box to the container
  $('#new-question').on('click', function() {
    var radioName = "correct_option" + queId;

    $queList.append('\
    <li class="question">\
      <textarea class="textarea" rows="8"></textarea><br>\
      \
      <div class="answer">\
        <label class="label">option 1 :</label>\
        <input type="text" name="option1" class="option" id="option1">\
        <input type="radio" name='+radioName+' value="option1">correct option<br>\
      </div>\
      \
      <div class="answer">\
        <label class="label">option 2 :</label>\
        <input type="text" name="option2" class="option" id="option2">\
        <input type="radio" name='+radioName+' value="option2">correct option<br>\
      </div>\
      \
      <div class="answer">\
        <label class="label">option 3 :</label>\
        <input type="text" name="option3" class="option" id="option3">\
        <input type="radio" name='+radioName+' value="option3">correct option<br>\
      </div>\
      \
      <div class="answer">\
        <label class="label">option 4 :</label>\
        <input type="text" name="option4" class="option" id="option4">\
        <input type="radio" name='+radioName+' value="option4">correct option<br>\
      </div>\
      \
      <button type="submit" name="que_remove" class="que_remove">Remove question</button>\
    </li>');

    queId++;
  });
} );
