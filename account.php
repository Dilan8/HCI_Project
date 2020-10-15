<?php include 'header.php'; ?>

<body>
  <section class="customer-details" style="background: linear-gradient(180deg, white,#a6d1ff, white );">

    <div class="col-lg-12">

      <div style="margin-top:30px;" class="cards bg-secondary shadow">
        <div class="card-header bg-white border-0">

          <div class="row align-items-center">
            <div class="card-profile-image">

              <img id="myImg" src="images/avatar.png" class="rounded-circle">

            </div>
            <div class="col-10">
              <h3 style="text-align: center; color:black" class="mb-0">Account Info</h3>
            </div>

          </div>
        </div>
        <div class="card-body">
          <form>
            <h6 class="heading-small text-muted mb-4">User information</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label dark" for="input-username">User Name</label>
                    <input type="text" id="input-username" readonly="true" class="form-control form-control-alternative" value="Dilan Vasandaraj">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Email Address</label>
                    <input type="email" id="input-email" readonly="true" class="form-control form-control-alternative" value="vasandarajdilan64@gmail.com">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-first-name">Contact No</label>
                    <input type="text" id="input-first-name" readonly="true" class="form-control form-control-alternative" value="0717236676">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-last-name">Password</label>
                    <input type="password" id="input-last-name" readonly="true" class="form-control form-control-alternative" value="************">
                  </div>
                </div>
              </div>
            </div>
          </form>
          <div class=" text-right">
            <button id="myBtn" class="btn btn-sm btn-success">Edit Profile</button>
          </div>
        </div>
      </div>
    </div>

    <br></br>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h5>Shipping Info</h5>
          <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Full Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Address line 1:</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Address line 2:</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">City:</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">State/Province/Region:</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Zip:</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Country:</label>
              <select multiple class="form-control" id="exampleFormControlSelect2">
                <option>Srilanka</option>
                <option>Dubai</option>
                <option>USA</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Phone number:</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group" style="position: relative; left:10px;">
              <input type="submit" value="Add" class="btn float-right login_btn">
            </div>
            <div class="form-group">
              <input type="button" onclick="myFunction()" value="Reset" class="btn float-right login_btn">
            </div>
          </form>
        </div>
        <div class="col-lg-6">
        <h5>Shipping Info</h5>
        <table class="table">
  <thead class="thead-dark">
    <tr >
      <th scope="col">Fullname</th>
      <th scope="col">Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Remove</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Dilan Vasandaraj</th>
      <td>172/b,Dimbulla road,hatton,22000</td>
      <td>0717236676</td>
      <td><button type="button" class="btn btn-danger">Remove</button></td>
      <td><button type="button" class="btn btn-danger">Edit</button></td>
    </tr>
  </tbody>
</table>
        </div>
      </div>
    </div>
  </section>
  <br><br> <br><br>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h5>Billing Info</h5>
          <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Full Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Address line 1:</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Address line 2:</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">City:</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">State/Province/Region:</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Zip:</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Country:</label>
              <select multiple class="form-control" id="exampleFormControlSelect2">
                <option>Srilanka</option>
                <option>Dubai</option>
                <option>USA</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Phone number:</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group" style="position: relative; left:10px;">
              <input type="submit" value="Add" class="btn float-right login_btn">
            </div>
            <div class="form-group">
              <input type="button" onclick="myFunction()" value="Reset" class="btn float-right login_btn">
            </div>
          </form>
        </div>
        <div class="col-lg-6">
        <h5>Billing Info</h5>
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Fullname</th>
      <th scope="col">Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">remove</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Dilan Vasandaraj</th>
      <td>172/b,Dimbulla road,hatton</td>
      <td>0717236676</td>
      <td><button type="button" class="btn btn-danger">Remove</button></td>
      <td><button type="button" class="btn btn-danger">Edit</button></td>
    </tr>
  </tbody>
</table>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      < </div> </section> <div id="myModal" class="customModal">
        <!-- Modal content -->
        <div class="customModal-content col-lg-6">
          <section class="wrapper2" style="background: linear-gradient(180deg, white, #007bff);">
            <span class="close">&times;</span>

            <div class="card-body">
              <form>

                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label dark" for="input-username">User Name</label>
                        <input type="text" id="input-username" required class="form-control form-control-alternative" value="Dilan Vasandaraj">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email Address</label>
                        <input type="email" id="input-email" required class="form-control form-control-alternative" value="vasandarajdilan64@gmail.com">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Contact No</label>
                        <input type="text" id="input-first-name" required class="form-control form-control-alternative" value="0717236676">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Password</label>
                        <input type="password" id="input-last-name" required class="form-control form-control-alternative" value="************">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-group focused">

                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="form-group focused">
                        <button id="edit1" type="submit" class="btn btn-sm btn-success">Save Changes</button>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group focused">
                        <button id="cac" class="btn btn-sm btn-danger">Cancel Changes</button>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group focused">

                      </div>
                    </div>
                  </div>





                </div>
              </form>
            </div>
          </section>
        </div>

    </div>
    <?php include 'footer.php'; ?>