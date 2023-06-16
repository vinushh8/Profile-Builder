<!DOCTYPE html>
<html>
    <head>
        <title>Update Student</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap');
            /* table, th, td {
                border: 3px solid rgb(73, 73, 73);
                border-collapse: collapse;
            }
            th, td {
                padding: 15px;
            }
            body{
                background:url('background.png');
                background-size: cover;
            }
 
          .header{
                font-family: 'Dancing Script', cursive;
                font-size: 50px;
                font-weight: bold;
                text-align: center;
                margin-bottom: 30px;
                color: rgb(0, 0, 0);
          }
         */


        
        </style>
        <!-- <link rel="stylesheet" href="form66Up.css"> -->
        <link rel="stylesheet" href="css/studform.css">
    </head>
    <body>
        <div class="container" style="overflow-x: auto;">
        <br>
        <br>
            <div class="header">
                Update Student Details
            </div>
            <form id="form" class="form" action="connectadminupdatestud.php" method="POST" onsubmit="return checkInputs()">
                <div class="userdet">
                    

<div class="userdet">
                    <div class="form-control">
                        <label for="username" class="det">Username :</label>
                        <input type="text" placeholder="Riya" id="OldUsername" name="username" value="<?php echo isset($_GET['username']) ? $_GET['username'] : ''; ?>" readonly/>
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error message</small>
                    </div>
                  
                <div class="form-control">
                    <label for="username" class="det">New Name :</label>
                    <input type="text" placeholder="Riya" id="fullname" name="name" value="<?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?>"/>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                
                <!-- <div class="form-control">
                    <label for="username" class="det">New Username</label>
                    <input type="text" placeholder="florinpop17" id="username" name="newusername"/>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                 -->
                <div class="form-control">
                    <label for="username" class="det">Email :</label>
                    <input type="email" name="email" placeholder="cb.en.u4cse20xxx@cb.students.amrita.edu" id="email" pattern="[a-zA-Z0-9._%+-]+@cb\.amrita\.edu" required oninvalid="this.setCustomValidity('The format of the email should be ANYNAME@cb.amrita.edu, where ANYNAME can be anything.')" value="<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>" readonly>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="form-control">
                  
                   
                    <label for="user-input">Area of Interest :</label>
                    <textarea id="user-input" name="areaofinterest" rows="3" cols="52"><?php echo isset($_GET['areaofinterest']) ? $_GET['areaofinterest'] : ''; ?></textarea>
                    
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                    
                </div>
   <div class="form-control">
                  <label for="user-input">New Major/specialization :</label>
                  <textarea id="user-input" name="major" rows="3" cols="52"><?php echo isset($_GET['major']) ? $_GET['major'] : ''; ?></textarea>
                  
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Error message</small>
              </div> 
              <div class="form-control">
                <label for="user-input">New Academic Achievements :</label>
                <textarea id="user-input" name="academicachievements" rows="3" cols="52"><?php echo isset($_GET['academicachievements']) ? $_GET['academicachievements'] : ''; ?></textarea>
                
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>   
            <div class="form-control">
              <label for="username" class="det">New Graduation Date :</label>
              <input type="text" placeholder="" id="Recipe Title" name="graduationdate" value=" <?php echo isset($_GET['graduationdate']) ? $_GET['graduationdate'] : ''; ?>"/>
              <i class="fas fa-check-circle"></i>
              <i class="fas fa-exclamation-circle"></i>
              <small>Error message</small>
          </div> 
          <div class="form-control">
            <label for="user-input">New Technical Skills :</label>
            <textarea id="user-input" name="technicalskills" rows="3" cols="52"><?php echo isset($_GET['technicalskills']) ? $_GET['technicalskills'] : ''; ?></textarea>
            
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div> 
        <div class="form-control">
          <label for="user-input">New Projects :</label>
          <textarea id="user-input" name="projects" rows="3" cols="52"><?php echo isset($_GET['projects']) ? $_GET['projects'] : ''; ?></textarea>
          
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
      </div>
      <div class="form-control">
        <label for="user-input">New Work Experience :</label>
        <textarea id="user-input" name="workexperience" rows="3" cols="52"><?php echo isset($_GET['workexperience']) ? $_GET['workexperience'] : ''; ?></textarea>
        
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <small>Error message</small>
    </div>
    <div class="form-control">
      <label for="user-input">New Research Experience :</label>
      <textarea id="user-input" name="researchexperience" rows="3" cols="52"><?php echo isset($_GET['researchexperience']) ? $_GET['researchexperience'] : ''; ?></textarea>
      
      <i class="fas fa-check-circle"></i>
      <i class="fas fa-exclamation-circle"></i>
      <small>Error message</small>
  </div>

<div class="form-control">
  <label for="user-input">New Certifications :</label>
  <textarea id="user-input" name="certifications" rows="3" cols="52" ><?php echo isset($_GET['certifications']) ? $_GET['certifications'] : ''; ?></textarea>
  
  <i class="fas fa-check-circle"></i>
  <i class="fas fa-exclamation-circle"></i>
  <small>Error message</small></div>
</div>
                <div class="button">
                    <input type="submit" value="Update" />
                </div>
                
              
              
            </form>
         <br></div>
    
           


       
    </body>
</html>