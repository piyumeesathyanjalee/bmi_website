<!DOCTYPE html>
<html>
    <header>
    <title>BMI</title>
    <link rel="stylesheet" href="../css/styles.css"/>
    

        <a href="../index.php"><button class="button button1"><b>Home</b></button></a>
        <a href="#"><button class="button button2"><b>BMI</b></button></a>
        <a href="#"><button class="button button3"><b>View</b></button></a>

    </header>
    <body>

    
    <h2>BMI formula</h2>
        <p class="para1">Below are the equations used for calculating <b>BMI</b> in the <em>International System of Units</em> (SI):</p>
    <br>

    <div class="formula">
    <table id="tb">
    <tr>
        <td>BMI = </td>
            <td>
                <table>
    	            <tr><td>mass (kg)</td></tr>
                    <tr><td><hr color="black"></td></tr>
                    <tr><td>height <sup>2</sup> (m)</td></tr>
                </table>
            </td>
    </tr>
    </table>
    </div>
    <br><br>
    <caption><h1>Submition Form</h1></caption>
<form action="/action_page.php" method='POST'>
<fieldset>
  <label for="Name">Name of sitizen:</label>
  <input type="tel" id="Name" name="Name" placeholder="Name... "  required><br><br>
  
  <label for="birthdaytime">Date of birth:</label>
  <input type="datetime-local" id="birthdaytime" name="birthdaytime"><br><br>
  
  <label for="phone">Age:</label>
  <input type="tel" id="Age" name="Age" placeholder="Age... (in years)"  required><br><br>
  
  <label for="phone">Height:</label>
  <input type="tel" id="Height" name="Height" placeholder="Height... (in cm)"  required><br><br>
  
  <label for="phone">Weight:</label>
  <input type="tel" id="Weight" name="Weight" placeholder="Weight... (in kg)"  required><br><br>
  
  <label for="email"> Email:</label>
  <input type="email" id="email" name="email"><br><br>
  <label for="phone">Gender:</label>
    <input type="radio" id="male" name="gender" value="Male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">Female</label><br>
    <label for="country">Country:</label>

<select id="countries">
  <option value="select country">Select Country</option>
  <option value="sri lanka">Sri Lanka</option>
  <option value="usa">USA</option>
  <option value="canada">Canada</option>
  <option value="swizerland">Swizerland</option>
</select>

<p><label for="BMIreview">Review of BMI:</label></p>
  <textarea id="BMIreview" name="BMIreview" rows="5" cols="50"> Comments here...</textarea><br><br>
  <input type="reset" value="Reset">
  <input type="submit" value="Submit">

</fieldset>
    <br>
    <address><b>Source:</b> <a href="https://www.calculator.net/bmi-calculator.html">CALCULATOR.NET</a></address>
       
</body>
    </html>

    