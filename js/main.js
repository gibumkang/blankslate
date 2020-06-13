//logic to stop redirect and send POST to external URL, function must be global
const confirmation = () => {
    const proposalButton = document.getElementById('proposal-button')
    setTimeout(() => {
        proposalButton.disabled = true
        proposalButton.innerText = 'Submission Sent!'
        proposalButton.classList.add('submitted')
    }, 1000)
}

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

;(function () {
    /* Add this class to any elements you want to use to open Drift.
     *
     * Examples:
     * - <a class="drift-open-chat">Questions? We're here to help!</a>
     * - <button class="drift-open-chat">Chat now!</button>
     *
     * You can have any additional classes on those elements that you
     * would like.
     */
    var DRIFT_CHAT_SELECTOR = '.drift-open-chat'
    /* http://youmightnotneedjquery.com/#ready */
    function ready(fn) {
        if (document.readyState != 'loading') {
            fn()
        } else if (document.addEventListener) {
            document.addEventListener('DOMContentLoaded', fn)
        } else {
            document.attachEvent('onreadystatechange', function () {
                if (document.readyState != 'loading') fn()
            })
        }
    }
    /* http://youmightnotneedjquery.com/#each */
    function forEachElement(selector, fn) {
        var elements = document.querySelectorAll(selector)
        for (var i = 0; i < elements.length; i++) fn(elements[i], i)
    }
    function openSidebar(driftApi, event) {
        event.preventDefault()
        driftApi.sidebar.open()
        return false
    }
    ready(function () {
        drift.on('ready', function (api) {
            var handleClick = openSidebar.bind(this, api)
            forEachElement(DRIFT_CHAT_SELECTOR, function (el) {
                el.addEventListener('click', handleClick)
            })
        })
    })
})()
