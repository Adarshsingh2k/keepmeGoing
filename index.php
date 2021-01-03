<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeepmEGoing</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="crdcont">

        <div class="frcrd">

            

            <form action="instapay.php" method="POST" class="d-block forrm">
                <h3 class="text-center">Keep Me GOing 👨‍🚀</h3>
                <br>

                <div class="row">
                        
                    <div class="col-auto">
                        <label for="name"> <h5> 👱‍♂️ Name</h5></label>
                    </div>

                    <div class="col-auto">
                         <input type="text" name="name" placeholder="Enter Your Name">
                    </div>
                    
                   
                </div>
        
                <br>
        
                <div class="row">

                    <div class="col-auto">
                        <label for="email"> <h5> 👨‍💻 Email</h5></label>
                    </div>

                    <div class="col-auto">
                        <input type="email" name="email" placeholder="johnDoe@donor.com">
                    </div>
                    
                    
                </div>

                <br>

                <div class="row">

                <div class="col-auto">
                    <label for="purpose"> <h5> 🧐Comment</h5></label>
                </div>

                <div class="col-auto">
                    <input type="text" name="purpose" placeholder="Drop some Love">
                </div>


                </div>

                    <br>

                <div class="row">

                    <div class="col-auto">
                        <label for="phone"><h5>🤳 Phone No.</h5></label>
                    </div>
                    
                    <div class="col-auto">
                        <input type="tel" name="number" placeholder="+91 2222888800">
                    </div>
                    
                </div>
        
        
               
        
                <br>
        
                    <div class="row">

                        <div class="col-auto">
                            <label for="amount"><h5>💸 Amount</h5></label>
                        </div>

                        <div class="col-auto">
                             <input type="text" name="amount" placeholder="Drop me anything b/w coffee to car ">
                        </div>
                        
                       
        
                
                    </div>
                

                    <br>
                    <input type="submit" name="submit" class="btn btn-lg buttonn " value="Donate 😍" >
        
        
        
        
        
        
            </form>
            
    
        </div>
        

    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>