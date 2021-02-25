<?php require APPROOT . '/views/inc/header.php';

?>

<div class="container justify-content-sm-center justify-content-xs-center">

    <div class="d-md-flex">
        <!-- Filter side menu ====================================-->
        <div class="filterContainer">
            <div class="accordion" id="accordionExample"></div>
            <!-- City ======================================== -->
            <div class="card border-left-0 border-right-0">
                <div class="border-bottom-0 p-2 position-relative" id="headingOne">
                    <h2 class="mb-0">

                        <button class="btn btn-block text-left collapsed" id="cityBtn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <div class="d-flex justify-content-between">
                                <div><i class="fas fa-city"></i> Miestas</span></div>
                                <div><i class="fas fa-chevron-down" id="iCity"></i></div>
                            </div>
                        </button>
                    </h2>
                    <!-- <div class="position-absolute w-100 h-100 top-0"></div> -->
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <form action="" method="POST" id="filterForm">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="city1" value="Vilnius" id="cityCheck1">
                                <label class="form-check-label" for="cityCheck1">
                                    Vilnius
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="city2" value="Kaunas" id="cityCheck2">
                                <label class="form-check-label" for="cityCheck2">
                                    Kaunas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="city3" value="Panevėžys" id="cityCheck3">
                                <label class="form-check-label" for="cityCheck3">
                                    Panevėžys
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- nights count ======================================== -->
            <div class="card  border-left-0 border-right-0">
                <div class="border-bottom-0 p-2" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-block text-left collapsed" id="nightsBtn" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div class="d-flex justify-content-between">
                                <div><i class="far fa-clock"></i> Nakvynės trukmė</div>
                                <div><i class="fas fa-chevron-down" id="iNights"></i></div>
                            </div>
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
                <div class="border-bottom-0 p-2" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-block text-left collapsed" id="personsBtn" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <div class="d-flex justify-content-between">
                                <div><i class="fas fa-user-friends"></i> Asmenų skaičius: <span id="personsCount"></span></div>
                                <div><i class="fas fa-chevron-down" id="iPersons"></i></div>
                            </div>

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

            <!-- price =============================================================== -->
            <div class="card  border-left-0 border-right-0">
                <div class="border-bottom-0 p-2" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-block text-left collapsed" id="priceBtn" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <div class="d-flex justify-content-between">
                                <div><i class="fas fa-tag"></i> Kaina</div>
                                <div><i class="fas fa-chevron-down" id="iPrice"></i></div>
                            </div>
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
        <div class="ml-2">
            <div id="productsContainer" class="products-container d-flex flex-wrap justify-content-md-start justify-content-sm-center justify-content-center">
                <?php foreach ($data['products'] as $product) : ?>
                    <div class="card m-2" style="min-width: 16rem; max-width: 22rem">
                        <img src="<?php echo $product->product_image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $product->product_name ?></h6>
                            <h6 class="card-subtitle text-muted mb-2"><?php echo strtoupper($product->product_seller) ?></h6>
                            <p class="m-0 text-muted"><?php echo $product->product_location ?></p>
                            <div class="d-flex">
                                <div class="w-50 priceTag">
                                    <div>Nuo</div>
                                    <h2><?php echo $product->product_price ?>€</h2>
                                </div>
                                <div class="w-50 details">
                                    <div><i class="fas fa-user-friends"></i> <?php echo $product->product_participants ?> asmenys</div>
                                    <div><i class="far fa-clock"></i> <?php echo $product->product_duration ?> nakvynės</div>
                                    <div><i class="far fa-calendar-alt"></i> iki <?php echo $product->product_valid_time ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

    </div>
</div>


<script>

    let city = []
    let nights = []
    let persons
    let price = []

    function fetchItems() {
        data = new FormData()
        data.append('city', city);
        data.append('nights', nights);
        data.append('persons', persons);
        data.append('price', price);

        fetch('<?php echo URLROOT . '/api/filterProducts' ?>', {
                method: 'post',
                body: data
            })
            .then(resp => resp.json())
            .then(data => {
                insertHTMLToOutput(data)
            })
            .catch(error => console.error(error));
    }

    // get city filter data====================================

    const city1 = document.getElementById('cityCheck1')
    const city2 = document.getElementById('cityCheck2')
    const city3 = document.getElementById('cityCheck3')

    city1.addEventListener('change', filterCity)
    city2.addEventListener('change', filterCity)
    city3.addEventListener('change', filterCity)

    function filterCity(event) {

        if (event.target.checked) {
            city.push(event.target.value)
            fetchItems()
        } else {
            city.splice(city.indexOf(event.target.value), 1)
            fetchItems()
        }
    }

    // get persons filter data =================================

    const personsCount = document.getElementById('personsCount')
    const personsSliderValue = document.getElementById('personsRange')
    const productsContainer = document.getElementById('productsContainer')

    personsSliderValue.addEventListener('change', displayValue)

    function displayValue(event) {
        personsCount.innerText = event.target.value
        persons = event.target.value
        fetchItems()
    }


    // Get nights filter data ==============================================
    const night1 = document.getElementById('nightsCheck1')
    const night2 = document.getElementById('nightsCheck2')
    const night3 = document.getElementById('nightsCheck3')
    const night4 = document.getElementById('nightsCheck4')

    night1.addEventListener('change', filterNight)
    night2.addEventListener('change', filterNight)
    night3.addEventListener('change', filterNight)
    night4.addEventListener('change', filterNight)

    function filterNight(event) {

        if (event.target.checked) {
            nights.push(event.target.value)
            fetchItems()
        } else {
            nights.splice(nights.indexOf(event.target.value), 1)
            fetchItems()
        }
    }

    // get price filter ========================

    const price1 = document.getElementById('priceRange1')
    const price2 = document.getElementById('priceRange2')
    const price3 = document.getElementById('priceRange3')
    const price4 = document.getElementById('priceRange4')

    price1.addEventListener('change', filterPrice)
    price2.addEventListener('change', filterPrice)
    price3.addEventListener('change', filterPrice)
    price4.addEventListener('change', filterPrice)

    function filterPrice(event) {

        if (event.target.checked) {
            price.push(event.target.value)
            fetchItems()
        } else {
            price.splice(price.indexOf(event.target.value), 1)
            fetchItems()
        }
    }

    function insertHTMLToOutput(data) {
        productsContainer.innerHTML = ''
        data.map(function(item) {
            productsContainer.innerHTML += generateCard(item);
        });
    }

    function printDataToOutput(data) {
        productsContainer.innerText = data
    }

    function generateCard(item) {
        return `<div class="card m-3" style="max-width: 20rem;">
                        <img src="${item.product_image}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">${item.product_name}</h6>
                            <h6 class="card-subtitle text-muted mb-2">${item.product_seller}</h6>
                            <p class="m-0 text-muted">${item.product_location}</p>
                            <div class="d-flex">
                                <div class="w-50 priceTag">
                                    <div>Nuo</div>
                                    <h2>${item.product_price} €</h2>
                                </div>
                                <div class="w-50 details">
                                    <div><i class="fas fa-user-friends"></i> ${item.product_participants}asmenys</div>
                                    <div><i class="far fa-clock"></i> ${item.product_duration} nakvynės</div>
                                    <div><i class="far fa-calendar-alt"></i> iki ${item.product_valid_time}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;
    }

</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>