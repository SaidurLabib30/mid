<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task1</title>
</head>

<body>
    <center>

     <h1 style="color:blue ">AIUB</h1>
     <h2 style="color:blue">Registration Form</h2>

     </center>

<table> 
<form action="">

    <tr>
    <td><p><b>Complete The Registration</b></p></td>
    </tr>

    <tr>
    <td>Full Name:</td>
    <td><input type="text" name="" placeholder="Enter Full Name" id=""></td>
    </tr>

    <tr>
    <td>Email:</td> 
    <td><input type="email" name="" placeholder="Enter Email" id=""></td>
    </tr>

    <tr>
    <td>Password:</td>
    <td><input type="password" name="" placeholder="Enter Password" id=""></td>
    </tr>


    <tr>
    <td>Gender:</td>
    <td>
        <input type="radio" name="des"> Male
        <input type="radio" name="des"> Other
    </td>
    </tr>

    <tr>
    <td>Language Knowledge:</td>
    <td>
        <input type="checkbox" name="des"> English
        <input type="checkbox" name="des"> Bangla
        <input type="checkbox" name="des"> Hindi 
    </td>
    </tr>

    <tr>
    <td> Country:</td>
    <td>
    <select>
    <option value="">-Select-</option>
    <option value="">Bangladesh</option>
    <option value="">India</option>
    <option value="">Pakistan</option>
    </select>
    </td>
    </tr>

    <tr>
    <td>Date of Birth</td>
    <td><input type="date"></td>
    </tr>

    <tr>
    <td>Upload Photo:</td>
    <td><input type="file" name="Choose file"></td>
    </tr>

    <tr>
    <td>Comments:</td>
    <td><textarea name="comments" id="comments" rows="5" cols="40"></textarea></td>
    </tr>

    <tr>
    <td>
    <input type="submit" value="Register">
    </td>
    </tr>

</form>
</table>

</body>
</html>