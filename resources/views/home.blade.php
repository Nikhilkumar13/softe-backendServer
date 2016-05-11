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
<h1 style="text-align: center;">Here is the list of api availaibe for use</h1>
<h2>Login API:</h2>
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

</body>
</html>