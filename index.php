<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
    <title></title>

    <style type="text/css">
        body{
            margin:0;
            -webkit-user-select:none;
            -webkit-touch-callout:none;
            text-align:center;
            background-color:black;
        }
    
        #maincanvas{
       
       position:absolute;
       
        }
        #touchview {
            height: 100%;
            width: 100%;
            position: absolute;
            text-align: center;
       
        }
        p{
            margin-top:5px
            font-size:40px;
        }
        div{
            margin:0;

        }

        div.overlaydiv {
            position: fixed;
            width: 100%;
            height: 100%;
            text-align: center;
        }
        div.test{
           margin-top:30%;
           height:20%;
          margin-left:35%;
          width:30%;
          vertical-align:middle;
        }
        div.touchdiv
        {
            position:absolute;
             -webkit-user-select:none;
             -webkit-touch-callout:none;
             
        }
        #bgimg {
            height: 100%;
            width: 100%;
            position: absolute;
            text-align: center;
            background: url("background.jpg");
            background-size: contain;
        }
     #result{
     position:relative;
         text-align:center ;
         color:#8edcff;
       display:none;
       top:200px
            
     }
        #result.p {
            font-size: 30px;
        }
    </style>
 

    <script src="scripts/audioBufferLoader.js"></script>
    <script>
       var hitmapfile="hitmaps/snowhalation.json";
        var bgmpath="bgm/snow halation.mp3"；
        </script>
    
 <script src="scripts/LLpractice.js"></script>

</head>
<body ontouchmove="event.preventDefault()" onload=" init()" onresize="resize()" onorientationchange="resize()";>

    <div id="maindiv" class="overlaydiv">


    </div>

    <div class="overlaydiv">
        <div id="bgimg">


        </div>


    </div>

    <div class="overlaydiv">
        <canvas id="maincanvas"></canvas>
    </div>
    <div class="overlaydiv">
        <div id="touchview">

            <div class="test" id="indicator" style="background-color:rgba(0, 0, 0, 0.46);text-align:center;color:#ffffff;font-size:40px" ></div>
        </div>

        <div id="result">
            <p id="maxcombo"></p>
            <p id="perfectc"></p>
            <p id="greatc"></p>
            <p id="goodc"></p>
            <p id="badc"></p>
            <p id="missc"></p>
            <p id="delayc"></p>
            <p id="offsetc"></p>
            <div style="height:50px" onclick="location.reload()">
                <h2>再来一次</h2>
            </div>
        </div>
    </div>
    

      
</body>
</html>
 