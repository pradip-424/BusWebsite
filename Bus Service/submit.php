<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <style>
        

            body{
                background-image: url('web/images/cover4.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
            }
            .bus-cabin{
                float:left;
                border : 1px solid blue;
                border-right: 1px solid red;
                height:400px;
                width:150px;
                margin-top:35px;
                margin-left:200px;
                background-color : whitesmoke;
            }
            .seatsection{
                float:left;
                margin-top:35px;

            }
            .bus-cabin img{
                width:85px;
                height:85px;
            }
            .seats{
                border : 1px solid blue;
                border-right: 1px solid red;
                width:fit-content; 
                display: grid;
                grid-template-columns: repeat(10, 80px);
                grid-template-rows: repeat(5 , 80px) ;
                background-color : whitesmoke;
            }
            input{
			display:none;
            }
            img{
                margin : 10px 10px;
                width:60px;
                height:60px;
            }
            .gap{
               
                grid-column-start: 1;
                grid-column-end: 11;
            }
            .seat{
                width:80px;
                height:80px;
               
            }

            :checked + .not-book {
             border-color: #ddd;
            }
             :checked + .not-book img {
              transform: scale(1.1);
              box-shadow: 0 0 10px 3px rgb(97, 223, 255); }
              .book img{
                 box-shadow: 0 0 10px 2px rgb(97, 223, 0);
                 height:60px;
              }
              input[type=submit]
              {
                display: block;
                width:10%;
                margin-left: 35%;
                margin-top:10px;
                background-image: linear-gradient(to left, aqua , lightblue) ;
                outline : none;
                border: none;
              }
           
         </style>    
    </head>
    <body style="background-image:url(cover10.jpg);">
        <center><h1>Select Your Seat</h1></center>
        <div class="bus-cabin">
              <img src="web/images/steering.jpg"> 
        </div>
        <div class="seatsection">
            <form action="" method="POST">
            <div class="seats">
             <?php 
                for( $i=2 ; $i <=21 ; $i++ )
                {    
                    echo '<div class="seat">';
                     if($seat[$i] == 0){ echo '<input type="radio" id="s'.($i-1).'"  name="seat" value="'.($i-1).'" >';} 
                    echo '<label '; if($seat[$i] != 0){ echo ' class="book" ';} else {echo ' class="not-book" ';}echo ' for="s'.($i-1).'" ><img src="web/images/tempimage3.png" /></label></div> ' ;
                }   ?>
                <div class="gap"></div>
                <?php 
                for( $i=22 ; $i <=41 ; $i++ )
                {
                    echo '<div class="seat">';
                     if($seat[$i] == 0){ echo '<input type="radio" id="s'.($i-1).'"  name="seat" value="'.($i-1).'" >';} 
                    echo '<label '; if($seat[$i] != 0){ echo ' class="book" ';} else {echo ' class="not-book" ';}echo ' for="s'.($i-1).'" ><img src="web/images/tempimage3.png" /></label></div> ' ;
                }   ?>
                

             
            
        </div><input type="submit" value="Next" style="font-size: 25px;"></form>
    </div>
    </body>