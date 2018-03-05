<?php
  // Creates a button that activates the Space invader Game.
 ?>
 <style>
   .text-inherited, .text-inherited:hover, .text-inherited:focus, .text-inherited:active{
   	color: inherit;
   }
 </style>
 <span>
   <img src="/home-assets/images/destroy.png" height="25px" alt="Destroy the website"></img>
 </span>
 <span>
 <a ng-click='activateAsteroidGame()' class="text-inherited" style='cursor:pointer'>
   <?php say('footer-connect-li6') ?>
 </span>
 </a>
