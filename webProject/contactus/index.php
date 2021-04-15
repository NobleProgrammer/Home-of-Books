<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
  <head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="../common/global_style.css"/>
    <script type = "text/javascript" src="includes/email.js" charset="utf-8"></script>
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
    <h2 style="text-align:center;">We'd love to hear from you!</h2>
    <br/>
      <table>
        <thead>
          <th>E-mail</th>
          <th>Phone</th>
          <th>Location</th>
          <th>Connect</th>
        </thead>
        <tbody>
          <tr>
            <td><script type="text/javascript">
            showEmail("troppus", "moc.uakskoob");
            </script></td>
            <td rowspan="3">+966123456789</td>
            <td>King Abdulaziz University</td>
            <td><a href="#"><img class="connect" src="images/fb.png" alt ="facebook"/></a></td>
          </tr>
          <tr>
            <td rowspan="2"><script type="text/javascript">
            showEmail("tcatnoc", "moc.uakskoob");
            </script></td>
            <td>Faculty of Information Technology</td>
            <td><a href="#"><img class="connect" src="images/twitter.png" alt = "twitter"/></a></td>
          </tr>
          <tr>
            <td>Jeddah</td>
            <td><a href="#"><img class="connect" src="images/youtube.png" alt = "youtube."/></a></td>
          </tr>
        </tbody>
      </table>
      <div class="map">
     <!-- <object id="mapframe" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3712.468010096905!2d39.248425985059576!3d21.489380885750666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3cdd04c4fdbdb%3A0x35ee14823ccc4d54!2z2YPZhNmK2Kkg2KfZhNit2KfYs9io2KfYqiDZiNiq2YLZhtmK2Kkg2KfZhNmF2LnZhNmI2YXYp9iq!5e0!3m2!1sar!2ssa!4v1586832464048!5m2!1sar!2ssa"
       />-->
              <iframe class = "mapframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3712.468010096905!2d39.248425985059576!3d21.489380885750666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3cdd04c4fdbdb%3A0x35ee14823ccc4d54!2z2YPZhNmK2Kkg2KfZhNit2KfYs9io2KfYqiDZiNiq2YLZhtmK2Kkg2KfZhNmF2LnZhNmI2YXYp9iq!5e0!3m2!1sar!2ssa!4v1586832464048!5m2!1sar!2ssa" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
