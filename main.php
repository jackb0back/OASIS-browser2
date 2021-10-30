
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Hypertab</title>
    <link rel='stylesheet' href='css/css.css'>
</head>

<body id="body">
    <script src="js/bookmarks.js"></script>
    <script src="js/weather.js"></script>
    <script>
    const ip = "2601:404:c900:1f2:7978:c661:f26:47af";
    </script>
    <div class="bookmarks">
    </div>
    <div class="info">
        <div id="weather">
            <!--   Weather Widget in TOP RIGHT   -->
            <h2 id="winfo">Loading...</h2>
            <h2 id="alerts"></h2>
        </div>
    </div>

    <div class="center">
        <h1 id="headtxt">Hypertabs</h1>
        <p id="txt">
            TitaniumNetwork is an organization dedicated to <br>providing free access to information by bypassing the
            over-restrictive filters employed by institutions like Schools and Workplaces.<br>Big updates comimg soon.</p>
        <forum id="input" onkeydown="if(event.keyCode == 13){location.href=`/fetch/${btoa('https://bing.com/search/?q='+document.getElementById('inputb').value)}`}" onsubmit="location.href=`/fetch/${btoa('https://startpage.com/sp/search/?q='+document.getElementById('inputb').value)}`">
            <input id="inputb" placeholder="Search Bing">
            <input id="inputimg" onclick="location.href=`/fetch/${btoa('https://bing.com/search/?q='+document.getElementById('inputb').value)}`"type="image" value="Login" src="search.svg" height="24" width="24">
            <input type="submit" style="display:none">
        </forum>
        <div class="btns">
            <div onclick="location.href='g.html'" class="crm">
                <img class="icn" src="games.png">
                <a class="btn1" id="bo">Games</a>
            </div>
            <div onclick="location.href='/fetch/aHR0cHM6Ly9tdXNpYy55b3V0dWJlLmNvbQ==/'" class="crm">
                <img class="icn" src="bookmark.png">
                <a class="btn">Music</a>
            </div>
            <div onclick="location.href='c.html'" class="crm">
                <img class="icn" src="icon.png">
                <a class="btn">Contributors</a>
            </div>
            <div onclick="location.href='/fetch/aHR0cHM6Ly9kaXNjb3JkLmdnL0p0VVZIZTlqZzc=/'" class="crm">
                <img class="icn" src="dcd.png">
                <a class="btn">Join Discord</a>
            </div>
        </div>
    </div>
</body>

</html>
