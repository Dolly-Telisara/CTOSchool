 @extends('theme_layout.app')
 @section('title', 'Upcoming Courses')

    @section('content')

    <!-- SUB BANNER -->
    <section class="sub-banner section">
        <div class="awe-parallax bg-profile-feature"></div>
        <div class="awe-overlay overlay-color-3"></div>
        <div class="container">
            <div class="sub-banner-content">
                <h2 class="big">This is banner for promoted course</h2>
                <p>this is not only an elegant theme but also a course management system for wordpress and drupal</p>
                <a href="python" class="mc-btn btn-style-3">See course</a>
            </div>
        </div>
    </section>
    <!-- END / SUB BANNER -->

    <!-- PAGE CONTROL -->
    <section class="page-control">
        <div class="container">
            <div class="page-info">
                <a href="/"><i class="icon md-arrow-left"></i>Back to home</a>
            </div>
        </div>
    </section>
    <!-- END / PAGE CONTROL -->
    
    <!-- CATEGORIES CONTENT -->
    <section id="categories-content" class="categories-content">
        <div class="container">
            <div class="content grid">
                 <div class="row">
                 <div class="col-md-12">
                    <div class="content grid">
                        <div class="bold"><h2>Our Methodology</h2></div>
                        <div>
                            <p>Cohort means group. CTOschool.live is a live school. A small group of 30-50 students learn at a time with each other, in teams, towards a shared goal!</p>
                            <p>As a graduate from CTOschool, you walk-away with not just the technical know-how but a close community of people who is walking the same path along with you and the extended CTOschool community consisting of mentors, CTOs and CXOs.</p>
                            <p><strong><i>Telegram Bot</i></strong></p>
                            <p><strong><i>Discord cohort</i></strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="content grid">

                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="mc-item mc-item-2">
                                    <div class="image-heading">
                                        <img src="{{ asset('theme_files/images/feature/img-1.jpg') }}" alt="">
                                    </div>
                                    <div class="meta-categories"><a href="#">Python</a></div>
                                    <div class="content-item">
                                        <h2><a href="python
                                        ">Python For Beginners</a></h2>
                                        <div class="name-author">
                                            <ol>
                                                <li>Starting point for an absolute beginner!</li>
                                                <li>Covers all the important concepts of python.</li>
                                                <li>A lot of hands on examples/assignments</li>
                                                <li>15 days | 6 live sessions</li>
                                                <li>1-1 interaction with each student</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="ft-item">
                                        <div class="view-info"><a href="https://forms.gle/p7BcowXRDuM7UQB26" class="btn btn-primary" target="_blank">Register Your Interest</a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="mc-item mc-item-2">
                                    <div class="image-heading">
                                        <img src="{{ asset('theme_files/images/feature/img-1.jpg') }}" alt="">
                                    </div>
                                    <div class="meta-categories">
                                        <div><a href="#">Upcoming course</a></div>
                                    </div>
                                   
                                    <div class="content-item">
                                        <h2><a href="#">Foundational ML & DL</a></h2>
                                        <div class="name-author">
                                            <ol>
                                                <li>Build foundation for ml-dl.</li>
                                                <li>10,000 ft overview of machine learning.</li>
                                                <li>Learn few but most imp concepts in ml dl (supervised/unsupervised/cnn...)</li>
                                                <li>Get your hands dirty with actual programming.</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="ft-item">
                                        <div class="view-info"><a href="https://forms.gle/p7BcowXRDuM7UQB26" class="btn btn-primary" target="_blank">Register Your Interest</a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="mc-item mc-item-2">
                                    <div class="image-heading">
                                        <img src="{{ asset('theme_files/images/feature/img-1.jpg') }}" alt="">
                                    </div>
                                    <div class="meta-categories">
                                        <div><a href="#">Upcoming course</a></div>
                                    </div>
                                    <div class="content-item">
                                        <h2><a href="#">Blockchain 101</a></h2>
                                        <div class="name-author">
                                            <ol>
                                                <li>Foundational course for anyone</li>
                                                <li>Learn how blockchain works and its usescases</li>
                                                <li>Get to know different types of blockchains</li>
                                                <li>Almost zero programming</li>
                                                <li>2 Week</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="ft-item">
                                        <div class="view-info"><a href="https://forms.gle/p7BcowXRDuM7UQB26" class="btn btn-primary" target="_blank">Register Your Interest</a></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
             </div> 
        </div>       
    </section>
    <!-- END / CATEGORIES CONTENT -->
    @endsection('content')
      
    