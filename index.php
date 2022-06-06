<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL queries on PHP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            text-align: left;
        }
    </style>
</head>
<body>

<div id="exercise">
    Krijoni faqen PHP (search.php?query=fjale_kyce), e cila ben nje kerkese ne nje baze te dhenash (kredencialet
    <br>me poshte) per informacionet e mundshme te nje produkti, bazuar ne ate fjale kyce (sipas emrit ose pershkrimit),
    <br>nese ka informacione, e me tej, nese ka, afishon nje liste me emrat e produkteve te gjetur.
</div>
<br>

<form>
    <label for="input">Search Product: </label>
    <input id="input" type="text" name="name" onkeyup="search(this.value)">
</form>
<br>

<div id="result"></div>

<script type="text/javascript">
    function search(query) {
        if (query) {
            const request = new XMLHttpRequest();
            request.onreadystatechange = () => {
                if (request.readyState === 4 && request.status === 200) {
                    document.getElementById('result').innerHTML = request.responseText;
                }
            };
            request.open('GET', `getProduct.php?query=${query}`, true);
            request.send();
        }
    }
</script>
</body>
</html>