<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shippy Website</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/favicon.ico') ?>" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('csss/styles.css') ?>" rel="stylesheet" />
</head>

<body id="page-top">
    <?php
    $session = session();
    ?>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm mb-5" id="mainNav">
        <div class="container px-2">
            <a class="navbar-brand fw-bold" href="<?= site_url('home/index') ?>">Shippy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <?php if ($session->get('isLoggedIn')) : ?>
                    <ul class="navbar-nav me-4 my-3 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link me-lg-3" href="<?= site_url('etalase/index') ?>">Etalase</a>
                        </li>
                        <!-- <li class="nav-item"><a class="nav-link me-lg-3" href="<?= site_url('transaksi/view') ?>">Transaksi</a></li> -->
                        <?php if (session()->get('role') == 0) : ?>
                            <li class="nav-item ">
                                <a class="nav-link me-lg-3" href="<?= site_url('barang/index') ?>">List Barang</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link me-lg-3" href="<?= site_url('barang/create') ?>">Tambah Barang</a>
                            </li>
                            <!-- <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Barang</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown01">
                                    <a class="dropdown-item" href="<?= site_url('barang/index') ?>">List Barang</a>
                                    <a class="dropdown-item" href="<?= site_url('barang/create') ?>">Tambah Barang</a>
                                </div>
                            </li> -->
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= site_url('transaksi/index') ?>">Transaksi</a>
                            </li>
                        <?php endif ?>
                    </ul>
                <?php endif ?>

                <div class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto">
                        <?php if ($session->get('isLoggedIn')) : ?>
                            <li class="nav-item  mt-1">
                                <a class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" href="<?= site_url('auth/logout') ?>">
                                    <span class="d-flex align-items-center">
                                        Logout
                                    </span>
                                </a>
                            </li>
                        <?php else : ?>
                            <!-- <li class="nav-item mx-3">
                                <a class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" href="<?= site_url('auth/login') ?>">
                                    <span class="d-flex align-items-center">
                                        Login
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" href="<?= site_url('auth/register') ?>">
                                    <span class="d-flex align-items-center">
                                        Register
                                    </span>
                                </a>
                            </li> -->
                        <?php endif ?>
                    </ul>
                </div>



            </div>
        </div>
    </nav>
    <!-- /.container -->
    <main role="main" class="container">

        <?= $this->renderSection('content') ?>

    </main>

    <!-- Footer-->
    <footer class="bg-black text-center py-5 mt-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; Your Website 2021. All Rights Reserved.</div>
                <a href="#!">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">Terms</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">FAQ</a>
            </div>
        </div>
    </footer>

    <!-- Feedback Modal-->
    <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-gradient-primary-to-secondary p-4">
                    <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0 p-4">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->

    <!-- Core theme JS-->
    <script src="<?= base_url('jquery-3.5.1.min.js') ?>"></script>
    <script src="<?= base_url('js/scripts.js') ?>"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <?= $this->renderSection('script') ?>

</body>

</html>