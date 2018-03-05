<?php include_once '../header.php' ;?>
<!--content start -->
<?php
if ($current_language !== "/de") {
    $href = "http://shop.daskeyboard.com/products/das-keyboard-prime-13";
} else {
    $href = "/de/where-to-buy/";
}
?>
<link rel = "stylesheet" type = "text/css" href = "/gaming/x50-rgb-mechanical-keyboard/css/x50-css.css" />
</head>
<style>

 
    .device {
        display: inline-block;
        z-index: 1;
        height: 250px;
        background-color: transparent;
        margin: 15px;
        color: white;
    } 


    .device-list {
        text-align: center;
         margin-top:10%;
    }

    a {
        color: white !important;
    }

    .home-item {
        color: white !important;
        border: 1px solid #777;
        cursor: pointer;
        margin:10px;
    }

    .home-item-footer p {
        color: #ccc;
        padding-top: 5px;
        font-size: 15px;
    }

    .home-item:hover {
        box-shadow: 0 0 15px 10px rgba(102, 175, 233, .6);
        z-index: 100;
        opacity: 1;
    }

    
    .download-page{
        height: 500px;
        padding-bottom:800px;
    }


    @media screen and (max-width:1000px) {
        
        .device-list {
        
            display:flex;
        }

    }
</style>
<div class="download-page">
    <h1 class="x50-big-name">
        <?php say('DK-Q-downloads') ?>
    </h1>
    <div class="container">
        <div class="device-list">
            <div class='device'>
                <div class="home-item">
                    <a href='https://q.daskeyboard.com/downloads' border='0'><img src='images/DK5QPID-home-icon.png' width="400px" height="auto" alt='Das Keyboard 5Q'></a>
                </div>
                <div class='home-item-footer'>
                    <p>Das Keyboard 5Q</p>
                </div>
            </div>

            <div class='device'>
                <div class="home-item">
                    <a href='https://q.daskeyboard.com/downloads' border='0'><img src='images/X50PID-home-icon.png' width="400px" height="auto" alt='Das Keyboard X50'></a>
                </div>
                <div class='home-item-footer'>
                    <p>Das Keyboard X50</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once '../footer.php' ?>