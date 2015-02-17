    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 20,
                header = document.querySelector("header"),
                c = "smaller";
            if (distanceY > shrinkOn) {
                header.classList.add( c );
                logo.classList.add( c );
                content.classList.add( c );
            } else {
                if (header.innerHTML != null){
                    header.classList.remove( c );
                    logo.classList.remove( c );
                    content.classList.remove( c );
                }
            }
        });
    }
    window.onload = init();