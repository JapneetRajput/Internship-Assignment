<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <script src="https://kit.fontawesome.com/bb83dd8c3d.js" crossorigin="anonymous"></script>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>
     </style>
  <link href="styles.css" rel="stylesheet">
  <script defer src="script.js"></script>
 </head>
 <body>
  <div class="modal" id="modal">
    <div class="modal-header">
      <div class="title">French Revolution</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
      <?php
        for($i=0; $i<4;$i++){
            echo '
            <h4 style="font-size: 9px;margin-left: 20px;margin-top:5px;">1. Which factor did not contribute to France\'s pre-revolution debt?</h4>
            <h5>The Seven Years\' War</h5>
            <h5>High tariffs on imported goods</h5>
            <h5>The cost of maintaining the army and navy</h5>
            <h5>Upkeep at Versailles</h5>
            <h4 style="font-size: 9px;padding:2px;padding-left: 13px;margin:0 9px;margin-right:40px;border-bottom: solid black 1px;">Answer: High tariffs on imported goods</h4>';
        }
      ?>
    </div>
  </div>
  <div id="overlay"></div>
     <div class="container">
         <h3>Looking for Quizzes or MCQs</h3>
         <div class="input">
             <input placeholder="type.."/>
             <i class="fa-solid fa-magnifying-glass"></i>
         </div>
         <h2>Literature</h2>
         <?php
         for($i=0; $i<7;$i++){
             echo '
             <div class="card">
                 <p>French Revolution</p>
                 <p>20 Quizzes</p>
                 <p style="margin: 0 40px;cursor: pointer;color: rgb(25, 169, 25);" data-modal-target="#modal">Study</p>
             </div>';
         }
         ?>
         <p style="margin-left: 270px;margin-right: 50px;">Page 1/40</p>
         <p style="padding-right: 10px;cursor: pointer;">Next</p><i style="color: green;cursor: pointer;" class="fa-solid fa-arrow-right"></i>
         <div class="wrapper">
              <h4>Thrive Your Academics With Us</h4>
              <p>Sign Up to get everything free of cost</p><br/><br/>
              <span>
                Sign up
              </span><br/>
         </div>
         <hr/>
     </div>
 </body>
 </html>