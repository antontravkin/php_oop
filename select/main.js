let select = function () {
    let selectHeader = document.querySelectorAll('.select__header')
    let selectItem = document.querySelectorAll('.select__item')
    let option = document.querySelectorAll('option')

    selectHeader.forEach((item) => {
        item.addEventListener('click', selectToggle)
    })
    selectItem.forEach((item) => {
        item.addEventListener('click', selectChoose)
    })
    function selectToggle() {
        this.parentElement.classList.toggle('is-active')
    }

    function selectChoose() {
        let text = this.innerText,
            select = this.closest('.select'),
            currntText = select.querySelector('.select__current')
        currntText.innerText = text
        select.classList.remove('is-active')

        option.forEach((item) => {
            console.log()

            if (item.value == this.getAttribute('data-test')) {
                item.setAttribute('selected', 'selected')
            } else {
                item.removeAttribute('selected', 'selected')
            }
        })
    }
}
select()
