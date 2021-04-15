<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <title>feedback</title>

<link rel="stylesheet" type ="text/css" href="includes/feedback.css"/>
<link rel="stylesheet" href="../common/global_style.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

</head>

<body>
<div class="wrapper">
<div id = "header">
<?php
include  '..//common//header.php';
/*include './includes/taken.php';*/
?>
</div>
<div class="wrapper_body">


<!-- this feeback page is constructed as table for easier layout -->
<form  id = "feedback_form" action="./includes/feedbackH.php" method="post" onsubmit= "return validateForm(this);" >
<table>
    <tr>
     <th> <label for ="fname">First name</label> </th>
     <td>
     <input class ="text" name ="fname" id ="fname" type="text"/>
      </td>
      </tr>
      <tr>
      <th> <label for ="lname">Last name</label> </th>
     <td>
     <input class ="text" id ="lname" name ="lname" type="text"/>
      </td>
      </tr>
    <tr>
        <th> <label for ="email">Email</label> </th>
        <td> <input class ="text" id ="email" name ="email" type="text"/> </td>
    </tr>
    <tr>
    <th> Are you a book publisher?</th>
    <td id = "publish">
    <input id ="yes"  type ="radio" name = "publisher" value = "y"/>
    <label for= "yes"> yes </label>
    <input id = "no"  type ="radio" name = "publisher" value = "n"/>
    <label for = "no"> No </label>
    </td>
    </tr>
    <tr>
     <th>  <label for ="type_feedback">Type of feedback:</label> </th>
     <td>
     <select id ="type_feedback" name ="feedbackList">
         <option  value = "improper page formting"> improper page formating </option>
         <option  value = "incorrect infoamrtion"> incorrect book information </option>
         <option  value = "Add book"> Add book</option>
         <option  value = "other"> other </option>
     </select>
     </td>
 </tr>
    <tr>
  <th> <label for ="feedback"> Feedback </label> </th>
    <td> <textarea onfocus="clearContents(this);" rows = "2" cols = "2" id ="feedback" name="feedback"> type here.. </textarea>  </td>
    </tr>
    <tr>
 <td> </td>
  <td> <input id ="recieve" name ="recieve" type = "checkbox"/> <label for ="recieve"> I would like to be notified if my feedback has been solved. </label> </td>
 </tr>
 <tr>
 <th colspan = "2"> <input  id= "submit" name ="submit" type="submit" value ="submit"/> </th>
 </tr>
</table>
 </form>

<script type = "text/javascript">
function validateForm(f) {
    var x = document.forms["feedback_form"]["email"].value;
    if (x == "") {
      alert("email must be filled out");
      return false;
    }
  }
  function clearContents(element) {
  element.value = '';
}
</script>
</div>
<div class = "footer" >
  <?php
  include '..//common//footer.php'
  ?>
</div>
</div>
</body>
</html>
