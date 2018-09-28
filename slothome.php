<!DOCTYPE html>
<html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>Autp Slot Machine</title>
            
            <style>
                h1{
                    text-align:center;
                    
                }
                .button_wrapper{
                    text-align:center;
                }
                
                .play{
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

                .play:active{
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
            <div class="button_wrapper">
            <a href="slotmachine.php"><button type="button" class="play">Play Slot</button></a>
            </div>
        </body>

</html>