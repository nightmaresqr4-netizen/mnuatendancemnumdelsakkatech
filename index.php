<?php 
echo ' <body><header>

<h1>MNU Attendance Management System</h1>
</header>
<form action ="signin.php" method="post">
<label for="acadimicnumber">Academic Number</label>
<input type ="text" name="acadimicnumber" id="acadimicnumber" placeholder="Enter your academic number" required>

<label for="name">Full Name</label>
<input type ="text" name="name" id="name" placeholder="Enter your full name" required>

<label for="mobile">Mobile Number</label>
<input type ="number" name="mobile" id="mobile" placeholder="Enter your mobile number" required>

<label for="group">Group</label>
<select name="group" id="group" required>
<option value="">Select a group</option>
<option value="a">Group A</option>
<option value="b">Group B</option>
</select>
<input name="code" placeholder="Enter the code" required>
<input type="button" value="Get Location" onclick="gps()">
<input type="hidden" name="latitude" id="latitude">
<input type="hidden" name="longitude" id="longitude">
<input type ="submit" name="submit" value="Sign In" class="submit">
</form>
</body><script>
function gps() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            document.getElementById("latitude").value = latitude;
            document.getElementById("longitude").value = longitude;
        });
    }
}
    document.addEventListener("click", function(event) {
        if (event.target.tagName === "INPUT" && event.target.type === "submit") {
            var latitude = document.getElementById("latitude").value;
            var longitude = document.getElementById("longitude").value;
            
            if (!latitude || !longitude) {
                event.preventDefault();
                alert("Please click Get Location to retrieve your location before signing in.");
            }else{
                document.getElementsByClassName("submit")[0].disabled = false;
            }
        }
    });
</script>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 100vh;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

header {
    margin-bottom: 40px;
}

h1 {
    color: white;
    margin-bottom: 10px;
    font-size: 32px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    letter-spacing: 1px;
}

form {
    background-color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    max-width: 400px;
    width: 90%;
}

label {
    display: block;
    text-align: left;
    width: 100%;
    margin-top: 15px;
    margin-bottom: 8px;
    color: #333;
    font-weight: 600;
    font-size: 14px;
}

input[type="text"],
input[type="number"],
input[type="button"],
input[name="code"],
select {
    width: 100%;
    padding: 12px 15px;
    margin-bottom: 5px;
    border: 2px solid #e0e0e0;
    border-radius: 6px;
    font-size: 14px;
    transition: all 0.3s ease;
    font-family: inherit;
}

input[type="text"]:focus,
input[type="number"]:focus,
input[type="button"]:focus,
select:focus {
    outline: none;
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

input[type="text"]::placeholder,input[type="number"]::placeholder {
    color: #999;
}
input[type="number"]::placeholder {
    color: #999;
}

select {
    background-color: white;
    cursor: pointer;
}

input[type="submit"] {
    width: 100%;
    padding: 12px;
    margin-top: 25px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

input[type="submit"]:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
}

input[type="submit"]:active {
    transform: translateY(0);
}
</style></body>';
