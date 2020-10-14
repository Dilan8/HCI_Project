<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Account</title>
   
</head>
<?php include 'header.php'; ?>

<body>
    <section class="customer-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead class="thead-dark">
                            <h1 style="text-align: center;"> Acoount Setting</h1>
                        </thead>
                        <tbody>
                            <tr>

                                <th class="box" scope="row">Full Name</th>
                                <td class="text">Dilan Vasandaraj &ensp;&ensp;
                                    <button type="button" class="btn btn-dark btn-xs edit" style="padding-left: 20px;"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-success btn-xs save" style="padding-left: 20px;"><i class="fas fa-save"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th class="box" scope="row">Email Address</th>
                                <td class="text">vasandarajdilan64@gmail.com
                                    <button type="button" class="btn btn-dark btn-xs edit" style="padding-left: 20px;"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-success btn-xs save" style="padding-left: 20px;"><i class="fas fa-save"></i></button>
                                </td>

                            </tr>
                            <tr>
                                <th class="box" scope="row">Phone Number</th>
                                <td class="text">0717236676
                                    <button type="button" class="btn btn-dark btn-xs edit" style="padding-left: 20px;"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-success btn-xs save" style="padding-left: 20px;"><i class="fas fa-save"></i></button>
                                </td>

                            </tr>
                            <tr>
                                <th class="box" scope="row">Password</th>
                                <td class="text">*******
                                    <button type="button" class="btn btn-dark btn-xs edit" style="padding-left: 20px;"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-success btn-xs save" style="padding-left: 20px;"><i class="fas fa-save"></i></button>
                                </td>

                            </tr>
                            <tr>
                                <th scope="row">Security Question</th>
                                <td>
                                    Your Birth place?
                                </td>

                            </tr>
                            <tr>
                                <th scope="row">Your Answer</th>
                                <td>Batticalo</td>

                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>
</body>
<?php include 'footer.php'; ?>

</html>