<?php
session_start();

    //Проверяваме дали базата данни съществува. Ако не - се създава такава.
    require_once ("php/DBConnection.php");// MySQL Connection';
        //Cheking for existing DB & Tables
	if (!mysql_select_db('CSSGenDB'))
	{
            require_once("php/createDB.php");        //Creating DB
            require_once("php/createDBTable.php");  //Table fo Guest IDName and date on reg
            require_once("php/createDBData.php");  //Table for Code
        }
    //Проверка дали потребителя има съществуваща предишна сесия, ако няма я създава
    if (!isset($_SESSION['is_logged']) )
    {
            require_once ("php/CreateDBUser.php");     
    }
    echo "<p id=sessionI>".$_SESSION['Name']."</p>";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="common.css">
	<!--<script type="text/javascript" src="js/init.js"></script>-->
<!--        <script type="text/javascript" src="../Bib/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="../Bib/jquery-2.1.1.min.js"></script>-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/ajaxJS.js"></script>
</head>
<body>
<div id="main-container">
    
    <div class="header">
            <p class="golden-border"></p>
            <h1 class="site-name"  style="display: none">CSS3 code generator</h1>

    </div>
    
    <div class="main-body">
        <!-- Left Panel menu + panel Save -->
        <div class="inner-left">
            <div class="menu-bar">
                    <p class="golden-border">Menu Bar</p>
                    <ul id="ul_for_li" style="display: none">
                            <li><p id="MulCol"   onclick="HideNshow()"> Multiple Columns</p></li>
                            <li><p id="BorRad"   onclick="HideNshow()"> Border radius</p></li>				
                            <li><p id="TexSha"   onclick="HideNshow()"> Text shadow</p></li>
                            <li><p id="BoxSha"   onclick="HideNshow()"> Box Shadow</p></li>
                            <li><p id="BoxRes"   onclick="HideNshow()"> Box resize</p></li>
                            <li><p id="BoxSiz"   onclick="HideNshow()"> Box sizing</p></li>
                            <li><p id="Transit"  onclick="HideNshow()"> Transition</p></li>
                            <li><p id="Transfo"  onclick="HideNshow()"> Transform</p></li>
                            <li><p id="FontFace" onclick="HideNshow()"> Font face</p></li>
                            <li><p id="Outline"  onclick="HideNshow()"> Outline</p></li>
                            <li><p id="RGBA"     onclick="HideNshow()"> RGBA</p></li>
                    </ul>
                    <p class="golden-border"></p>
                    <script type="text/javascript" >
                        $(document).ready(function() {
                           $('#ul_for_li').slideDown (4000);//({
                                //height:'toggle'}, 'slow');
                                $('.site-name').slideDown (3550);
                             //$('.site-name').animate({
                             //   height:'toggle'}, 'slow');
                            $('.site-name').animate({fontSize:'2.5em'},"slow");
                            $('.save-bar').slideDown (4300);
                            
                        });

                    </script>
            </div>

            <div class="save-bar" style="display: none">
                <p class="golden-border">Save Bar</p>
                <!--   <input type="button" name="BANANI" id="css_button_ajax_call" value="PUPESH"/> -->
                <?php 
                        echo "<ol>";
                        //here we set the SAVED CSS DATA
                        //while ( <= ) {
                                echo "<li>vdfd  </li>";
                        //}

                        echo "</ol>";
                ?>
    <!--                    <style> 
                    #load {
                        -webkit-animation: myfirst 13s; /* Chrome, Safari, Opera */
                        animation: myfirst 13s;
                    }

                    /* Chrome, Safari, Opera */
                    @-webkit-keyframes myfirst {
                        0%   {color: red;}
                        25%  {color: yellow;}
                        50%  {color: skyblue;}
                        100% {color: green;}
                    }

                    /* Standard syntax */
                    @keyframes myfirst {
                        0%   {color: red;}
                        25%  {color: yellow;}
                        50%  {color: skyblue;}
                        100% {color: green;}
                    }
                    </style>-->
                    <p class="golden-border"><span  id="load"> Load</span></p>
                    <script type="text/javascript">
                    var auto_refresh = setInterval (
                            function (){
                                    $('#load').hide('1000');
                                    $('#load').show('1300');
                            }, 3000 );
                    </script>
            </div>
        </div><!-- END Left Panel menu + panel Save -->


        <!-- Osnovno componenti -->
        <!-- Right Panel -->
        <div class="inner-right">
            <div class="enterData" id="opp">
                <p>omfg</p><br>
                <p>omfg</p><br>
                <p>omfg</p><br>
                <p>omfg</p><br>
                <p>omfg</p><br>
                <p>omfg</p><br>
            </div>

            <div  class="visualization" id="save">

                <div id="input_text"></div>
                    <div id="the_example" style="width:140px;height:140px;background-color:red;">


                    </div>
            </div>

            <div class="codeview">
                <form>
                    <label class="MandjaSgrozde"></label>
                    <div class="jsbuttons">
                        <button type="submit" name="copy" id="copyBut">COPY</button><br>
                        <button type="submit" name="save">Save</button>
                    </div>
                </form>                    
            </div>
        </div><!-- END Right Panel -->
    </div><!-- END Main Body -->
    
    <div class="footer">
        <hr>
        <div class="sesDel">
            <a href="php/DestroySes.php">Session Destroy</a>
            <p>Copy rights NBU Students</p> <!-- onclick js messege-box students name -->
        </div>  
    </div>

</div>
</body>
</html>
