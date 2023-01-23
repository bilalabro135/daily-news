<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
                pageLanguage: 'en'
            },
            'google_translate_element'
        );
    }

    function googleSectionalElementInit() {
        new google.translate.SectionalElement({
            sectionalNodeClassName: 'lyrics',
            controlNodeClassName: 'translate-lyrics',
            background: 'trasparent'
        }, 'google_sectional_element');
    }
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?
			cb=googleTranslateElementInit">
</script>
<?php 
    
    $count = 0;
    if (isset($books) && count($books) > 5 ) {
        $count = 5;
    }elseif(count($books) < 5){
        $count = count($books);
    }
 ?>
<script type="text/javascript">
    
    $(document).ready(function() {
        setTimeout("displayTime()", 100);
        var mobileSubMenu = $('.header-nav');
        var placeMobileSubMenu = $('.mobile-submenu-wrapper');
        placeMobileSubMenu.html(mobileSubMenu.html());
        $(".main-event").click(function(e) {
            var tagName = e.target.tagName;
            if (tagName == "SPAN" || tagName == "span") {
                $(e.target).next().slideToggle(400);
            } else if ($(e.target).parent().hasClass("main-event") || $(e.target).parent().parent().hasClass("sub-menu")) {
                $(e.target.children[1]).slideToggle(1000);
            } else if (tagName == "a" || tagName == "A") {
                if (!$(e.target.parentNode.parentNode.parentNode).hasClass('newspaper-sub-menu') && $(e.target.parentNode.parentNode).hasClass('has-child')) {
                    e.preventDefault();
                    $(e.target).parent().next().slideToggle(400)
                } else {
                    $(e.target).attr('target', '_self');
                }


            }
        });
        $("#mobile-menu-btn").click(function() {
            $(".site-off").slideToggle(50);
        });
        $(".mobile-menu").click(function(e) {
            e.currentTarget.classList.toggle("change");
        });
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: false,
            nav: false,
            margin: 10,
            responsive: {
                0: {
                    items: 3
                },
                400: {
                    items: 3,
                },
                600: {
                    items: 3,
                },
                960: {
                    items: 4
                },
                1200: {
                    items: <?php echo $count; ?>
                }
            }
        });
        // owl.on('mousewheel', '.owl-stage', function(e) {
        //     if (e.deltaY > 0) {
        //         owl.trigger('next.owl');
        //     } else {
        //         owl.trigger('prev.owl');
        //     }
        //     e.preventDefault();
        // });
        $('.spaceEventListenerForCountries').on('input', function(e) {
            var search = $(this).val().toLowerCase();
            var countries = $(".sub-menu ul li span a")
            countries.each(function(index, item) {
                if (item.childNodes[1].textContent.toLocaleLowerCase().includes(search)) {
                    $(item.parentNode.parentNode).css('display', 'block');
                } else {
                    $(item.parentNode.parentNode).css('display', 'none');

                }
            })
        })
        var booksData = $('.allBooks .card');
        var result = [];
        $.each(booksData, function(i, e) {
            var matchingItems = $.grep(result, function(item) {
                return item.childNodes[3].childNodes[1].textContent === e.childNodes[3].childNodes[1].textContent;
            });
            if (matchingItems.length === 0) {
                result.push(e);
            }
        });
        console.log(result);
        var bookSearch = ""
        $(".bookSearchEvent").focusout(function() {
            if ($('.bookSearchEvent').val().length > 0) {
                $('.search-label').fadeOut(10)
            } else {
                $('.search-label').fadeIn(300)

            }
        })
        $(".bookSearchEvent").keyup(function() {
            bookSearch = $(this).val().toLocaleLowerCase().trim();
            $('.search-result ul').html('')
            $.each(result, function(i, e) {
                if (bookSearch.length > 0) {

                    if ($(e).children()[1].textContent.toLocaleLowerCase().trim().includes(bookSearch)) {
                        $('.search-result ul').css('border-top', '2px solid #888', 'padding-bottom', '1rem')

                        $('.search-result ul').append("<li> <a href='#'> " + e.childNodes[3].childNodes[1].textContent + " </a></li>")
                    }
                } else {
                    $('.search-result ul').css('border-top', 'none', 'padding-bottom', '0')
                }
            })

        })
        var counter = {};

        $('.newspaper-sub-menu ul li').click(function manageClicks(e) {
            if (!counter[$(this).children()[1].textContent]) counter[$(this).children()[1].textContent] = 0;
            if (e.target.tagName === "a" || e.target.tagName === "A") {
                counter[$(this).children()[1].textContent]++;
                if ($(this).children('small').length > 0) {
                    $(e.target).siblings("small").text(counter[$(this).children()[1].textContent])
                } else {
                    $(this).append('<small class="news-papers-visit"></small>')
                    $(this).children("small").text(counter[$(this).children()[1].textContent])
                }
            }

        });


    });

    function displayTime() {
        var dt = new Date();
        $("#date-new").html(dt.toLocaleTimeString());
        setTimeout("displayTime()", 1000);
    }
</script>