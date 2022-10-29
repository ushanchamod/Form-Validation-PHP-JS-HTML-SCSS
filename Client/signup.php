<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="signUpContainer">
      <div class="mainCard">
        <!--End of left div-->
        <div class="right">
          <h2>Sign Up</h2>
          <form action="main.php" method="post">
            <table>
              <tbody>
                <!-- first Name &last Name -->
                <tr>
                  <td>
                    <label for="firstNameInput" id="firstName">First Name</label>
                    <input
                      type="text"
                      name="fName"
                      id="firstNameInput"
                      placeholder="Enter Your First Name"
                      required
                    />
                  </td>

                  <td>
                    <label for="lastNameInput" id="lastName">Last Name</label>
                    <input
                      type="text"
                      name="lName"
                      id="lastNameInput"
                      placeholder="Enter Your last Name"
                      required
                    />
                  </td>
                </tr>

                <!-- Address -->
                <tr>
                  <td colspan="2">
                    <label for="addressInput" id="address">Address</Address></label>
                    <input
                      type="address"
                      name="address"
                      id="addressInput"
                      placeholder="Enter Your Address"
                      required
                    />
                  </td>
                </tr>

                <!-- Email and Mobile No -->
                <tr>
                  <td>
                    <label for="emailImpute" id="email">Email</label>
                    <input
                      type="email"
                      name="email"
                      id="emailImpute"
                      placeholder="Enter Your email"
                      required
                    />
                  </td>
 
                  <td>
                    <label for="mobileInput" id="mobile">Mobile No.</label>
                    <input
                      type="tel"
                      name="mobile"
                      id="mobileInput"
                      placeholder="Enter Your mobile Number"
                      required
                    />
                  </td>
                </tr>
                
                <!-- Password and Re-Password -->
                <tr>
                  <td>
                    <label for="passwordInput" id="password">Password</Address></label>
                    <input
                      type="password"
                      name="pass"
                      id="passwordInput"
                      placeholder="Enter Your Password"
                      required
                    />
                  </td>
 
                  <td>
                    <label for="passwordInputRe" id="password">Re-Password</Address></label>
                    <input
                      type="password"
                      name="password"
                      id="passwordInputRe"
                      placeholder="Enter Your mobile"
                      required
                    />
                  </td>
                </tr>
              </tbody>
            </table>
            <button>Sugn Up</button>
            <p class="signUpLink">
              If you have an account <a href="./login.php">Sign Up</a>
            </p>
          </form>
          <!--End of form-->
        </div>
        <!--End of right div-->
      </div>
    </div>
    <!--End of container-->
  </body>
</html>
