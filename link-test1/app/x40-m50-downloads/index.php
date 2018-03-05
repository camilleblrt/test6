<?php include '../header.php' ?>

<style>
  .body-row{
    margin-top:100px;
    height:500px;
  }
  th, td{
    color:#fff;
  }

  .big-red-title{
    color:#fff;
  }
</style>
<div class="container" >
  <div >
    <div class="body-row top-row">
    <h1 class="big-red-title">Division Zero Downloads</h1>
    <div class="clearfix"></div>
    <table class="table table-download">
        <thead>
          <tr>
            <th style="text-align:left;">File</th>
            <th style="text-align:right;">Size</th>
            <th style="text-align:right;">Version</th>
            <th style="text-align:center;">Download</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="text-align:left;">X40 Gaming Keyboard Driver</td>
            <td style="text-align:right;">4.3MB</td>
            <td style="text-align:right;">20151230</td>
            <td style="text-align:center;"><a href="files/x40-gaming-keyboard-driver-20151230.zip"><i class="fa fa-download"></i> </a></td>
          </tr>
          <tr>
            <td style="text-align:left;">M50 Gaming Mouse Driver</td>
            <td style="text-align:right;">3.5MB</td>
            <td style="text-align:right;">20151210</td>
            <td style="text-align:center;"><a href="files/m50-gaming-mouse-driver-20151210.zip"><i class="fa fa-download"></i> </a></td>
          </tr>

        </tbody>
      </table>

      <p><?php say('download-text') ?></p>
    </div>
  </div>
</div>

<?php include '../footer.php' ?>
