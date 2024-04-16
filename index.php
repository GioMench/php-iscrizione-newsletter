<?php
//var_dump(__DIR__."/helpers/functions.php");
require_once __DIR__."/helpers/functions.php";

var_dump($_GET);
var_dump(isset($_GET['email']));
$email = $_GET['email'];

if (isset($email)) {
    var_dump($email);
    $response = checkEmail($email);
    $message = generateAlert($response);

};

include_once __DIR__.'/layout/head.php';
?>




    <main>

        <?php if (isset($message)): ?>
            <div class="alert alert-<?= $message['status']; ?>" role="alert">
                <strong><?= $message['text']; ?></strong>
            </div>
        <?php endif; ?>


        <div class="p-5 mb-4 bg-light rounded-3">

            <div class="container-fluid py-5 z-1">

                <h1 class="display-5 fw-bold">Welcome to my site</h1>
                <p class="col-md-8 fs-4">
                    Lorem ipsum dolor
                </p>
                <button class="btn btn-primary btn-lg" type="button">
                    Browse me
                </button>
            </div>

        </div>



        <section class="posts my-4">
            <div class="container">
                <div class="row rwo-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>

                    </div>

                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>

                    </div>

                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>

                    </div>

                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>

                    </div>

                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>

                    </div>

                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>

                    </div>

                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>

                    </div>

                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/400/200" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="newsletter bg-secondary py-4">
            <div class="container ">
                <div class="col-6 text-center mx-auto text-white">
                    <h3>Newsletter</h3>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi assumenda saepe deleniti optio
                        neque minus cum, excepturi ullam vitae aut voluptatem quos numquam quia incidunt, quam sunt
                        consectetur repellendus autem!
                    </p>
                </div>

                <form action="" method="get" class="d-flex align-items-center justify-content-center">
                    <div>
                        <label for="email" class="form-label"></label>
                        <input type="text" class="form-control rounded-0" name="email" id="email"
                            aria-describedby="emailHelper" placeholder="" style="margin-top: 13px" />
                        <small id="emailHelper" class="form-text text muted"> Type your email address</small>
                    </div>
                    <button type="submit" class="btn btn-dark rounded-0" > Subscribe
                    </button>

                </form>
            </div>
        </section>

    </main>

    <footer class="py-4 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled">
                        <li><a href="/">1</a></li>
                        <li><a href="/">2</a></li>
                        <li><a href="/">3</a></li>
                    </ul>


                </div>

                <div class="col">
                    <h3>Legal</h3>
                    <ul class="list-unstyled">
                        <li><a href="/">A</a></li>
                        <li><a href="/">B</a></li>
                        <li><a href="/">C</a></li>
                    </ul>
                </div>

                <div class="col">
                    <h3>Company</h3>
                    <ul class="list-unstyled">
                        <li><a href="/">1</a></li>
                        <li><a href="/">2</a></li>
                        <li><a href="/">3</a></li>
                    </ul>
                </div>



            </div>
        </div>
    </footer>

</body>

</html>