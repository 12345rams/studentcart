<?php

$email = $_SESSION['email'];
echo '<!DOCTYPE html>';
echo '<html>' ;
echo '<head>';
echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">';
echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://kit.fontawesome.com/35d3200581.js" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>';
echo '<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>';
echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>';
echo '<body>';
echo '<style>';
echo '@import url("https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap");
#search{
  float:right;
}
  #hamburger-icon {
   
    margin: auto 0;
    display: none;
    cursor: pointer;
  }
  
  #hamburger-icon div {
    
    width: 35px;
    height: 4px;
    background-color:white;
    margin: 6px 6px;
    transition: 0.4s;
   
  }
  
  .open .bar1 {
    -webkit-transform: rotate(-45deg) translate(-6px, 6px);
    transform: rotate(-45deg) translate(-6px, 6px);
   
  }
  
  .open .bar2 {
    opacity: 0;
 
  }
  
  .open .bar3 {
    -webkit-transform: rotate(45deg) translate(-7px, -8px);
    transform: rotate(45deg) translate(-7px, -8px);
   
  }
  
#brand {

  font-weight: bold;
  font-size: 18px;
  display: flex;
  align-items: center;
  background-color:black;
 
}

#brand a{
  color: #09c372;

}
    #hamburger-icon {
   
      display: block;
    }
