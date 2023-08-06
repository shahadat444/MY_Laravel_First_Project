@extends('layout.App')
@section('title','Portfolio')

@section('content')
                <!-- summary section -->
        <div class="container-fluid">
            <h2 class="mt-3 p-2 portTitle text-center mb-3 ">Welcome To Portfolio </h2>
            <div class="row">
                <div class="col-md-12  ">
                    <p class="TextPort">Creating a portfolio requires thoughtful curation and organization to effectively 
                        communicate the individual's skills and talents. The selection of materials should be
                         tailored to the specific audience or industry, showcasing the most
                          relevant and impressive work. A well-structured portfolio includes 
                          clear descriptions or annotations for each item, providing context
                           and insights into the creative process or professional
                            accomplishments.portfolio is a collection of work samples or materials
                             that showcse an individual's skills, accomplishments, and experiences. 
                             It is commonly used by professionals from various fields, such as artists,
                              designers, writers, photographers, and job seekers, to 
                            demonstrate their abilities and expertise to potential employersclients, or collarators.</p>
                </div>
            </div>
        </div>

                   <!--  Card Section -->

            <div class="container BGI">
                <h2 class="mt-4 mb-4 text-center CartTitle">Add to Cart</h2>
                <div class="row p-2 ">
                    <div class="col-md-4">
                        <img src="{{asset('images/card-p_1.jpg')}}" class="card-img-top" alt="PHP">
                        <div class="card-body ">
                        <h5 class="card-title">Learn Laravel</h5>
                        <p class="card-text">Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</p>
                        <a href="#" class="btn btn-primary">Cart</a>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <img src="{{asset('images/card-p_1.jpg')}}" class="card-img-top" alt="PHP">
                        <div class="card-body ">
                        <h5 class="card-title">Learn Laravel</h5>
                        <p class="card-text">Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</p>
                        <a href="#" class="btn btn-primary">Cart</a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <img src="{{asset('images/card-p_1.jpg')}}" class="card-img-top" alt="PHP">
                        <div class="card-body ">
                        <h5 class="card-title">Learn Laravel</h5>
                        <p class="card-text">Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</p>
                        <a href="#" class="btn btn-primary">Cart</a>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <img src="{{asset('images/card-p_1.jpg')}}" class="card-img-top" alt="PHP">
                        <div class="card-body ">
                        <h5 class="card-title">Learn Laravel</h5>
                        <p class="card-text">Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</p>
                        <a href="#" class="btn btn-primary">Cart</a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <img src="{{asset('images/card-p_1.jpg')}}" class="card-img-top" alt="PHP">
                        <div class="card-body ">
                        <h5 class="card-title">Learn Laravel</h5>
                        <p class="card-text">Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</p>
                        <a href="#" class="btn btn-primary">Cart</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('images/card-p_1.jpg')}}" class="card-img-top" alt="PHP">
                        <div class="card-body ">
                        <h5 class="card-title">Learn Laravel</h5>
                        <p class="card-text">Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</p>
                        <a href="#" class="btn btn-primary">Cart</a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <img src="{{asset('images/card-p_1.jpg')}}" class="card-img-top" alt="PHP">
                        <div class="card-body ">
                        <h5 class="card-title">Learn Laravel</h5>
                        <p class="card-text">Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</p>
                        <a href="#" class="btn btn-primary">Cart</a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <img src="{{asset('images/card-p_1.jpg')}}" class="card-img-top" alt="PHP">
                        <div class="card-body ">
                        <h5 class="card-title">Learn Laravel</h5>
                        <p class="card-text">Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</p>
                        <a href="#" class="btn btn-primary">Cart</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Your Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Your Address</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Your Mobile</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Your Massage</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    

                        <button type="submit" class="btn btn-block btn-primary">Submit</button>
                    </form>
                  </div>


                    <div class="col-md-6 mt-5 mb-2">
                        <h4 class="text-center">3583,Boxgonj,Nangalkot,Cumilla, Dhaka</h4>
                        <h4 class="text-center">Kingoftheareas4210@gmail.com</h4>
                        <h4 class="text-center" >+8801307856724</h4>
                    </div>

                </div>
            </div>
















@endsection
