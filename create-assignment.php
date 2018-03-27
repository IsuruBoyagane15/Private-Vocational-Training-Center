<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create New Assignment</title>

    <!--css styles-->
    <link rel="stylesheet" href="css/styles_header.css">
    <link rel="stylesheet" href="css/styles_create-assignment.css">
    <link rel="stylesheet" href="css/styles_footer.css">

    <!--jquery sources-->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/addQueTemp.js" type="text/javascript"></script>
    <script src="js/assign-buttons.js" type="text/javascript"></script>

  </head>
  <body>

    <!--Including header file-->
    <?php include_once("inc/header.php"); ?>

    <!--navigation panel-->
    <nav class="navigate">
      <ul>
        <li><a href="#">#name#</a></li>
        <li><a href="log-out.php">Log Out</a></li>
      </ul>
    </nav>

    <!--confirm dialog box (hidden)-->
    <div class="confirmBox">
      <div class="message"></div>
      <span class="button yes">Yes</span>
      <span class="button no">No</span>
    </div>

    <!--set deadline dialog box (hidden)-->
    <div id="set_deadline">
      <input type="radio" name="deadline" value="0000-00-00 00:00:00" checked="checked" id="noDeadline">No deadline<br>
      <input type="radio" name="deadline" value="" id="hasDeadline">Set deadline<br>

      <div id="deadline_option">
        <label class="label_h">date :</label>
        <input type="text" name="year" value="2018" id="year">
        <select name="month" id="month">
          <option value="01">Jan</option><option value="02">Feb</option><option value="03">Mar</option><option value="04">Apr</option>
          <option value="05">May</option><option value="06">Jun</option><option value="07">Jul</option><option value="08">Aug</option>
          <option value="09">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>
        </select>
        <select name="day" id="day">
          <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option>
          <option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option>
          <option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
          <option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option>
          <option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option>
          <option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option>
          <option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option>
          <option value="29">29</option><option value="30">30</option><option value="31">31</option>
        </select>
        <br><label class="label_h">time (24h) :</label>
        <select name="hour" id="hour">
          <option value="00">00</option><option value="01">01</option><option value="02">02</option>
          <option value="03">03</option><option value="04">04</option><option value="05">05</option>
          <option value="06">06</option><option value="07">07</option><option value="08">08</option>
          <option value="09">09</option><option value="10">10</option><option value="11">11</option>
          <option value="12">12</option><option value="13">13</option><option value="14">14</option>
          <option value="15">15</option><option value="16">16</option><option value="17">17</option>
          <option value="18">18</option><option value="19">19</option><option value="20">20</option>
          <option value="21">21</option><option value="22">22</option><option value="23">23</option>
        </select><label class="label">hr</label>
        <select name="minute" id="minute">
          <option value="00">00</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option>
          <option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option>
          <option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option>
          <option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option>
          <option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option>
          <option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option>
          <option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option>
          <option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option>
          <option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option>
          <option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option>
          <option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option>
          <option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option>
        </select><label class="label">min</label>
      </div>
      <div id="deadline_buttons">
        <button type="submit" name="create" id="create">Create</button>
      </div>
    </div>

    <!--verify assignment popup table (hidden)-->
    <div id="popup_verify">
      <table id="table_verify">
        <tr>
          <th>Question</th>
          <th>Option1</th>
          <th>Option2</th>
          <th>Option3</th>
          <th>Option4</th>
          <th>Correct Option</th>
        </tr>
      </table>
      <div class="container_buttons">
        <button type="submit" name="back" class="assign_button" id="back">Back</button>
        <button type="submit" name="verify_next" class="assign_button" id="verify_next">Next</button>
      </div>
    </div>

    <!--assignment details panel-->
    <div class="assignment_details">
      <label class="label" id="module_select">Module name :</label>
      <label class="label">Assignment name :</label>  <!--loads from php-->
      <input type="text" name="assignment_name" class="details_input" id="assignment_name">
    </div>

    <!--question container-->
    <div class="container_questions">
      <nav class="questions">
        <ul id="que_list">

        </ul>
      </nav>
    </div>

    <!--button container-->
    <div class="container_buttons">
      <button type="submit" name="cancel" class="assign_button" id="cancel">Cancel</button>
      <button type="submit" name="new-question" class="assign_button" id="new-question">Add new question</button>
      <button type="submit" name="complete" class="assign_button" id="complete">Complete</button>
    </div>

    <!--Include footer file-->
    <?php include_once("inc/footer.php"); ?>
  </body>
</html>