body{';
echo '';
echo '}';
echo 'header a{
    ';
echo 'top: 0px;';
echo 'display: flex;';
echo 'padding: 8px 8px;';
echo 'margin-top: 0px;';
echo 'margin-left: 10px;';
echo 'color: #03e9f4;';
echo 'text-decoration: none;';
echo 'transition: 0.5s;';
echo 'overflow: hidden;';
echo 'margin-right: 20px;';
echo '';
echo '}';
echo 'header a:hover{';
echo 'background: #03e9f4;';
echo 'color: #050801;';
echo 'box-shadow: 0 0 5px #03e9f4,';
echo '0 0 25px #03e9f4,';
echo '0 0 50px #03e9f4,';
echo '0 0 200px #03e9f4;';
echo '-webkit-box-reflect:below 1px linear-gradient(transparent, #0005);';
echo '}';
echo 'header a:nth-child(1){';
echo 'filter: hue-rotate(270deg);';
echo '}';
echo 'header a:nth-child(2){';
echo 'filter: hue-rotate(110deg);';
echo '}';
echo ' header a span{';
echo 'position: absolute;';
echo 'display: block;';
echo '}';
echo 'header a span:nth-child(1){';
echo 'top: 0;';
echo 'left: 0;';
echo 'width: 100%;';
echo 'height: 2px;';
echo 'background: linear-gradient(90deg,transparent,#03e9f4);';
echo 'animation: animate1 1s linear infinite;';
echo '}';
echo '@keyframes animate1{';
echo '0%{';
echo 'left: -100%;';
echo '}';
echo '50%,100%{';
echo 'left: 100%;';
echo '}';
echo '}';
echo 'header a span:nth-child(2){';
echo 'top: -100%;';
echo 'right: 0;';
echo 'width: 2px;';
echo 'height: 100%;';
echo 'background: linear-gradient(180deg,transparent,#03e9f4);';
echo 'animation: animate2 1s linear infinite;';
echo 'animation-delay: 0.25s;';
echo '}';
echo '@keyframes animate2{';
echo '0%{';
echo 'top: -100%;';
echo '}';
echo '50%,100%{';
echo 'top: 100%;';
echo '}';
echo '}';
echo 'header a span:nth-child(3){';
echo 'bottom: 0;';
echo 'right: 0;';
echo 'width: 100%;';
echo 'height: 2px;';
echo 'background: linear-gradient(270deg,transparent,#03e9f4);';
echo 'animation: animate3 1s linear infinite;';
echo 'animation-delay: 0.50s;';
echo '}';
echo '@keyframes animate3{';
echo '0%{';
echo 'right: -100%;';
echo '}';
echo '50%,100%{';
echo 'right: 100%;';
echo '}';
echo '}';
echo '';
echo '';
echo 'header a span:nth-child(4){';
echo 'bottom: -100%;';
echo 'left: 0;';
echo 'width: 2px;';
echo 'height: 100%;';
echo 'background: linear-gradient(360deg,transparent,#03e9f4);';
echo 'animation: animate4 1s linear infinite;';
echo 'animation-delay: 0.75s;';
echo '}';
echo '@keyframes animate4{';
echo '0%{';
echo 'bottom: -100%;';
echo '}';
echo '50%,100%{';
echo 'bottom: 100%;';
echo '}';
echo '';
echo '}';
echo '';
echo '.nav{

height: 8%;';
echo 'font-family: "Raleway", sans-serif;';
echo 'font-weight: bold;';
echo 'background-color: #050801;';
echo '}';
echo '.items{';

echo 'background: #000;';
echo '}';
echo '.container{';

echo 'height: 50px;';
echo 'width: 140px;';
echo 'background-color: blue;';
echo 'padding: 3px;';
echo 'border-radius: 30px;';



echo 'box-shadow: 0 0 8px 3px blue ;';


echo 'margin-right: 10px;';
echo 'margin-left: 10px;';
echo '';
echo '}';
echo '.container:hover{';
echo 'background: linear-gradient(red, rgb(2, 217, 2), blue);';
echo 'animation: animation 1.5s linear infinite;';
echo '}';
echo '@keyframes animation{';
echo '0% {';
echo 'filter: hue-rotate(0deg);';
echo '}';
echo '100% {';
echo 'filter: hue-rotate(360deg);';
echo '}';
echo '}';
echo 'button{';
echo 'height: 50px;';
echo 'width: 142px;';
echo 'background-color: #000;';
echo 'color: #4b4bd1;';
echo 'border: 3px solid transparent;';
echo 'border-radius: 30px;';
echo 'font-size: 20px;';
echo 'margin-right: 10px;';

echo '}';
echo '#search{';
echo 'margin-left: 10%;';
echo 'display: block;';
echo 'float:right;';
echo '';
echo '}';
echo '.containers{
  align-item:center;';

  echo 'height: 40px;';
  echo 'width: 340px;';
  echo 'background-color: white;';
  echo 'padding-left: 13px;';
  echo 'border-radius: 30px;';
  
  
  
  echo 'box-shadow: 0 0 8px 3px blue ;
  margin-top:10px;';
  
  
  echo 'margin-right: 10px;';
  echo 'margin-left: 10px;';
  echo '';
  echo '}
  .containers a{
    padding-right:10px;
    font-size:10px;
  }';
echo '';
echo '';
echo '</style>

<header>
    <nav>
<div class="nav">
<a  class="navbar"href="/parcials/index2.php" >';
echo '<span></span>';
echo '<span></span>';
echo '<span></span>';
echo '<span></span>';
echo 'Home';
echo '</a>';
echo '<a  class="navbar" href="../parcials/dashboard.php">';
echo '<span></span>';
echo '<span></span>';
echo '<span></span>';
echo '<span></span>';
echo 'Dashboard';
echo '</a>';
echo '<a  class="navbar"href="../parcials/contact.php">';
echo '<span></span>';
echo '<span></span>';
echo '<span></span>';
echo '<span></span>';
echo 'Contact us';
echo '</a>';
echo '';
            echo '<a id="asa" class="navbar"href="../parcials/demand.php">';
       echo '<span></span>';
       echo '<span></span>';
       echo '<span></span>';
       echo '<span></span>';
       echo 'Demand item';
       echo '</a>';
       echo '';
echo '<a  id="search"class="navbar"href="../parcials/account.php">';
echo '<span></span>';
echo '<span></span>';
echo '<span></span>';
echo '<span></span>';
echo '<img src="../images/Untitled design.png" width="40px" height="40px">';
echo '</a>

<a id="asa"class="containers" href="./parcials/login.php">';
echo 'welcome '.$email.'';
echo '</a>
<a class="container" href="../parcials/upload.php">';
echo '<button >Add item</button>';
echo '</a>
<a class="container" href="../parcials/logout.php">';
echo '<button >logout</button>';
echo '</a>
</div>
</nav>
</header>
<div id="brand">
<div id="hamburger-icon" onclick="toggleMobileMenu(this)">
       <div class="bar1"></div>
       <div class="bar2"></div>
       <div class="bar3"></div>
       
     <header>
      <a id="asa" class="navbar"href="/parcilas/index2.php" >';
       echo '<span></span>';
       echo '<span></span>';
       echo '<span></span>';
       echo '<span></span>';
       echo 'Home';
       echo '</a>';
       echo '<a id="asa"class="navbar" href="../parcials/dashboard.php">';
       echo '<span></span>';
       echo '<span></span>';
       echo '<span></span>';
       echo '<span></span>';
       echo 'Dashboard';
       echo '</a>';
       echo '<a id="asa" class="navbar"href="../parcials/contact.php">';
       echo '<span></span>';
       echo '<span></span>';
       echo '<span></span>';
       echo '<span></span>';
       echo 'Contact us';
       echo '</a>';
       echo '';
             echo '<a id="asa" class="navbar"href="../parcials/demand.php">';
       echo '<span></span>';
       echo '<span></span>';
       echo '<span></span>';
       echo '<span></span>';
       echo 'Demand item';
       echo '</a>';
       echo '';
       echo '<a id="asa" id="search2"class="navbar"href="../parcials/account.php">';
       echo '<span></span>';
       echo '<span></span>';
       echo '<span></span>';
       echo '<span></span>';
       echo '<img src="../images/Untitled design.png" width="40px" height="40px">';
       echo '</a>
       <a id="asa"class="containers" href="./parcials/login.php">';
       echo ''.$email.'';
       echo '</a>
       <a id="asa"class="container" href="../parcials/signup.php">';
       echo '<button>logout</button>';
       echo '</a>
     
      <a id="asa"class="container" href="../parcials/upload.php">
      <button>Add your Items</button>
      </a>
      
    </header>

    </div>
     </div>'
     ?>
<?php

echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">';
echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://kit.fontawesome.com/35d3200581.js" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>';
echo '<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>';
echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>';
echo '<body>';
echo '<style>';
echo '@import url("https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap");
#search{
  float:right;
}
  #hamburger-icon {
   
    margin: auto 0;
    display: none;
    cursor: pointer;
  }
  
  #hamburger-icon div {
    
    width: 35px;
    height: 4px;
    background-color:white;
    margin: 6px 6px;
    transition: 0.4s;
   
  }
  
  .open .bar1 {
    -webkit-transform: rotate(-45deg) translate(-6px, 6px);
    transform: rotate(-45deg) translate(-6px, 6px);
   
  }
  
  .open .bar2 {
    opacity: 0;
 
  }
  
  .open .bar3 {
    -webkit-transform: rotate(45deg) translate(-7px, -8px);
    transform: rotate(45deg) translate(-7px, -8px);
   
  }
  
