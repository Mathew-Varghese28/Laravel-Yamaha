@extends("theme")


@section("content")


    
    <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6"> 
            <img src="https://www.yamaha-motor.com.ph/yamaha-official-logo.jpg" class="img-fluid" alt="...">
        </div>

    
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6"> 
            <br>
            <h1>
                Enquiry/Feedback
            </h1>
            <br>
            <table class="table">
                <input type="text" class="form-control" placeholder="Enter your Name"><br>
                <input type="email" class="form-control" placeholder="Email"><br>
                <input type="text" class="form-control" placeholder="Address"><br>
                <input type="text" class="form-control" placeholder="Contact No"><br>
                <textarea type="text" class="form-control" placeholder="Feedback"></textarea>
                <br>
                <button class="btn btn-danger">Submit</button>
            </table>
        </div>



@endsection