<?php



$language = array("q"=>"queensland","a"=>"amersterdam","v"=>"verginia","c"=>"cleveland","o"=>"ontario","t"=>"toronto");
foreach ($language as $key=>$value)
    
{
        echo $key,'-----------------',$value ,"<br/>";
    
    
}
?>

        <!DOCTYPE html>
<html lang="en">
<head>
<title>imgslidejs</title>
<meta charset="utf-8">
        <style>
            #container{
                position: relative;
                left:15%;
                right:15%;
                margin-top:25%;
                height:70%;
                width:70%;
                background-color:#b8d1f3;
                margin-bottom: 25%;
            }
            #left{
                position: absolute;
                width:10%;
                height:100%;
                left:0px;
                background-color:azure
            }
            #right{
                position: absolute;
                width:10%;
                height:100%;
                right:0px;
                background-color:azure
            }
            .innerimg{height: 30%;
            width:100%;
            position: absolute;
            background-color:burlywood;
            bottom:50%;}
            
/*            #content{
                height: inherit;
                width:80%;
                position: absolute;
            }*/
            #centerimage{
                position: absolute;
                height:100%;
                width:100%;
/*                z-index: 100;*/

                
                
                
            }
            
        </style>
        <script type="text/javascript">
        var imgcount=1;
        function load(x)
        { 
        var showimage=document.getElementById('centerimage');
            imgcount=imgcount+x;
            if(imgcount==6)  {imgcount=1;}
           else if(imgcount==0)  {imgcount=5;}
            showimage.src="images/img"+imgcount+".jpg";
        }
        window.setInterval(function autoload()
        { 
//            for(i=1; i<=6; i++){
                
        var showimage=document.getElementById('centerimage');
            imgcount=imgcount+1;
            if(imgcount==6)  {imgcount=1;}
//           else if(imgcount==0)  {imgcount=5;}
            showimage.src="images/img"+imgcount+".jpg";
//        }
    },3000,'easeOutExpo');
        </script>
    </head>
    
    <body onload="autoload()">
        <div id="container"><img id="centerimage"></img>
            <div id ="left"><img class="innerimg" onclick="load(-1)" src ="images/img4.jpg"></img></div>
<!--            <div id="content">
                <img id="centerimage"></img>-->
            
            <div id="right"><img class="innerimg" onclick="load(1)" src ="images/img4.jpg"></img></div>
            </div>
        
    </body>
</html>
