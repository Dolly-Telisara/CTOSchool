@extends('theme_layout.app')
@section('description', 'Share text and photos with your friends and have fun')
@section('keywords', 'ctoschool, python for beginners, python, online course, photo,')
 @section('title', 'Python for Beginners')

    @section('content')

 <!-- SUB BANNER -->
    <section class="sub-banner sub-banner-course">
        <div class="awe-static bg-sub-banner-course"></div>
        <div class="container">
            <div class="sub-banner-content">
                <h2 class="text-center">  <img src="{{ asset('theme_files/images/python_logo.png') }}" alt="" style="height: 60px"> Learn Python - Live Cohort exclusively for Beginners</h2>
                <h5 class="text-center">Accelerate Your Career with India's most comprehensive Online Python Cohort with Data Structures & Algorithms Course </h5>
            </div>
        </div>
    </section>
    <!-- END / SUB BANNER -->

     <!-- PAGE CONTROL -->
     <section class="page-control">
        <div class="container">
            <div class="page-info">
                <a href="/courses"><i class="icon md-arrow-left"></i>Back to courses</a>
            </div>
        </div>
    </section>
    <!-- END / PAGE CONTROL -->

    <!-- COURSE -->
    <section class="course-top">
        <div class="container">
            <div class="row">
                 <!-- Sidebar -->
                <div class="col-md-5">
                     <div class="sidebar-course-intro">
                        <div class="breadcrumb">
                            <a href="/">Home</a> / 
                            <a href="products">Products</a> / 
                            Python for Beginners
                        </div>   
                        <div class="video-course-intro">
                            <div class="inner">
                                <div class="video-place">
                                    <div class="img-thumb">
                                        <img src="{{ asset('theme_files/images/thumb-intro.jpg') }}" alt="">
                                    </div>
                                    <div class="awe-overlay"></div>
                                    <a href="#" class="play-icon">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                                <div class="video embed-responsive embed-responsive-16by9">
                                    <iframe src="//player.vimeo.com/video/100872038" class="embed-responsive-item">
                                    </iframe>
                                </div>
                            </div>
                           <div class="price">
                            <i class="fa fa-inr">9999</i>
                             </div>                            
                             <a href="#" class="mc-btn btn-style-1">Register</a>
                        </div> 
                        <!-- End /video-course-intro -->

                        <div class="new-course">
                            <div class="item course-code">
                                <i class="icon md-barcode"></i>
                                <h4><a href="#">Course Code</a></h4>
                                <p class="detail-course"># A 15273</p>
                            </div>
                            <div class="item course-code">
                                <i class="icon md-time"></i>
                                <h4><a href="#">Duration</a></h4>
                                <p class="detail-course">3 weeks</p>
                            </div>
                            <div class="item course-code">
                                <i class="icon md-img-check"></i>
                                <h4><a href="#">Open Date</a></h4>
                                <p class="detail-course">7 June 2021</p>
                            </div>
                        </div>
                        <hr class="line">

                        <div class="about-instructor">
                            <h4 class="xsm black bold">About Python Cohort</h4>
                            <ul>
                                <li>
                                     <div class="info-instructor">
                                        <ul>    
                                            <li>Those who register (initially google form, later registration option in the website), will be added to one discord group.</li>
                                        <br>
                                            <li>This discord group will be dedicated for python learners.</li>
                                        <br> 
                                            <li>Everyday we'll be required material (articles/codes/videos etc) and students will complete the daily resources.</li> 
                                        <br>
                                            <li>Once in 3-4 days, there'll be MCQ and one live session.</li>
                                        <br>
                                            <li>At the end students will be divided into teams and will work on team project.</li>
                                        <br>
                                            <li>At the very end, there will be demo-day where students can showcase their projects to the entire cohort.</li> 
                                        <br>
                                           <li>Students will get course completion <strong>certificate.</strong> </li> 
                                        <br>
                                            <li>One discord group will be limited to about <strong>50 students</strong>.</li> 
                                        <br>
                                            <li>Potential industry exposure. </li>
                                        <br>   
                                            <li>You can take up assignments, projects from existing tech-companies out there and could help provide internship to yourself and your students, strengthening industry exposure at your college.</li>
                                        <br>   
                                            <li>You shall receive a long standing relationship with CTOschool and Manas at large for any future technology assistance.</li>
                                        <br>
                                            <li><strong>Fees - INR 9999 + 18% & GST</strong></li>
                                        <br>
                                            <!-- <li><a href="https://rzp.io/i/aTuZZoWr8" target="_blank"><strong>Click here to Register</strong></a></li> -->
                                        <br>
                                        <li>For any <b>queries</b> - telegram @ 9028201604</li>
                                        </ul>  
                                    </div>
                                </li>
                             
                                <br>                  
                                <hr class="line">

                                <li>
                                    <div class="widget widget_equipment">
                                        <i class="fa fa-person"></i>
                                        <h4 class="xsm black bold">About Python Bot</h4>
                                        <ul>
                                            <li>
                                                <div class="image-instructor text-center">
                                                    <img src="{{ asset('theme_files/images/team-13.jpg') }}" alt="">
                                                </div>
                                                <div class="info-instructor">
                                                    <cite class="sm black"><a href="#">John Doe</a></cite>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                                    <a href="#"><i class="fa fa-check-square"></i></a>
                                                    <p>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor. Ut sollicitudin lectus dolor eget imperdiet libero</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>     
                                </li>
                            </ul>
                        </div> 
                        <!-- End / about-instructor-->
                           
                        <hr class="line">
                     
                        <div class="widget widget_share">
                            <i class="icon md-forward"></i>
                            <h4 class="xsm black bold">Share course</h4>
                            <div class="share-body">
                                <a href="#" class="twitter" title="twitter">
                                    <i class="icon md-twitter"></i>
                                </a>
                                <a href="#" class="facebook" title="facebook">
                                    <i class="icon md-facebook-1"></i>
                                </a>
                                <a href="#" class="google-plus" title="google plus">
                                    <i class="icon md-google-plus"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>    
                <!-- End / Sidebar -->

                <div class="col-md-7">
                    <div class="tabs-page">
                        <ul class="nav-tabs" role="tablist">
                            <li class="active"><a href="#introduction" role="tab" data-toggle="tab">Introduction</a></li>
                            <li><a href="#outline" role="tab" data-toggle="tab">Outline</a></li>
                            <!-- <li><a href="#review" role="tab" data-toggle="tab">Review</a></li>
                            <li><a href="#conment" role="tab" data-toggle="tab">Comment</a></li> -->
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- INTRODUCTION -->
                            <div class="tab-pane fade in active" id="introduction">
                                
                                <h4 class="sm black bold">Introduction</h4>
                                <ul class="list-disc">
                                    <li>Python programming is widely used in Artificial Intelligence, Natural Language Generation, Neural Networks, and other advanced fields of Computer Science.Moreover, Python is one of the most demanded programming languages in the market, so there are huge job opportunities for candidates having knowledge of Python programming.</li>
                                    <li>A Ctoschool cohort is a series of courses that helps you master a skill. To begin, enroll in the Cohort directly, or review its courses and choose the one you'd like to start with. When you subscribe to a course that is part of a Cohort, you’re automatically subscribed to the full Specialization.</li>
                                    <li>This Specialization builds on the success of the Python for Beginner course and will introduce fundamental programming concepts including data structures, networked application program interfaces, and databases, using the Python programming language. In the Capstone Project, you’ll use the technologies learned throughout the Specialization to design and create your own  applications for data retrieval, processing, and visualization.</li>
                                </ul>


                                <h4 class="sm black bold">Hands-on Project</h4>
                                <ul class="list-disc">
                                    <li>Every Specialization includes a hands-on project. You'll need to successfully finish the project(s) to complete the Specialization and earn your certificate. </li>
                                </ul> 

                                <h4 class="sm black bold">Earn a Certificate</h4>
                                <ul class="list-disc">
                                    <li>When you finish every course and complete the hands-on project, you'll earn a Certificate that you can share with prospective employers and your professional network.</li>
                                </ul> 
                                

                                <h4 class="sm black bold">Goal of Course</h4>
                                <ul class="list-disc">
                                    <li><p>Industry-relevant content</p></li>
                                    <li><p>Project reviews</p></li>
                                    <li><p>Career services / job assistance</p></li>
                                    <li><p>Rich learning content</p></li>
                                    <li><p>Taught by industry professionals</p></li>
                                    <li><p>Student support community</p></li>
                                    <li><p>Interactive quizzes</p></li>
                                    <li><p>Self-paced learning materials</p></li>
                                </ul>

                                
                                <h4 class="sm black bold">Prerequisite</h4>
                                <ul class="list-disc">
                                   
                                    <li>This Python tutorial is designed for absolute beginners for learning Python online.</li>
                                    <li>However, if you have basic knowledge of any programming language concepts like loops,functions,etc.,it will help you learn Python online easily.</li>
                                 </ul>

                                 <h4 class="sm black bold">What you'll learn ?</h4>
                                <ul class="list-disc">
                                    <li>Have a fundamental understanding of the Python programming language.</li>
                                    <li>Have the skills and understanding of Python to confidently apply for Python programming jobs.</li>
                                    <li>Acquire the pre-requisite Python skills to move into specific branches - Machine Learning, Data Science, etc..</li>
                                    <li>Add the Python Object-Oriented Programming (OOP) skills to your resume.</li>
                                    <li>Understand how to create your own Python programs.</li>
                                    <li>Learn Python from experienced professional software developers.</li>
                                    <li>Understand both Python 2 and Python 3.</li>
                                </ul>    
                                
                                <h4 class="sm black bold">About Course</h4>
                               
                                
                                <li>Whether you want to: </li>

                                <ul class="list-disc" style="list-style-type:none">
                                    <li><b>-</b> build the skills you need to get your first Python programming job</li>
                                    <li><b>-</b> move to a more senior software developer position</li>
                                    <li><b>-</b> get started with Machine Learning, Data Science, Django or other hot areas that Python specialises in</li>
                                    <li><b>-</b> or just learn Python to be able to create your own Python apps quickly.</li>
                                    <li>…then you need a solid foundation in Python programming. And this course is designed to give you those core skills, fast.</li>
                                </ul>

                                <ul class="list-disc">
                                    <li>This course is aimed at complete beginners who have never programmed before, as well as existing programmers who want to increase their career options by learning Python.</li>
                                    <li>The fact is, Python is one of the most popular programming languages in the world – Huge companies like Google use it in mission critical applications like Google Search.</li>
                                    <li>And Python is the number one language choice for machine learning, data science and artificial intelligence. To get those high paying jobs you need an expert knowledge of Python, and that’s what you will get from this course.</li>
                                    <li>By the end of the course you’ll be able to apply in confidence for Python programming jobs. And yes, this applies even if you have never programmed before. With the right skills which you will learn in this course, you can become employable and valuable in the eyes of future employers.</li>
                                </ul>                                
                            </div>
                            <!-- END / INTRODUCTION -->
    
                            <!-- OUTLINE -->
                            <div class="tab-pane fade " id="outline">
    
                                <!-- SECTION OUTLINE -->
                                <div class="section-outline">
                                    <h4 class="tit-section xsm">Course Content</h4>
                                    <ul class="section-list">
                                        <li>
                                            <div class="count"><span>1</span></div>
                                            <div class="list-body">
                                                <p><a href="#">Data Types </a></p>
                                                <div class="data-lessons">
                                                    <span>15 min</span>
                                                </div>
                                            </div>
                                            <a href="https://colab.research.google.com/drive/1Qp-kjJ46MBzgycPcIN_43pUEDxTuLAzF#scrollTo=Qnn8Od_FHgzK" class="mc-btn-2 btn-style-2">Preview</a>
                                        </li>
    
                                        <li>
                                            <div class="count"><span>2</span></div>
                                            <div class="list-body">             
                                                <p><a href="#">Operators</a></p>
                                                <div class="data-lessons">
                                                    <span>20:00 min</span>
                                                </div>
                                            </div>
                                            <a href="https://colab.research.google.com/drive/1LhsGyWhbEqnDX4sf4xcnIefahIAlbn96" class="mc-btn-2 btn-style-2">Preview</a>
                                        </li>
    
                                        <li>
                                            <div class="count"><span>3</span></div>
                                            <div class="list-body">
                                                <p><a href="#">List</a></p>
                                                <!-- <div class="data-lessons">
                                                    <span>36:56</span>
                                                </div> -->
                                            </div>
                                            <!-- <a href="#" class="mc-btn-2 btn-style-2">Preview</a> -->
                                        </li>
    
                                        <li>
                                            <div class="count"><span>4</span></div>
                                            <div class="list-body">
                                                <p><a href="#">Tuples</a></p>
                                                <!-- <div class="data-lessons">
                                                    <span>45min</span>
                                                </div> -->
                                            </div>
                                            <!-- <a href="#" class="mc-btn-2 btn-style-2">Preview</a> -->
                                        </li>
    
                                        <li>
                                            <div class="count"><span>5</span></div>
                                            <div class="list-body">
                                                <p><a href="#">Dictionary</a></p>
                                                <!-- <div class="data-lessons">
                                                    <span>43min</span>
                                                </div> -->
                                            </div>
                                            <!-- <a href="#" class="mc-btn-2 btn-style-2">Preview</a> -->
                                        </li>
    
                                        <li>
                                            <div class="count"><span>6</span></div>
                                            <div class="list-body">
                                                <p><a href="#"><span>Class & Object</a></p>
                                            
                                            <!-- <div class="data-lessons">
                                                    <span>34min</span>
                                            </div> -->
                                            </div>
                                            <!-- <a href="#" class="mc-btn-2 btn-style-2">Preview</a> -->
                                        </li>
                                      
                                         <li>   
                                            <div class="count"><span>7</span></div>
                                            <div class="list-body">
                                                <p><a href="#">Functions</a></p>
                                                <!-- <div class="data-lessons">
                                                    <span>26min</span>
                                                </div> -->
                                            </div>
                                            <!-- <a href="#" class="mc-btn-2 btn-style-2">Preview</a> -->
                                        </li>
    
                                        <li>
                                            <div class="count"><span>8</span></div>
                                            <div class="list-body">                                        
                                                <p><a href="#">for loop</a></p>
                                                <!-- <div class="data-lessons">
                                                    <span>47min</span>
                                                </div> -->
                                            </div>
                                            <!-- <a href="#" class="mc-btn-2 btn-style-2">Preview</a> -->
                                        </li>
    
                                        <li>
                                            <div class="count"><span>9</span></div>
                                            <div class="list-body">
                                                <p><a href="#">while loop </a></p>
                                                <!-- <div class="data-lessons">
                                                    <span>25min</span>
                                                </div> -->
                                            </div>
                                            <!-- <a href="#" class="mc-btn-2 btn-style-2">Preview</a> -->
                                        </li>
    
                                        <li>
                                            <div class="count"><span>10</span></div>
                                            <div class="list-body">
                                                <p><a href="#">if-else-if</a></p>
                                                <!-- <div class="data-lessons">
                                                    <span>20min</span>
                                                </div> -->
                                            </div>
                                            <!-- <a href="#" class="mc-btn-2 btn-style-2">Preview</a> -->
                                        </li>
    
                                        <li>
                                            <div class="count"><span>11</span></div>
                                            <div class="list-body">
                                                <p><a href="#">Sets</a></p>
                                                <!-- <div class="data-lessons">
                                                    <span>31min</span>
                                                </div> -->
                                            </div>
                                            <!-- <a href="#" class="mc-btn-2 btn-style-2">Preview</a> -->
                                        </li>
    
                                        <li>
                                            <div class="count"><span>12</span></div>
                                            <div class="list-body">
                                                <p><a href="#">Arrays</a></p>
                                            </div>
                                            <!-- <a href="#" class="mc-btn-2 btn-style-2">Preview</a> -->
                                        </li>

                                        <li>
                                            <div class="count"><span>13</span></div>
                                            <div class="list-body">
                                                <p><a href="#">File handling</a></p>
                                            </div>
                                            <!-- <a href="#" class="mc-btn-2 btn-style-2">Preview</a> -->
                                        </li>
                                </div>
                                <!-- SECTION OUTLINE -->
                            </div>
                            <!-- END / OUTLINE -->                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / COURSE TOP -->
@endsection('content')

