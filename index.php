<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>PHP form Validation</title>
</head>
<body>
<form action="login.php" method="POST">
  <table border = "2" align="center" cellpadding="5" cellspacing="6">
     <tr>
      <th colspan="6" align="center" style="background:#800000; color:#00ffff"><h3> Message Digital 5 Login </h3></th>
       <tr> 
        <th align="right">UserName</th>
         <td><input type="text" name="txtuser"></td>
          </tr> 
            <tr>
              <th align="right">Password</th>
               <td><input type="password" name="txtpass"></td>
              </tr> 
              <tr>
              <td colspan ="2" align="center">
            <input type="submit" value="Log In" id="sub" name="sub">
           </td>
          </tr>
         </table> 
       </form>
      </body>
    </html>