<!DOCTYPE html>
<html>
<head>
    <title>Backend Server for Tnpfiy</title>
<style type="text/css">

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    width: 50%;
}
    </style>
</head>
<body>
<h1 style="text-align: center;">Here is the list of api available for use</h1>
<h2>Login:</h2>
<p>URL: http://52.38.240.185/isvaliduser</p>
<p>Parameters: enumber, pwd</p>
<table>
<th>Parameter Name</th>
<th>Parameter Type</th>
    <tr>
    <td>enumber</td>

    <td>string, small letters</td>
    </tr>
    <tr>
        <td>pwd</td>
        <td>string</td>
    </tr>
</table>
<p>Return Values:  "true"  -> If Valid User Else "false"</p>
<br>
<h2> User Data :</h2>
<p> URL : http://52.38.240.185/getuserdata </p>
<table>
    <th>Paramater Name</th>
    <th>Paramater Type</th>
    <tr>
        <td>enumber</td>
        <td>string , small letters</td>
    </tr>

</table>
<p>Return Values : JSON object Array Containg Data For example :- [{"name":"Nikhil","department":"Computer Science"}]</p>
<br>

<h2>Company List:</h2>
<p>URL: http://52.38.240.185/getcompanylist</p>
<p>Return Values: JSON object Array Containg Data for example :-[{"id":1,"name":"Google"},{"id":2,"name":"Facebook"},{"id":4,"name":"LinkedIn"},{"id":5,"name":"Microsoft"}]</p>

</body>
</html>