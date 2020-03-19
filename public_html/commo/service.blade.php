@extends('layout.master')

@section('title')
Service
@endsection
@section('topbar')



<header id="header" class="fixed-top">
    <div class="container">

        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
            <a href="/#intro" class="scrollto"><img src="img/logo1.png" alt="" class="img-fluid"></a>
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/#about">About Us</a></li>
                <li><a href="/portofolio">Portfolio</a></li>
                <li class="active"><a href="/services">Services</a></li>
                <li><a href="/news" class="btn-yellow">Commo News</a></li>
            </ul>
        </nav><!-- .main-nav -->
    </div>
</header><!-- #header -->
@endsection

@section('content')


<main id="main">


    <section id="intro3" class="clearfix">

    </section><!-- #intro -->

    <section id="project">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 ">
                    <h2 class="font-weight-bold ">
                        Project
                    </h2>
                    <h4> Brain Campaign</h4>
                </div>

                <div class="col-md-9 borderleft pl-4">
                    <a href="/services-post">
                        <h3 class="font-weight-bold postlink">Company Profile</h3>
                    </a>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                        including versions of Lorem Ipsum.</p>

                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                        including versions of Lorem Ipsum.</p>

                    <img src="http://localhost/commo/public/img/mockup.jpg" class="headline py-4" alt="">

                    <a href="/services-post">
                        <h3 class="font-weight-bold postlink">Company Profile</h3>
                    </a>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                        including versions of Lorem Ipsum.</p>

                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                        including versions of Lorem Ipsum.</p>
                    <div class="row">
                        <div class="col-md-6 p-2">
                            <img src="http://localhost/commo/public/img/brosur.jpg" class="headline " alt="">
                        </div>
                        <div class="col-md-6 p-2">
                            <img src="http://localhost/commo/public/img/brosur.jpg" class="headline " alt="">
                        </div>
                        <div class="col-md-6 p-2">
                            <img src="http://localhost/commo/public/img/brosur.jpg" class="headline " alt="">
                        </div>
                        <div class="col-md-6 p-2">
                            <img src="http://localhost/commo/public/img/brosur.jpg" class="headline " alt="">
                        </div>
                    </div>
					<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                        including versions of Lorem Ipsum.</p>

                </div>

            </div>

        </div>

    </section>
	
	<section>

        <div class="container mt-5">
			<hr style="border:1px solid">
		</div>
	<section>
	

    <section>

        <div class="container mt-5 mb-5">
            <div class="row mt-5 mb-5">
                <div class="col-12 text-center">
                    <h3 class="font-weight-bold">
                        Want to work with us ?
                    </h3>
                    <a href="" class="blackbrd">Start Project</a>
                </div>
            </div>
        </div>
		
        <div class="container-fluid bg-light mt-5 mb-5">
            <div class="container pt-3">

                <div class="row">

                    <div class="col-12 text-center">
                        <h3 class="font-weight-bold">
                            Related Project
                        </h3>

                    </div>

                    <div class="col-md-4 text-center pl-3 pr-3">
                        <img src="img/portfolio/app1.jpg" class="img-fluid"  style="height: 20vw; max-with: 100%;" alt="">
                        <h5 class="pb-0 mb-0 pt-3">Design App</h5>
                        <p class="pt-0 mt-0">Mobile Project</p>
                    </div>
                    <div class="col-md-4 text-center pl-3 pr-3">
                        <img src="img/portfolio/card1.jpg" class="img-fluid"  style="height: 20vw; max-with: 100%;" alt="">
                        <h5 class="pb-0 mb-0 pt-3">Design App</h5>
                        <p class="pt-0 mt-0">Mobile Project</p>
                    </div>
                    <div class="col-md-4 text-center pl-3 pr-3">
                        <img src="img/portfolio/web1.jpg" class="img-fluid"  style="height: 20vw; max-with: 100%;" alt="">
                        <h5 class="pb-0 mb-0 pt-3">Design App</h5>
                        <p class="pt-0 mt-0">Mobile Project</p>
                    </div>

                </div>

            </div>

        </div>

    </section>




    <!--==========================
    Contact Section
  ============================-->
    <section id="contact">
        <div class="container">


            <div class="row wow fadeInUp">

                <div class="col-md-3">
                    <div class="map mb-4 mb-lg-0">
                        <h1 class="font-weight-bold big text-white">Reach</h1>
                    </div>
                </div>

                <div class="col-md-9 ">


                    <div class="form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" data-rule="email"
                                        data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" data-rule="minlen:4"
                                    data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required"
                                    data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-left"><button type="submit" title="Send Message"
                                    class="btn btn-outline-warning">Send Message</button></div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #contact -->



</main>

@endsection
