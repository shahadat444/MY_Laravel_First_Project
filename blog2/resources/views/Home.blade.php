@extends('layout.App')
@section('title','Home')

@section('content')
    <!-- Top view -->

<div class="container-fluid  hm_image m-0">
    <div class="row mb-5 d-flex justify-content-center ">
        <div class="col-md-4 div1 text-center">
            <h2>Web Application Developer</h2>
            <h4>Video Editing & Photography</h4>
    <a href="#" class="btn btn-primary ">Learn More...</a>
        </div>
    </div>
</div> 
                <!--our Course  -->
<div class="container">
<h2 class="text-center mt-4 mb-4 contitle"> Enroll Our Course</h2>
    <div class="row mt-5 mb-5" >
        <div class="col-md-3 p-3">
                <div class="card" style="width: 18rem;">
                 <img src="{{asset('images/card-p_1.jpg')}}" class="card-img-top" alt="PHP">
                 <div class="card-body ">
                    <h5 class="card-title">Learn php</h5>
                    <p class="card-text">
                    
                    PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. </p>
                    <a href="#" class="btn btn-primary">Enroll Now</a>
                 </div>
            </div>
        </div>

         <div class="col-md-3 p-3">
                <div class="card" style="width: 18rem;">
                 <img src="{{asset('images/card-p_1.jpg')}}" class="card-img-top" alt="PHP">
                 <div class="card-body ">
                    <h5 class="card-title">Learn Javascript</h5>
                    <p class="card-text">JavaScript is the programming language of the Web. JavaScript is easy to learn.

                    </p>
                    <a href="#" class="btn btn-primary mt-4">Enroll Now</a>
                 </div>
            </div>
        </div>

        <div class="col-md-3 p-3">
                <div class="card" style="width: 18rem;">
                 <img src="{{asset('images/card-p_1.jpg')}}" class="card-img-top" alt="PHP">
                 <div class="card-body ">
                    <h5 class="card-title">Learn Html </h5>
                    <p class="card-text">HTML is the standard markup language for Web pages. With HTML you can create your own Website
                    </p>
                    <a href="#" class="btn btn-primary">Enroll Now</a>
                 </div>
            </div>
        </div>


        <div class="col-md-3 p-3">
                <div class="card" style="width: 18rem;">
                 <img src="{{asset('images/card-p_1.jpg')}}" class="card-img-top" alt="PHP">
                 <div class="card-body ">
                    <h5 class="card-title">Learn Laravel</h5>
                    <p class="card-text">Laravel is a web application framework with exprfreeing you to create without sweating the small things.</p>
                    <a href="#" class="btn btn-primary">Enroll Now</a>
                 </div>
            </div>
        </div>


        
    </div>
</div>


<!--Project  -->


<div class="container">
<h2 class="text-center mt-4 mb-4 contitle">Our Running Project</h2>
    <div class="row p-2">
        <div class="col-md-4">
          <img src="{{asset('images/card-p_1.jpg')}}" class="card-img-top" alt="PHP">
                 <div class="card-body ">
                    <h5 class="card-title">Learn Laravel</h5>
                    <p class="card-text">Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</p>
                    <a href="#" class="btn btn-primary">Enroll Now</a>
                 </div>
        </div>




        <div class="col-md-4">
          <img src="{{asset('images/card-p_1.jpg')}}" class="card-img-top" alt="PHP">
                 <div class="card-body ">
                    <h5 class="card-title">Learn Laravel</h5>
                    <p class="card-text">Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</p>
                    <a href="#" class="btn btn-primary">Enroll Now</a>
                 </div>
        </div>




        <div class="col-md-4">
          <img src="{{asset('images/card-p_1.jpg')}}" class="card-img-top" alt="PHP">
                 <div class="card-body ">
                    <h5 class="card-title">Learn Laravel</h5>
                    <p class="card-text">Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</p>
                    <a href="#" class="btn btn-primary">Enroll Now</a>
                 </div>
        </div>
    </div>
</div>

     <!-- contact form and Map -->

     <div class="container">
        <h2 class="text-center mt-4 mb-4 contitle">Contact With Me</h2>
        <div class="row">
            <div class="col-md-6 p-2">
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


            <div class="col-md-6 mt-4 mb-4 p-2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1823.886658873349!2d90.32990062479583!3d23.897655599143786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c33ee621208b%3A0xe45c9239422cb6ec!2zQXNodWxpYSBCdXMgU3RvcCDgpobgprbgp4HgprLgpr_gpq_gprzgpr4g4Kas4Ka-4Ka4IOCmuOCnjeCmn-Cmqg!5e0!3m2!1sen!2sbd!4v1689778140497!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


        </div>
     </div>



@endsection