#brand {

  font-weight: bold;
  font-size: 18px;
  display: flex;
  align-items: center;
  background-color:black;
 
}

#brand a{
  color: #09c372;

}
    #hamburger-icon {
   
      display: block;
    }
body{';
echo '';
echo '}';
echo 'header a{
    ';
echo 'top: 0px;';
echo 'display: flex;';
echo 'padding: 8px 8px;';
echo 'margin-top: 0px;';
echo 'margin-left: 10px;';
echo 'color: #03e9f4;';
echo 'text-decoration: none;';
echo 'transition: 0.5s;';
echo 'overflow: hidden;';
echo 'margin-right: 20px;';
echo '';
echo '}';
echo 'header a:hover{';
echo 'background: #03e9f4;';
echo 'color: #050801;';
echo 'box-shadow: 0 0 5px #03e9f4,';
echo '0 0 25px #03e9f4,';
echo '0 0 50px #03e9f4,';
echo '0 0 200px #03e9f4;';
echo '-webkit-box-reflect:below 1px linear-gradient(transparent, #0005);';
echo '}';
echo 'header a:nth-child(1){';
echo 'filter: hue-rotate(270deg);';
echo '}';
echo 'header a:nth-child(2){';
echo 'filter: hue-rotate(110deg);';
echo '}';
echo ' header a span{';
echo 'position: absolute;';
echo 'display: block;';
echo '}';
echo 'header a span:nth-child(1){';
echo 'top: 0;';
echo 'left: 0;';
echo 'width: 100%;';
echo 'height: 2px;';
echo 'background: linear-gradient(90deg,transparent,#03e9f4);';
echo 'animation: animate1 1s linear infinite;';
echo '}';
echo '@keyframes animate1{';
echo '0%{';
echo 'left: -100%;';
echo '}';
echo '50%,100%{';
echo 'left: 100%;';
echo '}';
echo '}';
echo 'header a span:nth-child(2){';
echo 'top: -100%;';
echo 'right: 0;';
echo 'width: 2px;';
echo 'height: 100%;';
echo 'background: linear-gradient(180deg,transparent,#03e9f4);';
echo 'animation: animate2 1s linear infinite;';
echo 'animation-delay: 0.25s;';
echo '}';
echo '@keyframes animate2{';
echo '0%{';
echo 'top: -100%;';
echo '}';
echo '50%,100%{';
echo 'top: 100%;';
echo '}';
echo '}';
echo 'header a span:nth-child(3){';
echo 'bottom: 0;';
echo 'right: 0;';
echo 'width: 100%;';
echo 'height: 2px;';
echo 'background: linear-gradient(270deg,transparent,#03e9f4);';
echo 'animation: animate3 1s linear infinite;';
echo 'animation-delay: 0.50s;';
echo '}';
echo '@keyframes animate3{';
echo '0%{';
echo 'right: -100%;';
echo '}';
echo '50%,100%{';
echo 'right: 100%;';
echo '}';
echo '}';
echo '';
echo '';
echo 'header a span:nth-child(4){';
echo 'bottom: -100%;';
echo 'left: 0;';
echo 'width: 2px;';
echo 'height: 100%;';
echo 'background: linear-gradient(360deg,transparent,#03e9f4);';
echo 'animation: animate4 1s linear infinite;';
echo 'animation-delay: 0.75s;';
echo '}';
echo '@keyframes animate4{';
echo '0%{';
echo 'bottom: -100%;';
echo '}';
echo '50%,100%{';
echo 'bottom: 100%;';
echo '}';
echo '';
echo '}';
echo '';
echo '.nav{

height: 8%;';
echo 'font-family: "Raleway", sans-serif;';
echo 'font-weight: bold;';
echo 'background-color: #050801;';
echo '}';
echo '.items{';

echo 'background: #000;';
echo '}';
echo '.container{';

echo 'height: 50px;';
echo 'width: 140px;';
echo 'background-color: blue;';
echo 'padding: 3px;';
echo 'border-radius: 30px;';



echo 'box-shadow: 0 0 8px 3px blue ;';


echo 'margin-right: 10px;';
echo 'margin-left: 10px;';
echo '';
echo '}';
echo '.container:hover{';
echo 'background: linear-gradient(red, rgb(2, 217, 2), blue);';
echo 'animation: animation 1.5s linear infinite;';
echo '}';
echo '@keyframes animation{';
echo '0% {';
echo 'filter: hue-rotate(0deg);';
echo '}';
echo '100% {';
echo 'filter: hue-rotate(360deg);';
echo '}';
echo '}';
echo 'button{';
echo 'height: 50px;';
echo 'width: 142px;';
echo 'background-color: #000;';
echo 'color: #4b4bd1;';
echo 'border: 3px solid transparent;';
echo 'border-radius: 30px;';
echo 'font-size: 20px;';
echo 'margin-right: 10px;';

echo '}';
echo '#search{';
echo 'margin-left: 10%;';
echo 'display: block;';
echo 'float:right;';
echo '';
echo '}';
echo '';
echo '';
echo '</style>



    </div>
     </div>
     <style>';
     
echo '@import url("https://fonts.googleapis.com/css2?family=Poppins&displswapay=");';
echo '.wrapper {';
echo 'position: fixed;';
echo 'bottom: 0px;';
echo 'display: inline-flex;';
echo 'list-style: none;';
echo '';
echo '';
echo '';
echo '}


.wrapper .icon {';
echo 'position: relative;';
echo 'background: #ffffff;';
echo 'border-radius: 50%;';
echo 'padding: 15px;';
echo 'margin: 10px;';
echo 'width: 50px;';
echo 'height: 50px;';
echo 'font-size: 18px;';
echo 'display: flex;';
echo 'justify-content: center;';
echo 'align-items: center;';
echo 'flex-direction: column;';
echo 'box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);';
echo 'cursor: pointer;';
echo 'transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);';
echo '}';
echo '';
echo '.wrapper .tooltip {';
echo 'position: absolute;';
echo 'top: 0;';
echo 'font-size: 14px;';
echo 'background: #ffffff;';
echo 'color: #ffffff;';
echo 'padding: 5px 8px;';
echo 'border-radius: 5px;';
echo 'box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);';
echo 'opacity: 0;';
echo 'pointer-events: none;';
echo 'transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);';
echo '}';
echo '';
echo '.wrapper .tooltip::before {';
echo 'position: absolute;';
echo 'content: "";';
echo 'height: 8px;';
echo 'width: 8px;';
echo 'background: #ffffff;';
echo 'bottom: -3px;';
echo 'left: 50%;';
echo 'transform: translate(-50%) rotate(45deg);';
echo 'transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);';
echo '}';
echo '';
echo '.wrapper .icon:hover .tooltip {';
echo 'top: -45px;';
echo 'opacity: 1;';
echo 'visibility: visible;';
echo 'pointer-events: auto;';
echo '}';
echo '';
echo '.wrapper .icon:hover span,';
echo '.wrapper .icon:hover .tooltip {';
echo 'text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);';
echo '}';
echo '';
echo '.wrapper .facebook:hover,';
echo '.wrapper .facebook:hover .tooltip,';
echo '.wrapper .facebook:hover .tooltip::before {';
echo 'background: #1877F2;';
echo 'color: #ffffff;';
echo '}';
echo '';
echo '.wrapper .twitter:hover,';
echo '.wrapper .twitter:hover .tooltip,';
echo '.wrapper .twitter:hover .tooltip::before {';
echo 'background: #1DA1F2;';
echo 'color: #ffffff;';
echo '}';
echo '';
echo '.wrapper .instagram:hover,';
echo '.wrapper .instagram:hover .tooltip,';
echo '.wrapper .instagram:hover .tooltip::before {';
echo 'background: #E4405F;';
echo 'color: #ffffff;';
echo '}';
echo '';
echo '.wrapper .github:hover,';
echo '.wrapper .github:hover .tooltip,';
echo '.wrapper .github:hover .tooltip::before {';
echo 'background: #333333;';
echo 'color: #ffffff;';
echo '}';
echo '';
echo '.wrapper .youtube:hover,';
echo '.wrapper .youtube:hover .tooltip,';
echo '.wrapper .youtube:hover .tooltip::before {';
echo 'background: #CD201F;';
echo 'color: #ffffff;';
echo '}';
echo '.r{';
echo 'display: block;';
echo 'align-items: center;';
echo 'justify-content: center;';
echo 'margin-left: 25%;';
echo 'border: 10px solid black;';
echo 'margin-right: 25%;';
echo 'margin-top: 10px;';
echo 'border-radius: 4%;';
echo 'width: 40%;';
echo 'height: 30%;';
echo 'box-shadow: 8px 8px 8px rgb(46, 45, 45);';
echo '}';
echo '#ra{';
echo 'width: 100%;';
echo 'height:60%;';
echo '}';
echo '';
echo '';
echo '';
echo '';
echo '';
echo '';
echo '</style>';
echo '<style>';
echo '.container7{';
echo 'width: 100%;';
echo 'border-radius: 20px;

padding-left: 10vw;';
echo '';
echo '}';
echo '.img{';
echo 'margin-left: 20px;';
echo 'margin-top: 20px;';
echo '';
echo '}';
echo '.io{';
echo 'color: rgb(0, 140, 255);';

echo 'font-size: 20px;';

echo '';
echo '}';
echo '</style>';



echo '
<style>
@media only screen and (max-width: 600px){
  header nav {
    display: none;
  }
}
  @media only screen and (min-width: 600px){
    header div {
      display: none;
    }
  }
  @media only screen and (min-width: 600px){
     #hamburger-icon{
      display: none;
    }
  }
 
 @media only screen and (max-width: 600px){
  img#ra{
 width:60%;
 margin-left:50px;
}
}
@media only screen and (max-width: 600px){
  button#chat-button.collapsible {
 magin-bottom:100px;
 }
 @media only screen and (max-width: 600px){
    .wrapper li.icon{
    flex-direction:column;
    bottom:40px;
    float:left;
  left:10px;
   }
   .wrapper .icon {';
    echo 'position: relative;';
    echo 'background: #ffffff;';
    echo 'border-radius: 50%;';
    echo 'padding: 15px;';
    echo 'margin-left: 10px;';
    echo 'width: 50px;';
    echo 'height: 50px;';
    echo 'font-size: 18px;';
    echo 'display: flex;';
    echo 'justify-content: center;';
    echo 'align-items: center;';
    echo 'flex-direction: column;';
    echo 'box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);';
    echo 'cursor: pointer;';
    echo 'transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);';
    echo '}';
    echo '
 }
 @media only screen and (max-width: 500px){
    .smc-circle {
   display:none;

   }
   @media only screen and (max-width: 500px){
    div.smc {
   float:right;
    

   }
   @media only screen and (min-width: 500px){
   div.smc-button-icon{
    display:none;
   }
  }
   .smc-waves {
    display:none;
 
    }
 }
  #asa{
    display: none;
    width:150px;
     }

  .open #asa {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom:10px;
  }
  
#rvy{
  margin-top:10px;
}

#rv {
  display: none;
  position: absolute;
  top: 50px;

  height: calc(100vh - 50px);
  width: 100%;
}

#asa:hover{
  background: #03e9f4;

}
@media only screen and (min-width: 500px){
  div.smc-button-icon{
   display:none;
  }
 }
</style>
<script>
function toggleMobileMenu(menu) {
    menu.classList.toggle("open");
}
</script>
  

  </html>
  
</body>
</html>
';
?>
