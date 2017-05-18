<!-- Home

Creating new users (each user should have a unique id and a name)

Listing the users in the system (ordering/filtering by specific attributes)

Viewing a user's details

Adding new board games to an online database

Listing the board games available in the online database (ordering/filtering by specific attributes)

Viewing a board game's details (a board game will always have an id, a name, a list of designers, and a .jpg file of the board game's cover art),

Creating a new boardgame "play" (A play is associated to a specific user and to a specific game in the database, and contains a date. It can optionally also contain additional data such as the amount of time it took to complete the game, how many players were involved, and the id of the user that won the game, if applicable.),

Viewing existing plays by user (ordering/filtering by board game and/or date). -->
<!DOCTYPE html>
<html>
<head>
<style>
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>
<body>

<!-- <p>Click on the buttons inside the tabbed menu:</p> -->
<!-- <h2>Board Game Manager</h2> -->
<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'Createuser')">Create user</button>
  <button class="tablinks" onclick="openTab(event, 'Listusers')">List users</button>
  <button class="tablinks" onclick="openTab(event, 'Viewuser')">View user</button>
  <button class="tablinks" onclick="openTab(event, 'Addboardgames')">Add board games</button>
  <button class="tablinks" onclick="openTab(event, 'Listboardgames')">List board games</button>
  <button class="tablinks" onclick="openTab(event, 'Viewboardgame')">View board game</button>
  <button class="tablinks" onclick="openTab(event, 'Createplay')">Create play</button>
  <button class="tablinks" onclick="openTab(event, 'Viewplays')">View plays</button>
</div>

<div id="Createuser" class="tabcontent">
  <h3>Create user</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Listusers" class="tabcontent">
  <h3>List users</h3>
  <p>Paris is the capital of France.</p>
</div>

<div id="Viewuser" class="tabcontent">
  <h3>View user</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="Addboardgames" class="tabcontent">
  <h3>Add board games</h3>
  <p>Paris is the capital of France.</p>
</div>

<div id="Listboardgames" class="tabcontent">
  <h3>List board games</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="Viewboardgame" class="tabcontent">
  <h3>View board game</h3>
  <p>Paris is the capital of France.</p>
</div>

<div id="Createplay" class="tabcontent">
  <h3>Create play</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="Viewplays" class="tabcontent">
  <h3>View plays</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

</body>
</html>
