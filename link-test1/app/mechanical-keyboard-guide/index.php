<?php include '../header.php' ?>
<style>
em {
  text-decoration: none;
  font-weight : bolder;
  background-color: transparent;
}
.thead {
  font-weight: bolder;
}
</style>
<div  id="loading" class="container text-center" >
  <div class="spinner">
    <div class="rect1"></div>
    <div class="rect2"></div>
    <div class="rect3"></div>
    <div class="rect4"></div>
    <div class="rect5"></div>
  </div>
</div>
<div class="row reviews-page-title">
    <div class="col-md-12 breadcrumb-wrapper">
      <div class="container">
        <h1 class="title"><?php say('title-mechanical') ?></h1>
        <h2 class="title" ><?php say('What is a mechanical keyboard')?></h2>
        <p><?php say('What is a mechanical keyboard text')?></p>
        <h2 class="title" ><?php say('Membrane vs. Mechanical Keyboards') ?></h2>
        <p><?php say('Membrane vs. Mechanical Keyboards text') ?>
          <table class="table">
                    <thead class="thead">
                      <tr>
                        <td>
                      <?php  say('Feature'); ?>
                        </td>
                        <td>
                        <?php  say('Membrane'); ?>
                        </td>
                        <td>
                          <?php say('Mechanical'); ?>
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <?php say('Keys'); ?>
                        </td>
                        <td>
                          <?php say('Membrane strip on each row of keys');?>
                        </td>
                        <td>
                          <?php say('Individual switches under each key');?>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <?php say('Lifecycle');?>
                        </td>
                        <td>
                          <?php say('1-10 million keystrokes'); ?>
                        </td>
                        <td>
                          <?php say('50-60 million keystrokes'); ?>
                        </td>
                      </tr>
                      <tr>
                        <td>
                        <?php  say('Keys registered per key press'); ?>
                        </td>
                        <td>
                          <?php say('1 key');?>
                        </td>
                        <td>
                          <?php say('All keys (NKRO)');?>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <?php say('Actuation feel'); ?>
                        </td>
                        <td>
                          <?php say('Non-tactile'); ?>
                        </td>
                        <td>
                          <?php say('Tactile'); ?>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <?php say('Sound'); ?>
                        </td>
                        <td>
                          <?php say('Quiet'); ?>
                        </td>
                        <td>
                          <?php say('Audible click when typing'); ?>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </p>
        <h2 class="title"><?php say('Mechanical Keyboard Terminology')?></h2>
        <p>
          <?php say('Mechanical Keyboard Terminology text')?>
        <h2 class="title"><?php say('Different Types of Mechanical Key Switches') ?></h2>
        <p><?php say('Different Types of Mechanical Key Switches text') ?></p>
        <h3 class="title"><?php say("Cherry MX Switches")?></h3>
        <p><?php say("Cherry MX Switches text")?></p>
        <h3 class="title"><?php say('Tactile Switch: Cherry MX Brown') ?></h3>
        <p>
          <?php say('Tactile Switch: Cherry MX Brown text') ?></p>
        <h3 class="title"><?php say('Clicky Switch: Cherry MX Blue')?></h3>
        <p>
          <?php say('Clicky Switch: Cherry MX Blue text')?></p>
        <h3 class="title"><?php say('Linear Switch: Cherry MX Black') ?></h3>
        <p><?php say('Linear Switch: Cherry MX Black text') ?></p>
        <h3 class="title"><?php say('Linear Switch: Cherry MX Red') ?></h3>
        <p><?php say('Linear Switch: Cherry MX Red text') ?></p>
      <h3 class="title"><?php say('Light Tactile Switch: Cherry MX Clear') ?></h3>
      <p>
        <?php say('Light Tactile Switch: Cherry MX Clear text') ?></p>
      <h3 class="title"><?php say('Greetech Switches')?> </h3>
      <p><?php say('Greetech Switches text')?> </p>
    <h3 class="title"><?php say('Greetech Brown Switches') ?></h3>
    <p><?php say('Greetech Brown Switches text') ?></p>
    <h3 class="title"><?php say('Greetech Blue Switches') ?></h3>
    <p><?php say('Greetech Blue Switches text') ?></p>
    <h3 class="title"><?php say('Alpha Zulu Switchess') ?></h3>
    <p><?php say('Alpha Zulu Switches text') ?></p>
    <h3 class="title"><?php say('Alpha-Zulu Linear Switch') ?></h3>
    <p><?php say('Alpha-Zulu Linear Switch text') ?></p>
    <h3 class="title"><?php say('Alpha-Zulu Tactile Switch') ?></h3>
    <p><?php say('Alpha-Zulu Tactile Switch text') ?></p>
    <h3 class="title"><?php say('Buckling Spring') ?></h3>
    <p><?php say('Buckling Spring text') ?></p>
    <h3 class="title"><?php say('Topre Switches') ?>
    </h3>
    <p><?php say('Topre Switches text') ?></p>
    <h3 class="title"><?php say('Alps Switches') ?>
    </h3>
    <p><?php say('Alps Switches text') ?></p>
    <h3 class="title"><?php say('learn more about mechanical') ?> </h3>
    <p>
      <?php say('To learn more about mechanical keyboards') ?>
    </p>
      </div>
    </div>
</div>


<?php include '../footer.php' ?>
