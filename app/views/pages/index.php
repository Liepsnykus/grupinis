<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">

    <div class="d-flex flex-wrap">
        <!-- Filter menu ====================================-->
        <div class="float-md-left">
            <div class="accordion" id="accordionExample">
                <!-- City ======================================== -->
                <div class="card border-left-0 border-right-0">
                    <div class="card-header border-bottom-0" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Miestas
                            </button>
                        </h2>s
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <form action="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="cityCheck1">
                                    <label class="form-check-label" for="cityCheck1">
                                        Vilnius
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="cityCheck2">
                                    <label class="form-check-label" for="dcityCheck2">
                                        Kaunas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="dcityCheck2">
                                    <label class="form-check-label" for="cityCheck2">
                                        Panevėžys
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- nights count ======================================== -->
                <div class="card  border-left-0 border-right-0">
                    <div class="card-header border-bottom-0" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Nakvynės trukmė
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <form action="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="nightsCheck1">
                                    <label class="form-check-label" for="nightsCheck1">
                                        1 nakvynė
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="2" id="nightsCheck2">
                                    <label class="form-check-label" for="nightsCheck2">
                                        2 nakvynės
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="3" id="nightsCheck3">
                                    <label class="form-check-label" for="nightsCheck3">
                                        3 nakvynės
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="4" id="nightsCheck4">
                                    <label class="form-check-label" for="nightsCheck4">
                                        3+ nakvynės
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- persons count ================================================ -->
                <div class="card  border-left-0 border-right-0">
                    <div class="card-header border-bottom-0" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Asmenų skaičius: <span id="personsCount">1</span>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <form action="">
                                <input type="range" class="custom-range" min="1" max="5" id="personsRange" value="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!-- price =============================================================== -->
            <div class="card  border-left-0 border-right-0">
                <div class="card-header border-bottom-0" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Kaina
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="priceRange1">
                                <label class="form-check-label" for="priceRange1">
                                    0€ - 20€
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="2" id="priceRange2">
                                <label class="form-check-label" for="priceRange2">
                                    20€ - 30€
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="3" id="priceRange3">
                                <label class="form-check-label" for="priceRange3">
                                    30€ - 40€
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="4" id="priceRange4">
                                <label class="form-check-label" for="priceRange4">
                                    40€+
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Filter results ====================================-->
        <div>
        <div id="productsContainer" class="products-container">
                <h2 class="display-3">Loading</h2>
            </div>
        </div>

    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>