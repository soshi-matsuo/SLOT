<!DOCTYPE html>
<html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>Slot Machine</title>
            
            <style>
                body{
                    text-align:center;
                }
                .hit{
                    color:red;
                    padding:0px;
                    margin:0px;
                    font-weight:800;
                }
                .close{
                    color:blue;
                    padding:0px;
                    margin:0px;
                    font-weight:600;
                }
                .back{
                    font-size:20px;
                    display: inline-block;
                    padding: 0.5em 1em;
                    text-decoration: none;
                    background: #668ad8;/*ボタン色*/
                    color: #4868ad;/*ボタン色より暗く*/
                    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);
                    border-bottom: solid 3px #627295;
                    border-radius: 3px;
                    font-weight: bold;
                    text-shadow: 1px 1px 1px rgba(255, 255, 255, 0.5);}

                .back:active{
                    -ms-transform: translateY(4px);
                    -webkit-transform: translateY(4px);
                    transform: translateY(4px);
                    box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2);
                    border-bottom: none;
                }
            </style>
        </head>
        
            
<body>

<h1>Auto Slot Machine</h1>
<a href="slothome.php"><button type="button" class="back">Back to Home</button></a>
<br>

<?php
    
    $left = " ";
    $center = " ";
    $right = " ";
    
    $count=1;
    
    while(true){
    
    
    
    $left = rand(1,9);
    $center = rand(1,9);
    $right = rand(1,9);
    
        if($left==$center && $center == $right && $left == $right){
            ?>
            <p class="hit"> <?php echo $left.$center.$right ?> BINGO!!</p><br>
           <?php 
            echo "you achieved in ".$count." times!";
             break;
        }
        elseif($left==$right){
            ?>
            <p class="close"> <?php echo $left.$center.$right ?> Close!</p>
            <?php
        }
        elseif($center==$right){
            ?>
            <p class="close"> <?php echo $left.$center.$right ?> Close!</p>
            <?php
        }
        elseif($left==$center){
            ?>
            <p class="close"> <?php echo $left.$center.$right ?> Close!</p>
            <?php
        }
        else{
            echo $left.$center.$right;
            echo "<br>";
        }
        $count++;
    }
?>
<br>
<a href="slothome.php"><button type="button" class="back">Back to Home</button></a>

</body>

</html>