{
    //controls the accordion
    let accordionTab = document.querySelectorAll('.accordion-tab')
    for (let i = 0; i < accordionTab.length; i++) {
        accordionTab[i].addEventListener('click', () => {
            accordionTab.forEach((el) => {
                el.classList.remove('active')
            })
            accordionTab[i].classList.toggle('active')
            accordionTab[i].children[1].classList.toggle('active')
            accordionTab[i].children[0].classList.toggle('active-arrow')
        })
    }
}

{
    //mobile menu logic
    //adjust the menuHidden and menuDisplay positions to toggle show/hide
    let menuHiddenPosition = '-245px'
    let menuDisplayPosition = '0px'
    let mobileButton = document.getElementById('mobile-menu')
    let menu = document.getElementById('mobile-menu-container')
    mobileButton.addEventListener('click', (e) => {
        menu.style.right = menuDisplayPosition
        setTimeout(() => {
            cancelMenu()
        }, 500)
    })
    let cancelMenu = () => {
        document.addEventListener('click', (e) => {
            if (
                e.target.id != 'mobile-menu-container' &&
                e.target.id != 'mobile-menu'
            ) {
                menu.style.right = menuHiddenPosition
            }
        })
    }
}

{
    //grid buttons are entirely clickable instead of just the text itself
    let links = ['menu-owners', 'menu-tenants', 'menu-resources', 'menu-portal']
    links.forEach((e) => {
        let menu = document.querySelector(`#grid-links #${e}`)
        if (menu) {
            menu.addEventListener('click', (e) => {
                window.location.href = e.target.children[0].href
            })
        }
    })
}
