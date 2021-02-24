
    const personsCount = document.getElementById('personsCount')
    const personsSliderValue = document.getElementById('personsRange')
    const productsContainer = document.getElementById('productsContainer')


    personsSliderValue.addEventListener('change', displayValue)

    function displayValue(event) {
        personsCount.innerText =  event.target.value
        console.log(event.target.value);
        filterItems()
        
    }

    function filterItems() {

        generateHTMLproducts()
    }

    function generateHTMLproducts(commentArr) {
        productsContainer.innerHTML = '';
        commentArr.forEach(function(commentObj) {
            productsContainer.innerHTML += generateComment(commentObj);
        });
    }
