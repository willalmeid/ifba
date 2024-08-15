function menuShow() {
    let usuarioClick = document.querySelector('.usuario-click');
    // if (usuarioClick.classList.contains('open')) {
        //     usuarioClick.classList.remove('open');
        // } else {
            //     usuarioClick.classList.add('open');
            // }
    usuarioClick.classList.toggle('open')
}

function shearchShow() {
    let shearchClick = document.querySelector('.shearch-bar');
    shearchClick.classList.toggle('shearch-click')
}