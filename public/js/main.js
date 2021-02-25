    //filters animation =============================

    let cityArrowTriger = true
    let nightsArrowTriger = true
    let personArrowTriger = true
    let priceArrowTriger = true

    const iCity = document.getElementById('iCity')
    const iNights = document.getElementById('iNights')
    const iPersons = document.getElementById('iPersons')
    const iPrice = document.getElementById('iPrice')

    const cityBtn = document.getElementById('cityBtn')
    const nightsBtn = document.getElementById('nightsBtn')
    const personsBtn = document.getElementById('personsBtn')
    const priceBtn = document.getElementById('priceBtn')

    cityBtn.addEventListener('click', changeCityArrow)
    nightsBtn.addEventListener('click', changeNightsArrow)
    personsBtn.addEventListener('click', changePersonArrow)
    priceBtn.addEventListener('click', changePriceArrow)

    function changeCityArrow() {
        if (cityArrowTriger) {
            setTimeout(function() {
                iCity.classList.add('fa-chevron-up')
                iCity.classList.remove('fa-chevron-down')
                cityArrowTriger = false
            }, 300);
        } else {
            setTimeout(function() {
                iCity.classList.add('fa-chevron-down')
                iCity.classList.remove('fa-chevron-up')
                cityArrowTriger = true
            }, 300);
        }
    }
    function changeNightsArrow() {
        if (nightsArrowTriger) {
            setTimeout(function() {
                iNights.classList.add('fa-chevron-up')
                iNights.classList.remove('fa-chevron-down')
                nightsArrowTriger = false
            }, 300);
        } else {
            setTimeout(function() {
                iNights.classList.add('fa-chevron-down')
                iNights.classList.remove('fa-chevron-up')
                nightsArrowTriger = true
            }, 300);
        }
    }
    function changePersonArrow() {
        if (personArrowTriger) {
            setTimeout(function() {
                iPersons.classList.add('fa-chevron-up')
                iPersons.classList.remove('fa-chevron-down')
                personArrowTriger = false
            }, 300);
        } else {
            setTimeout(function() {
                iPersons.classList.add('fa-chevron-down')
                iPersons.classList.remove('fa-chevron-up')
                personArrowTriger = true
            }, 300);
        }
    }
    function changePriceArrow() {
        if (priceArrowTriger) {
            setTimeout(function() {
                iPrice.classList.add('fa-chevron-up')
                iPrice.classList.remove('fa-chevron-down')
                priceArrowTriger = false
            }, 300);
        } else {
            setTimeout(function() {
                iPrice.classList.add('fa-chevron-down')
                iPrice.classList.remove('fa-chevron-up')
                priceArrowTriger = true
            }, 300);
        }
    }