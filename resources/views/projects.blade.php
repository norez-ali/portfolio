@extends('layout.main')
@push('styles')
    <style>
        /* Overlay / Hover Effect */
        .project-item {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
        }

        .project-item img {
            transition: transform 0.4s ease;
        }

        .project-item:hover img {
            transform: scale(1.1);
        }

        .project-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.9));
            opacity: 0;
            transition: 0.4s ease;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .project-item:hover .project-overlay {
            opacity: 1;
        }

        .project-title {
            font-size: 22px;
            font-weight: 700;
            color: #fff !important;
            margin-bottom: 5px;
        }

        .project-desc {
            font-size: 15px;
            color: #ddd;
            line-height: 1.4;
            margin-bottom: 20px;
            opacity: 0;
            transform: translateY(10px);
            transition: 0.4s ease;
        }

        .project-item:hover .project-desc {
            opacity: 1;
            transform: translateY(0px);
        }

        .project-arrow {
            color: #fff;
            opacity: 0;
            transition: 0.4s ease;
        }

        .project-item:hover .project-arrow {
            opacity: 1;
        }
    </style>
@endpush
@section('content')
    <!-- Portfolio Section Start -->
    <section class="bg-white pt-20 pb-120 m-10">
        <div class="container mx-auto">
            <div class="row">
                <div class="col-12" data-aos="flip-down" data-aos-delay="400">
                    <div class="fw-bold font-Syne text-center leading-none d-flex flex-wrap flex-column gap-y-2 mb-10">
                        <span class="text-warning text-xl">Portfolio</span>
                        <h3 class="section-title text-dark">My recent <span
                                class="position-relative circle-shape portfolio-shape">w</span>ork</h3>
                    </div>
                </div>
            </div>
            <div class="row g-6">

                <!-- 1: Educrat LMS -->
                <div class="col-12 col-md-6 col-lg-5" data-aos="flip-down" data-aos-delay="600">
                    <div class="project-item shadow-lg">
                        <img class="w-100 h-100" src="assets/images/projects/project5.jpg" alt="Educrat LMS">

                        <div class="project-overlay">
                            <h4 class="project-title">Educrat LMS</h4>
                            <p class="project-desc">
                                A multi-role LMS where Admins manage users and course approvals, Teachers create course
                                content and quizzes, and Students access lectures and attempt quizzes in a smooth learning
                                experience.
                            </p>


                        </div>
                    </div>
                </div>

                <!-- 2: Sociala – Social Media App -->
                <div class="col-12 col-md-6 col-lg-7" data-aos="flip-down" data-aos-delay="800">
                    <div class="project-item shadow-lg">
                        <img class="w-100 h-100" src="assets/images/projects/project6.jpg" alt="Sociala Social App">

                        <div class="project-overlay">
                            <h4 class="project-title">Sociala</h4>
                            <p class="project-desc">
                                A modern social media platform where users can create accounts, manage their profiles, send
                                and accept friend requests, form groups, and engage with the community.
                                Users can share posts and stories, like, comment, and interact seamlessly, while receiving
                                real-time notifications to stay connected with their network.
                            </p>


                        </div>
                    </div>
                </div>

                <!-- 3: Examism – Voucher Purchasing -->
                <div class="col-12 col-md-6 col-lg-5" data-aos="flip-down" data-aos-delay="1000">
                    <div class="project-item shadow-lg">
                        <img class="w-100 h-100" src="assets/images/projects/project7.jpg" alt="Examism">

                        <div class="project-overlay">
                            <h4 class="project-title">Examism</h4>
                            <p class="project-desc">
                                A platform for bulk purchasing IELTS, PTE, and international exam vouchers with automated
                                delivery.
                                My role was to create and manage the vouchers as an admin and implement frontend validation
                                so users could enter vouchers and automatically receive discounted pricing.
                            </p>


                        </div>
                    </div>
                </div>

                <!-- 4: Dashlite Tutors -->
                <div class="col-12 col-md-6 col-lg-7" data-aos="flip-down" data-aos-delay="1200">
                    <div class="project-item shadow-lg">
                        <img class="w-100 h-100" src="assets/images/projects/project8.jpg" alt="Dashlite Tutors">

                        <div class="project-overlay">
                            <h4 class="project-title">Dashlite Tutors</h4>
                            <p class="project-desc">
                                A tutor registration platform where teachers register and are approved by admins, making
                                them discoverable to verified students.
                                Admins manage teacher approvals and overall platform settings, while students can easily
                                find and connect with qualified tutors in their area.
                            </p>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->
@endsection
