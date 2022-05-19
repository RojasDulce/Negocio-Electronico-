<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrellas</title>
    <style>
        
        .star_rating{
            user-select: none;
            padding: 0 20px;
            
            top: 0;
        }
        .star{
            font-size: 20px;
            color: #ff9800;
            background-color: unset;
            border: none;
            
        }
        .star:hover{
            cursor: pointer;
            
        }
    </style>
</head>
<body>
    

    <div class="star_rating">
        <button class="star">&#9734;</button>
        <button class="star">&#9734;</button>
        <button class="star">&#9734;</button>
        <button class="star">&#9734;</button>
        <button class="star">&#9734;</button>
    </div>


    <script>
        const allstar = document.querySelectorAll('.star');
        allstar.forEach( (star, i) =>{
            star.onclick = function(){
                
                let current_star_level = i + 1;
                allstar.forEach( (star,j)=>{
                    
                    if(current_star_level >= j+1){
                        star.innerHTML = '&#9733';
                    }else{
                        star.innerHTML = '&#9734';
                    }

                } )
            }
        } )
    </script>

</body>
</html>