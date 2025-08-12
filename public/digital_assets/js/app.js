function openSideBar() {
    document.getElementById("sideBar").classList.add("show")
}

function closeSideBar() {
    document.getElementById("sideBar").classList.remove("show")
}
// partner Slider
$(".partner-list").slick({
    autoplay: true,
    autoplaySpeed: 1000,
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    responsive: [{
            breakpoint: 950,
            settings: {
                arrows: false,
                slidesToShow: 4,
                dots: false
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                slidesToShow: 2,
                dots: false
            }
        }
    ]
});

$('.activate_package').on('click', function() {
    console.log($(this).attr('title'));
    console.log($("#package_name").val());
    $("#package_name").val($(this).attr('title'));
    $("#package_price").val($(this).attr('name'));

    console.log($("#package_name").val());
});