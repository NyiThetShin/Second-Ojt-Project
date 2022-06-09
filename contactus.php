<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact us</title>
	
   
  <style type="text/css">
    .contactus
{
  width: 50%;
  background-color: palegoldenrod;
  margin:5px auto;
  padding: 5%;

}
.logodiv
  {
    width: 50%;
    margin: 0;
  }
  .contactus .logodiv img
    {
      width: 50%;
      margin: 0;
      padding: 0;
    }

 .contactus ul

{
  list-style-type: none;
  margin: 0;
  padding: 0;
  margin-top: 5%;
}
 .contactus ul li
{
  
  margin-bottom: 7px;
  color: white;
}
.contactus ul li input
{
  padding: 1%;
  background-color: goldenrod;
  border-color: goldenrod;
  width: 97.5%;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.contactus ul li select
{
   padding: 1%;
  background-color: goldenrod;
  border-color: goldenrod;
  width: 100%;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}


.contactus button
{
  padding: 1%;
  background-color: goldenrod;
  border-color: goldenrod;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
 
}
.contactus .divround
{
 padding: 1px;
}
.contactus .divround i
{
  border: goldenrod 1px solid;
  border-radius: 100%;
  color: goldenrod;
  font-size: 100%;
  padding: 1%;
}

@media all and (max-width: 650px)
{
 .logodiv
  {
    width: 50%
  }
  .contactus .logodiv img
    {
      width: 100%;
    }
}

  </style>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 
</head>
    <?php  include_once "Nav.php"?>
        <fieldset class="contactus">
             
                    <div class="logodiv">
                        <img src="Activities/logo.png">
                        <p>Contact Us</p>
                    </div>

                    <div class="divround">
                     <i class="material-icons" >phone</i><label>+95 9742110221, 01 211 4321</label>
                      <i class="material-icons">email</i>info@educaremm.com<br>
                      <i class="material-icons" >home</i>: No ( 3 ), Chan Mya Yate Mon Street, Bahan Township, Yangon, Myanmar.
                    </div>
              </div>

          
              <ul>
                <li><input type="" name="" placeholder="Enter your name"></li>
                <li><input type="" name="" placeholder="Enter your email"></li>
                <li><input type="" name="" placeholder="Description"></li>
                <li>
                  
                    <select>
                      <option>..Content..</option>
                      <option>Primary class</option>
                      <option>Secondary class</option>
                      <option>Summer program</option>
                      <option>Other</option>
                    </select>
                </li>
              </ul>
              <button type="submit">Submit</button>
      
         
        </fieldset>
  <?php  include_once"footer.php"?>
</html>



