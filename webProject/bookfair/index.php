<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
  <head>
  
    <title>Book Fair</title>
    <link rel="stylesheet" type = "text/css" media = "print" href="includes/print.css"/>
    <link rel="stylesheet" href="includes/style.css"/>
    <link rel="stylesheet" href="../common/global_style.css"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

  </head>
  <body>
<div class="wrapper">
    <div id = "header">
      <?php
      include  '..//common//header.php';
      ?>
    </div>
<div class="wrapper_body">
      <h2>Book Fair</h2>
      <p class="parStyle">Book fair dates in several countries and cities in middle east.</p>
      <br/>
      <table>
        <thead> <!-- changed <thead> with <tr> -->
          <th>Name</th>
          <th>From</th>
          <th>To</th>
          <th>Location</th>
        </thead>
        <tbody>
          <tr>
            <td>Riyadh International Book Fair</td>
            <td>2020/04/02</td>
            <td>2020/04/11</td>
            <td>Saudi Arabia, Riyadh</td>
          </tr>
          <tr>
            <td>Cario International Book Fair</td>
            <td>2020/1/22</td>
            <td>2020/02/04</td>
            <td>Egypt, Cario</td>
          </tr>
          <tr>
            <td>Amman International Book Fair</td>
            <td>2020/09/26</td>
            <td>2020/10/06</td>
            <td>Amman</td>
          </tr>
          <tr>
            <td>Abu Dhabi International Book Fair</td>
            <td>2020/04/15</td>
            <td>2020/04/21</td>
            <td rowspan="2">United Arab Emirates</td>
          </tr>
          <tr>
            <td>Sharjah International Book Fair</td>
            <td>2020/10/30</td>
            <td>2020/11/9</td>
          </tr>
          <tr>
            <td>Total Book Fairs</td>
            <td style="text-align:center;" colspan="3">5</td>
          </tr>
        </tbody>
      </table>
      <br/>
      <div class="note">
        <p class="parStyle">Note: Some countries have delayed their schedules due to current COVID-19 situation.</p>
      </div>
    </div>
    <div class="footer">
      <?php
      include '..//common//footer.php'
      ?>
    </div>
  </div>
  </body>

</html>
