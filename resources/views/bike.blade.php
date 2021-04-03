@extends("theme")


@section("content")


      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img height="600" src="https://media.zigcdn.com/media/model/2020/Mar/yamaha-yzf-r15-v3-right-side-view_360x240.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img height="600" src="https://bd.gaadicdn.com/processedimages/yamaha/yamaha-fazer/source/m_fazer_11540278948.jpg?tr=w-360" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img height="600" src="https://bd.gaadicdn.com/processedimages/yamaha/yamaha-rx-100/640X309/v_rx-100-std1561366088.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br>
      <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-3 col-md-4 col-lg-6 col-xl-12 col-xxl-12">
                <table class="table">
                    <tr>
                        <td><div class="card" style="width: 18rem;">
                            <img height="300" src="https://bd.gaadicdn.com/processedimages/yamaha/yamaha-rx-100/640X309/v_rx-100-std1561366088.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Yamaha RX100</h5>
                              <p class="card-text">Price Rs.45,982</p>
                              <a href="/booking" class="btn btn-primary">Order Now</a>
                            </div>
                          </div>
                          </td>
                        <td><div class="card" style="width: 18rem;">
                            <img height="300" src="https://lh3.googleusercontent.com/proxy/2lV2XHItGvcJELMQmJEH9N4Z4z-FM-xpkxau2ihxBujtb9Im6gnZacFVIPvOfaSiDdUKc2VuVOAxgHj3mXUHVxPHsaXQWzpDECAIst0bQEyKBtCPBoCAMOSlGSM8zD878Ax2yoWmaaVd1rU" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Yamaha Fascino </h5>
                              <p class="card-text">Price Rs.50,000 </p>
                              <a href="/booking" class="btn btn-primary">Order Now</a>
                            </div>
                          </div></td>
                       
                        <td><div class="card" style="width: 18rem;">
                            <img height="300" src="https://5.imimg.com/data5/FW/PO/JR/SELLER-3535906/yamaha-fzs-fi-150cc-500x500.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Yamaha Fzs Fi 150cc</h5>
                              <p class="card-text">Price Rs.50,000</p>
                              <a href="/booking" class="btn btn-primary">Order Now</a>
                            </div>
                          </div></td>
                        </tr>
                        <tr>

                        <td>
                            <div class="card" style="width: 18rem;">
                                <img height="300" src="https://bd.gaadicdn.com/processedimages/yamaha/yamaha-fazer/source/m_fazer_11540278948.jpg?tr=w-360s" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Yamaha Fazer-FI</h5>
                                  <p class="card-text">Price  ₹89,643.00</p>
                                  <a href="/booking" class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img height="300" src="https://bd.gaadicdn.com/processedimages/yamaha/yamaha-fz-1/source/m_yamaha-fz-1_12.jpg?tr=h-48" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Yamaha FZ1</h5>
                                  <p class="card-text">Price  ₹70,000.00</p>
                                  <a href="/booking" class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img src="https://bd.gaadicdn.com/processedimages/yamaha/mt-15-bs6/source/mt-15-bs65e3a3f03e6b99.jpg?tr=w-360" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Yamaha MT-15</h5>
                                  <p class="card-text">Price Rs 1.64 Lakh</p>
                                  <a href="/booking" class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                    </tr>
                </table>


@endsection