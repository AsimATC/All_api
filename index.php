<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <div id="imdb">
        <!-- imdb data --->
    </div>



    <script>
        var data = null;

        var xhr = new XMLHttpRequest();
        xhr.withCredentials = true;

        xhr.addEventListener("readystatechange", function () {
            if (this.readyState === this.DONE) {
                console.log(this.responseText);
            }

        });

        xhr.open("GET", "https://api.collectapi.com/sport/goalKings?data.league=super-lig");
        xhr.setRequestHeader("content-type", "application/json");
        xhr.setRequestHeader("authorization", "apikey 0iT8yXDbBKwVsmd2XGWzd6:7qCyU81GDUwdKMQ2A9iedp");

        xhr.send(data);



    </script>
</body>

</html>