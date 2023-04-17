function getMainContent(link) {
    $.ajax({
        // The link we are accessing.
        url: link,
            
        // The type of request.
        type: "get",
            
        // The type of data that is getting returned.
        dataType: "html",

        success: function( strData ){
            document.getElementById("mainContent").innerHTML = strData;
            const items = document.querySelectorAll(".carousel-item");

            items.forEach((el) => {
                const minPerSlide = 4
                let next = el.nextElementSibling
                for (var i=1; i<minPerSlide; i++) {
                    if (!next) {
                        // wrap carousel by using first child
                        next = items[0]
                        console.log([el])
                    }
                    let cloneChild = next.cloneNode(true)
                    el.appendChild(cloneChild.children[0])
                    next = next.nextElementSibling
                }
            })
        }
    });
}