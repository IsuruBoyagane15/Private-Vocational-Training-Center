<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HR Profile</title>

    <!--css styles-->
    <link rel="stylesheet" href="css/styles_header.css">
    <link rel="stylesheet" href="css/styles_hr-page.css">
    <link rel="stylesheet" href="css/styles_footer.css">

    <!--jquery sources-->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/hr_act.js" type="text/javascript"></script>

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

    <!--preview popup box (hidden)-->
    <div class="popup_box">

    </div>

    <!--confirm dialog box (hidden)-->
    <div class="confirmBox">
      <div class="message"></div>
      <span class="button yes">Yes</span>
      <span class="button no">No</span>
    </div>

    <!--news upload popup(hidden)-->
    <div class="upload_popup">
      <form action="news_upload.php" method="post" enctype="multipart/form-data" id="news_upload">
        Name<br><input type="text" id="news_name" placeholder="Enter Main Header Here" required><br><br>
        Description<br><textarea id="news_des" placeholder="Add a optional description to display in the news page" rows="6"></textarea><br><br>
        Expire Date<br>
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
        </select><br><br>
        Select a file to upload
        <p>(texts, documents, images and pdf only)</p>
        <input type="file" name="fileToUpload" id="fileToUpload" required>
        <div class="button_container">
          <input type="submit" value="back" name="back">
          <input type="submit" value="request" name="request">
        </div>
      </form>
    </div>

    <!--main body contents-->
    <div class="container">

      <!--still not approved news items-->
      <div class="sm_cont" id="add_news">
        <h4>Temporary News Items</h4>
        <ul id="news_added">

        </ul>
        <button type="button" id="btn_news">Request new news item</button>
      </div>

      <!--approved news items-->
      <div class="sm_cont" id="app_news">
        <h4>Approved News Items</h4>
        <ul id="app_news_added">

        </ul>
      </div>

      <div class="sm_cont" id="sel_pro_lect">
        <h4>Lecture Post Applications</h4>
        <ul id="lec_apps">

        </ul>
      </div>

      <div class="sm_cont" id="sel_pro_stud">
        <h4>Student Applications</h4>
        <ul id="stud_apps">
          
        </ul>
      </div>
    </div>

    <!--Include footer file-->
    <?php include_once("inc/footer.php"); ?>
  </body>
</html>
