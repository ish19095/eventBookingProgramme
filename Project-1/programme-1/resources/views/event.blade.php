<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Event Page</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <h1>Event Booking</h1>
        <div>
            <button onclick="showInternalForm()">Internal Form</button>
            <button onclick="showExternalForm()">External Form</button>
        </div>
        <br>
        <h2>Internal Form</h2>
        <form id="internal_form">
            <label for="internal_event_date">Date:</label>
            <input type="date" id="internal_event_date" name="internal_event_date">
            <br><br>
            <label for="internal_event_time">Event time:</label>
            <ul>
                <li><input type="time" id="internal_event_time_from" name="internal_event_time"><input type="time" id="internal_event_time_to" name="internal_event_time"></li>
                <li><input type="checkbox">All Day</li>
            </ul>
            <label for="internal_event_site">Event Site:</label>
            <select id="internal_event_site" name="internal_event_site">
                <option value="" disabled selected>--Choose Site--</option>
                <option value="sl">Salina</option>
                <option value="sr">Simar</option>
                <option value="gh">Ghadira</option>
                <option value="fr">Foresta 2000</option>
                <option value="ot">Other</option>
            </select>
            <br><br>            
            <label for="internal_event_type">Event Type:</label>
            <select id="internal_event_type" name="internal_event_type">
                <option value="" disabled selected>--Choose Type--</option>
                <option value="sm">Staff Meeting</option>
                <option value="cm">Council Meeting</option>
                <option value="sse">Staff Social Event</option>
            </select>
            <br><br>
            <label>Requirements:</label>
            <ul>
                <li><input type="checkbox">Desk</li>
                <li><input type="checkbox">Chairs</li>
                <li><input type="checkbox">Tea/Coffee</li>
                <li><input type="checkbox">Projector</li>
            </ul>
        </form>
        <br><br><br><br>
        <h2>External Form</h2>
        <form id="external_form">
            <label for="external_event_date">Date:</label>
            <input type="date" id="external_event_date" name="external_event_date">
            <br><br>
            <label for="external_event_time">Event time:</label>
            <input type="time" id="external_event_time_from" name="external_event_time"><input type="time" id="external_event_time_to" name="external_event_time">
            <br><br>
            <label for="external_event_site">Event Site:</label>
            <select id="external_event_site" name="external_event_site">
                <option value="" disabled selected>--Choose Site--</option>
                <option value="sl">Salina</option>
                <option value="sr">Simar</option>
                <option value="gh">Ghadira</option>
                <option value="fr">Foresta 2000</option>
                <option value="ot">Other</option>
            </select>
            <br><br>
            <label>BLM Event:</label>
            <input type="checkbox" id="external_event_BLM"></input>
            <br><br>         
            <label for="external_event_type">Event Type:</label>
            <select id="external_event_type" name="external_event_type">
                <option value="" disabled selected>--Choose Type--</option>
                <option value="sm">Staff Meeting</option>
                <option value="cm">Council Meeting</option>
                <option value="sse">Staff Social Event</option>
            </select>
            <br><br>
            <label for="external_no_participants">No of Participants:</label>
            <input type="numeric" id="external_event_date" name="external_event_date" pattern="[0-9]+">
            <br><br>
            <label>Type of Participants:</label>
                <ul>
                    <li><input type="checkbox">Adults</li>
                    <li><input type="checkbox">Families</li>
                    <li><input type="checkbox">Locals</li>
                    <li><input type="checkbox">Tourists</li>
                </ul>
            <label>Requirements:</label>
                <ul>
                    <li><input type="checkbox">Desk</li>
                    <li><input type="checkbox">Chairs</li>
                    <li><input type="checkbox">Tea/Coffee</li>
                    <li><input type="checkbox">Projector</li>
                </ul>
            <label for="external_event_dept">Main BLM Department responsible for event:</label>
            <select id="external_event_dept" name="external_event_dept">
                <option value="" disabled selected>--Choose Department--</option>
                <option value="dp1">Dept 1</option>
                <option value="dp2">Dept 2</option>
                <option value="dp3">Dept 3</option>
            </select>
        </form>
        <br>
        <div class="buttons">
            <div class="action_btn">
                <button name="submit" type="submit" value="draft" onclick="Save()">Save as Draft</button>
                <button name="submit" type="submit" value="submit" onclick="Submit()">Submit Event</button>
                <button name="submit" type="submit" value="confirm" onclick="Confirm()">Confirm Event</button>
                <button name="submit" type="submit" value="cancel" onclick="Cancel()">Cancel Event</button>
            </div>
        </div> 
    </body>
</html>