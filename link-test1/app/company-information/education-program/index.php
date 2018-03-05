<?php include_once '../../header.php' ?>

        <div id="main">
            <!-- Title, Breadcrumb Start-->
            <div class="breadcrumb-wrapper">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <h1 class="title"><?php say('education-program_title')?></h1>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Title, Breadcrumb End-->
            <!-- Main Content start-->
            <div class="content">
               <div class="container">
                  <div class="row">
                     <div class="posts-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <article>
                           <h2 class="title"><?php say('education-program_title_1')?></h2>
                           <div class="post-content">
                                <?php say('education-program_content_1')?>
                                <?php say('education-program_content_2')?>
                           </div>

                           <?php
						if ($current_language === "/de") {
							echo "<h3 class='title'>";
							say('education-program_title_2');
							echo "</h3><div class='post-content'>";
							say('education-program_content_2');
							echo "</div>";
						}
                           ?>
                        </article>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>

         <!-- Content End -->

<?php
	include_once '../../footer.php';
 ?>
