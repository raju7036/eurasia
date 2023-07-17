<?php include"header.php"?>

<!-- /* modal */ -->

<div class="modal fade jobs_modal " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <!-- <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> -->
            <div class="modal-body modal_content">
                <div class="modale_heading">
                    <h1>Apply for this Job</h1>
                </div>
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form_filed">
                                <label for="name">Full Name</label>
                                <input type="text" placeholder="Enter Your Name">
                            </div>
                            <div class="form_filed">
                                <label for="name">Current/Previous Job Title</label>
                                <input type="text" placeholder="Current/Previous Job Title">
                            </div>
                            <div class="form_filed">
                                <label for="email">Email</label>
                                <input type="text" placeholder="Enter Your Email">
                            </div>
                            <div class="form_filed">
                                <label for="name">Linkedin Account</label>
                                <input type="text" placeholder="Enter Your Acount">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form_filed">
                                <label for="name">Resume/CV*(PDF,Word,TXT,6MB Maxium)</label>
                                <input type="file">
                            </div>
                            <div class="form_filed">
                                <label for="name">Years of Experience</label>
                                <input type="text" placeholder="Enter Your Experience">
                            </div>
                            <div class="form_filed">
                                <label for="phone">Phone Number</label>
                                <input type="text" placeholder="Enter Your Phone Number">
                            </div>
                            <div class="form_filed">
                                <label for="name">Upload a Photo (6MB Maxium)</label>
                                <input type="file" placeholder="Enter Your Acount">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="button_appl">
                                <button>Apply</button>
                            </div>
                        </div>

                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

<section class="services career_banner middle">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="service_heading" data-aos="fade-up" data-aos-duration="2000">
                    <h1>Jobs at Eurasia</h1>
                    <p>Our will writing service is authorised and regulated
                        by the Solicitors Regulation Authority</p>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">jobs</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="carer_jobs">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6">
                        <div class="carer_imgs" data-aos="fade-up" data-aos-duration="2000">
                            <img src="images/career_img_1.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="carer_job_content" data-aos="fade-up" data-aos-duration="2000">
                            <h6>Jobs</h6>
                            <h1>Live in Carer Jobs</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letter</p>
                            <h5>Nationwide Opportunities</h5>
                            <h5>Salary: 36K</h5>
                            <h5>Full time</h5>
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal">Apply Now</button>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="carer_job_content" data-aos="fade-up" data-aos-duration="2000">
                            <h6>Jobs</h6>
                            <h1>Visiting Carer Jobs</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letter</p>
                            <h5>Nationwide Opportunities</h5>
                            <h5>Salary: 36K</h5>
                            <h5>Full time</h5>
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal">Apply Now</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="carer_imgs" data-aos="fade-up" data-aos-duration="2000">
                            <img src="images/career_img_2.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="carer_imgs" data-aos="fade-up" data-aos-duration="2000">
                            <img src="images/career_img_3.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="carer_job_content" data-aos="fade-up" data-aos-duration="2000">
                            <h6>Jobs</h6>
                            <h1>Office Vacancies</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letter</p>
                            <h5>Nationwide Opportunities</h5>
                            <h5>Salary: 36K</h5>
                            <h5>Full time</h5>
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>




<?php include"footer.php"?>