<?php
	// Initialize session
	session_start();

	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
		header('location: login.php');
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">
	<style>
        .wrapper{ 
        	width: 500px; 
        	padding: 20px; 
        }
        .wrapper h2 {text-align: center}
        .wrapper form .form-group span {color: red;}
	</style>
</head>
<body>
	<main>
		<section class="container wrapper">
			<div class="page-header">
				<h2 class="display-5">Welcome <?php echo $_SESSION['username']; ?></h2>
			</div>
			<!-- <a href="password_reset.php" class="btn btn-block btn-outline-warning">Reset Password</a> -->
      <!-- <a href="logout.php" class="btn btn-block btn-outline-danger">Sign Out</a> -->
		</section>
	</main>
	<div class="container" id="cv-form">
      <h1 class="text-center my-2">Resume Generator</h1>

      <div class="row">
        <div class="col-md-6">
          <!-- first column -->
          <h3>Personal Information</h3>

          <div class="form-group">
            <label for="nameField">Your Name</label>
            <input
              type="text"
              id="nameField"
              class="form-control"
              placeholder="Enter your Name"
            />
          </div>

          
          <div class="form-group mt-2">
            <label for="addressField">Your Address</label>
            <textarea
              id="addressField"
              class="form-control"
              placeholder="Enter your Address"
              rows="5"
            ></textarea>
          </div>

          <p class="text-secondary my-3">Important Links</p>

          <div class="form-group mt-2">
            <label for="ContactField">Facebook</label>
            <input
              type="text"
              id="fbField"
              class="form-control"
              placeholder="Enter here"
            />
          </div>

          <div class="form-group mt-2">
            <label for="instaField">Instagram</label>
            <input
              type="text"
              id="instaField"
              class="form-control"
              placeholder="Enter here"
            />
          </div>

          <div class="form-group mt-2">
            <label for="linkedField">Linkedin</label>
            <input
              type="text"
              id="linkedField"
              class="form-control"
              placeholder="Enter here"
            />
          </div>

          <div class="form-group1">
            <label for="aboutField">About</label>
            <textarea
              id="aboutField"
              class="form-control"
              placeholder="Enter your Address"
              rows="5"
            ></textarea>
          </div>

        </div>
      
        

        <div class="col-md-6">
          <!-- Second column -->
          <h3>Professional Information</h3>

          <div class="form-group mt-2">
            <label for="addressField">Objective</label>
            <textarea
              rows="5"
              id="objectiveField"
              class="form-control"
              placeholder="Enter here"
            ></textarea>
          </div>

          <div class="form-group mt-2" id="we">
            <label for="">Work Experience</label>
            <textarea
              rows="3"
              class="form-control weField"
              placeholder="Enter here"
            ></textarea>

            <!-- new textArea -->

            <div class="container text-center mt-2" id="weAddButton">
              <button onclick="addNewwField()" class="btn btn-primary btn-sm">
                Add
              </button>
            </div>
          </div>


          <div class="form-group mt-2" id="aq">
            <label for="">Academic Qualification</label>
            <textarea
              rows="3"
              class="form-control eqField"
              placeholder="Enter here"
            ></textarea>

            <div class="container text-center mt-2" id="aqAddButton">
              <button onclick="addNewAQField()" class="btn btn-primary btn-sm">
                Add
              </button>
            </div>
          </div>
          

          
          <div class="form-group mt-2" id="sq">
            <label for="">Skills</label>
            <textarea
              rows="3"
              class="form-control sField"
              placeholder="Enter here"
            ></textarea> 

             <div class="container text-center mt-2" id="sAddButton">
              <button onclick="addNewSField()" class="btn btn-primary btn-sm">
                Add
              </button>
            </div> 
          </div>
          

        </div>
      </div>

      <div class="container text-center mt-3">
        <button onclick="generateCV()" class="btn btn-primary btn-lg">
          Generate CV
        </button>
      </div>
      
    </div>

    <!-- cv template -->
    <div class="container" id="cv-template">
      <div class="row">
        <div class="col-md-4 text-center py-5 background">
          

          <img
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREOx_x34eMOlLMI_PI-Z75Cb8pgFYonXWRuOY6WgERLHH6wc_mldQzZR8_VhBCHLhUaC4&usqp=CAU"
            alt=""
            class="img-fluid myimg"
          />

          <div class="container">
            <p id="nameT1" >Om Nath Dixit</p>
           
            <p id="addressT" >Mayur Vihar Phase-1</p>

            <hr />

            <p><a id="fbT" href="#1">https://www.facebook.com/OmDixit</a></p>
            <p><a id="instaT" href="#1">https://www.instagram.com/OmDixit</a></p>
            <p><a id="linkedT" href="#1">https://www.linkedin.com/OmDixit</a></p>

            <p id="aboutT">Hii my name is Om Nath Dixit.I am a Btech 2nd year Student. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut et tenetur quia fugiat laborum ratione architecto quos asperiores amet beatae.  </p>
          </div>


        </div>

        <div class="col-md-8 py-5">
         

          <h1 id="nameT2" class="text-center" style="font-weight: 900">Om Nath Dixit</h1>

          <div class="card mt-4">
            <div class="card-header background">
              <h3>Objective</h3>
            </div>
            <div class="card-body">
              <p id="objectiveT">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Officiis laudantium necessitatibus impedit odio ipsum vel
                soluta, minus ut voluptas nobis labore consequatur fugit unde
                eveniet. Iure sed repellendus sequi ducimus et quisquam dolores
                explicabo est, amet dolor nulla neque. Soluta nam delectus quam
                natus vitae pariatur enim quasi minus impedit.
              </p>
            </div>
          </div>

          
          <div class="class mt-4">
            <div class="card-header background">
              <h3>Work Experience</h3>
            </div>
            <div class="card-body">
              <ul id="weT">
                <li>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Atque, aliquid.
                </li>
              
                <li>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Atque, aliquid.
                </li>
              
                <li>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Atque, aliquid.
                </li>
              </ul>
            </div>
          </div>

          

          <div class="class mt-4">
            <div class="card-header background">
              <h3>Academic Qualification</h3>
            </div>
            <div class="card-body">
              <ul id="aqT">
                <li>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Atque, aliquid.
                </li>
              
                <li>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Atque, aliquid.
                </li>
              
                <li>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Atque, aliquid.
                </li>
              </ul>
            </div>
          </div>


          

           <div class="class mt-4">
            <div class="card-header background">
              <h3>Skills</h3>
            </div>
            <div class="card-body">
              <ul id="sT">
                <li>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Atque, aliquid.
                </li>
              
                <li>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Atque, aliquid.
                </li>
              
                <li>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Atque, aliquid.
                </li>
              </ul>
            </div>
          </div> 

          <div class="container mt-3 text-center">
            <button onclick="printCV()" class="btn background">Print CV</button>
          </div>

        </div>
      </div>
    </div>
    <section class="container">
			
			<a href="logout.php" class="btn btn-block btn-outline-danger">Sign Out</a>
		</section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
</body>
</html>