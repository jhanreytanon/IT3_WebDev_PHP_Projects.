<! DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Junior Dev Onboarding</title>

        <style>
            body {
                margin: 0;
                padding: 0;
                height: 100vh;

                display: flex;
                justify-content: center;
                align-items: center;

                background-color:blueviolet;
                font-family Arial, Helvetica, sans-serif;

            }

            .card {
                background-color:white;
                width: 350px;
                padding: 25px;
                border-radius: 10x;

                box-shadow: 0 4px 12px rgba(0,0,0.1);
                text-align: center;

            }


            .bio {
                font-size: 14px;
                color:chartreuse;
                margin-bottom: 15px;

            }


        ul li{
            background-color:cyan;
            margin:5px 0;
            padding: 8px;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;

            background-color:brown
            color:blanchedalmond
        }


        button:hover {
            background-color:black
        }

        </style>
    </head>



    <body>
        <div class="card">
        <h1> Jhanrey Personal Card</h1>

        <p class="bio">
            junior Software Enginner passionate about web development, problem-solving, and continous learning.
        </p>

        <h3> Technical Skills </h3
        </ul>
           <li>Html & CSS </li>
           <li>JavaScript</li>
           <li>MySQL</li>
           <li> Git & GitHub</li>
        </ul>

        <button id = "initBtn"> Initialize System </button>

        <div classs="system-info">
            <h3> Server status: Online</h3>
            <p><strong>Date & Time: </strong> <?php echo date(format: 'F,J,Y, g:i a') ?></p>
            <p><strong> PHP Version: </strong> <?php echo phpversion(); ?> </p>
        </div>



        </div>

        <script>
             documents.getElementById("initBtn").addEventLIstener("click", function() {
                alert("Welcome to the team, Jhanrey! System initialized successfully!");
             });
        </script>
             
    <ul>
        </div>
    </body>
</html>