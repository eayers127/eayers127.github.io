<?php
$title="Book your Trip";
include '_top.php'; ?>

 <div class="row">
 <div class=" column small-12">
    <h1>Book Your Cruise</h1>
    <form action="" method="get">
        <label>Full Name <span>(required)<span>
            <input type="text" name="name" required>
        </label>    
        <label>Address <input type="text" name="address"> </label>
        <label>City <input type="text" name="address"> </label>
        <label> State
            <select>
                <OPTION VALUE="AL">Alabama</OPTION>
        </label>
        <label> Cruise Selection: <select>
        <option>Please Select...</option>
        <option>Mexican</option>
        <option>Carribean</option>
        <option>Australian</option>
        </label>
        <input class="submit-button" type="submit" value="Book My Cruise">
    </form>

 </div>
 </div>

<?php include '_bot.php'; ?>