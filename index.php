<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="sticky.css"/>
        <title></title>
        <script>
            function allowDrop(ev) {
                ev.preventDefault();
            }

            function drag(ev) {
                
                ev.dataTransfer.setData("text", ev.target.id);
            }

            function drop(ev) {
                ev.preventDefault();
                var data = ev.dataTransfer.getData("text");
                var newposition = "top:"+ev.layerY+"px; left:"+ev.layerX+"px;position:absolute;";
                console.log(newposition);  
                document.getElementById(data).parentnode.style = newposition;
                console.log(ev);
            }
        </script>
    </head>
    <body>
        <p id="border-top">
            
        </p>
        <p id="border-leftright">
        <p id="background" ondragover="allowDrop(event)" ondrop="drop(event)">
        <p id="note"><img id="pin1" src="img/mini-pin.png" height="30px;" draggable="true" ondragstart="drag(event)"/></p>
            
        </p>
        </p>
        <p id="border-bottom">
            
        </p>
        <?php
        // put your code here
        ?>
    </body>
</html>
