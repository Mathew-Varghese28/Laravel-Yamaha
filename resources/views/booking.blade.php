@extends("theme")


@section("content")


    <h1 style="color: rgb(2, 4, 5);"><center><b><u>BOOKING DETAILS</u></b></center></h1>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-4">
                <table class="table table-borderless">
                    <tr>
                        <td><strong style="color: navy;"> Username</strong></td>
                        <td><input style="color: maroon;" type="text" class="form-control" placeholder="Username"></td>
                    </tr>
                    <tr>
                        <td><strong style="color: navy;"> Email id</strong></td>
                        <td><input style="color: maroon;" type="text" class="form-control" placeholder="abc@gmail.com"></td>
                    </tr>
                    <tr>
                        <td><strong style="color: navy;"> District</strong></td>
                        <td><input style="color: maroon;" type="text" class="form-control" placeholder="District"></td>
                    </tr>
                    <tr>
                        <td><strong style="color: navy;"> State</strong></td>
                        <td><input style="color: maroon;" type="text" class="form-control" placeholder="state"></td>
                    </tr>
                    <tr>
                        <td><strong style="color: navy;"> Password</strong></td>
                        <td><input style="color: maroon;" type="password" class="form-control" placeholder="password"></td>
                    </tr>
                    <tr>
                        <td><strong style="color: navy;"> Confirm password</strong></td>
                        <td><input style="color: maroon;" type="password" class="form-control" placeholder="Confirm Password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      <strong style="color: navy;">Agree to terms and conditions</strong>
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                  <tr>
                    <td></td>
                    <center>
                    <td><button class="btn btn-success">Order Now</button></td></center>
                </tr>
            </table>
            </div>
            <div class="col col-12 col-sm-4 col-md-4">
            </div>
            <div class="col col-12 col-sm-4 col-md-4">
               <center> <img src="https://i.pinimg.com/564x/37/aa/87/37aa8725510aac487fa585278f1a884b.jpg" alt=""></center>
               <center> <address style="font-family: Georgia, 'Times New Roman', Times, serif;">
                    <strong>Yamaha Cochin</strong><br>
                    Phone Number : +91- 0477 - 2242935<br>
                    Cochin <br>
                    Aluva-Kalamasery Road<br>
                    Eranakulam,Kerala<br>
                    688012 India 
                </address></center>
            </div>
            </div>
        </div>
    </div>
    
@endsection