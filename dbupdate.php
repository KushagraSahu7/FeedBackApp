

<html>
    <title>SUBMIT FEEDBACK</title>
    <head>
        <style>
            .mainbox
            {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                box-shadow: 1px 1px 10px grey;
                height: 50vh;
                margin-top: 10vh;
            }

            .heading
            {
                font-size: 30px;
                color:white;
                background-color: midnightblue;
                width: 100%;
                text-align: center;
            }

            button
            {
                margin-top: 10px;
                border:none;
                padding: 10px 20px;
                cursor: pointer;
                background-color: midnightblue;
                color:white;
                border-radius: 20px;
            }
        </style>
    </head>

    <body>
    
    <form method="POST" action="update.php">
        <div class="mainbox">
            <div class="heading">
                SUBMIT FEEDBACK
            </div>
            <div>
            <input type="radio" name="rating" value="excellent">EXCELLENT
            </div>
            
            <div>
            <input type="radio" name="rating" value="good">GOOD
            </div>

            <div>
            <input type="radio" name="rating" value="bad">BAD
            </div>
            <div>
                <button type="submit">SUBMIT
            </div>
        </div>
    </form>


   

    </body>

</html>