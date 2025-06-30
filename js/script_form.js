(function($) {
    $(document).ready(function () {

        /*Ползунок*/
        $(document).on('click', '#region_move', function(e) {
            e.preventDefault();
            let value_region = $('#region_move option:selected').attr('data-val');
            $('#range_p').val(value_region);
            $("#current_range").html(value_region);
        });
        $(document).on('change', '#range_p', function(e) {
            e.preventDefault();
            let val_range = $(this).val();
            $("#region_move > option").each(function() {
                if(parseInt($(this).attr('data-val')) == parseInt(val_range)) {
                    $('#region_move option:selected').removeAttr('selected');
                    console.log("true");
                    $(this).attr('selected','selected');
                }
            });
            $("#current_range").html(val_range);
        });
        $(document).on('click', '.fuel_block > span', function(e) {
            $(".fuel_block > span").removeClass('selected_fuel');
            $(this).addClass('selected_fuel');
        })
        $(document).on('click', '.brand_item ', function(e) {
            $(".brand_item").removeClass('active');
            $(this).addClass('active');
        });
         $(document).on('click', '.service_item ', function(e) {
            $(".service_item").removeClass('active');
            $(this).addClass('active');
        });
         $(document).on('click', '.promo_item ', function(e) {
            $(".promo_item").removeClass('active');
            $(this).addClass('active');
        })
        $(document).on('click', '#agree', function(e) {
            $( this ).toggleClass( "active_checkbox");
        })
        
        /*Отправка формы*/
        $(document).on('click', '#send__form, .order__form-button, .callback__form-button', function (e) {
            e.preventDefault();
            var id = '#' + $(this).attr('data-form') + '';
            var $data = {};
            $(id).find ('input').each(function() {
                $data[this.name] = $(this).val();
            });
            var name = $data.name;
            var email = $data.email;
            var phone = $data.phone;
            $(id).find ('textarea').each(function() {
                $data[this.name] = $(this).val();
            });
            var form_data = new FormData();
            let errorMessage = function(message) {
                $('.form_error').html("*Ошибка! " + message).show();
                setTimeout(function() { $('.form_error').hide(); }, 5000);
            };
            let agreeMessage = function(message) {
                $('.form_agree_message').html("*" + message).show();
                setTimeout(function() { $('.form_agree_message').hide(); }, 5000);
            };
            if (name ==='') {
                errorMessage('Введите Ваш ИНН!');
                return false;
            }
            if (name.match(/\d/g).length <= 11||name.match(/\d/g).length > 12) {
                errorMessage('ИНН должен быть 12 цифр! Вы ввели '+ name.match(/\d/g).length);
                return false;
            }
            if (phone ==='') {
                errorMessage('Введите Ваш телефон!');
                return false;
            }
            if (phone.match(/\d/g).length < 10) {
                errorMessage('Неверно введен номер телефона!');
                return false;
            }
            if(email === '') {
                errorMessage('Введите Ваш E-mail!');
                return false;
            }
            regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
            if (!regex.test(email)) {
                errorMessage('Неверно введен E-mail');
                return false;
            }
            if ($('#agree').hasClass('active_checkbox')) {
                errorMessage('Вы должны дать согласие на обработку данных!');
                return false;
            }
            if(name !== '') {
                form_data.append('action', 'sendForm');
                form_data.append('name', name);
                form_data.append('email', email);
                form_data.append('phone', phone);
                $.ajax({
                    url: myajax.url,
                    type: 'post',
                    data: form_data,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if (response.result === 'success') {
                            /*form.reset();*/
                            console.log(123); //консоль
                            $(id).trigger('reset');
                            agreeMessage('Спасибо! Успешно отправлено!');
                            //$('.modal_success').show();
                            //$('.popup p').html(response.message);
                            // $('#modal-success').show().css('display', 'inline-block');
                            setTimeout(function(){
                                $('.modal_success').hide();
                            }, 2500);
                        } else {
                            alert(response.message);
                            $('.modal_success').show();
                            $('.popup p').html(response.message);
                            setTimeout(function(){
                                $('.modal_success').hide();
                            }, 2500);
                        }
                    }
                });
                return false;
            } else {
                alert('Вы не заполнили все поля!');
            }
        });
        /*modal*/
        p = $('.popup__overlay.modal')
        modal_success = $('.popup__overlay.modal_success');
        $('#popup__toggle, .last, .footer-call').click(function() {
            p.css('display', 'block')
            $('#popup__toggle').hide();
        });
        $('#popup__toggle2,#popup__toggle3,#popup__toggle4,#popup__toggle5').click(function() {
            console.log($(this).parents()[8]);
            p.css('display', 'block')
        });
        p.click(function(event) {
            e = event || window.event
            if (e.target == this) {
                $(p).css('display', 'none');
            }
        });
        modal_success.click(function(event) {
            e = event || window.event
            if (e.target == this) {
                $(modal_success).css('display', 'none');
            }
        });
        $('.popup__close').click(function() {
            p.css('display', 'none');
            modal_success.css('display', 'none');
            $('#popup__toggle').show();
        });
        $('.tech-form-close').click(function() {
            $('.tech-form-block').css('display', 'none');
        });
        p.click(function () {
            $('#popup__toggle').show();
        });
        modal_success.click(function () {
            $('#popup__toggle').show();
        });
        $('#phone').inputmask("+7(999) 999-9999");
        // $('#phone2').inputmask("+7(999) 999-9999");
        // $('#phone3').inputmask("+7(999) 999-9999");
        // $('#phone4').inputmask("+7(999) 999-9999");
        //SLICK SLIDER LOGO
        // $('.logo_carousel').slick({
        //     slidesToShow: 4,
        //     slidesToScroll: 1,
        //     autoplay: true,
        //     infinite: true,
        //     autoplaySpeed: 2000,
        //     responsive: [
        //         {
        //             breakpoint: 1024,
        //             settings: {
        //                 slidesToShow: 3,
        //                 slidesToScroll: 3,
        //                 infinite: true,
        //                 centerMode: true,
        //                 dots: true
        //             }
        //         },
        //         {
        //             breakpoint: 600,
        //             settings: {
        //                 slidesToShow: 2,
        //                 centerMode: true,
        //                 slidesToScroll: 2
        //             }
        //         },
        //         {
        //             breakpoint: 480,
        //             settings: {
        //                 slidesToShow: 1,
        //                 centerMode: true,
        //                 slidesToScroll: 1
        //             }
        //         }
        //     ]
        //
        // });
        // $('.reviews_carousel').slick({
        //     slidesToShow: 1,
        //     slidesToScroll: 1,
        //     autoplay: true,
        //     infinite: true,
        //     dots: true,
        //     autoplaySpeed: 2000,
        // })
        $('.project_carousel').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 3000,
            dots: true,
            infinite: true,
            arrows: true,
            // centerMode: true,
            fade: false,
            cssEase: 'linear',
            responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            // centerMode: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            // centerMode: true,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            // centerMode: true,
                            slidesToScroll: 1
                        }
                    }
                ]

        })
        $('.project_carousel_next').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 3000,
            // dots: true,
            infinite: true,
            arrows: false,
            centerMode: false,
            fade: false,
            cssEase: 'linear'
        })
        $(document).on('click','.tab', function () {
            $('.tab').removeClass('active');
            $('.tab-cont').removeClass('active');
            $(this).addClass('active');
            var id = $(this).attr('data-id');
            console.log(id);
            $('#'+id).addClass('active');
        })
        $(document).on('click','.item_category', function () {
            $('.item_category').removeClass('active');
            //$('.tab-cont').removeClass('active');
            $(this).addClass('active');
            var id = $(this).attr('data-id');
            console.log(id);
            $('#'+id).addClass('active');
            var form_data = new FormData();
            var slug = $(this).attr('data-slug');
            var action = $(this).attr('data-action');
            form_data.append('slug', slug);
            form_data.append('action', action);
            $.ajax({
                url: myajax.url,
                type: 'post',
                data: form_data,
                contentType: false,
                processData: false,
                success: function (response) {
                    $('#result').html(response);
                }})
            return false;
        })
        $(document).on('click', '.block_more_button, .more_item', function () {
            $('.category_items').removeClass('hidden');
            console.log('zalupa');
        })
        $('#page-submenu-trigger').on('click', function (e) {
            e.preventDefault();
            if($('#page-menu').hasClass('active')) {
                $('#page-menu').removeClass('active');
            } else {
                $('#page-menu').addClass('active');
            }
            return false;
        } )
        // $('.services__wrapper').slick({
        //     slidesToShow: 4,
        //     slidesToScroll: 1,
        //     autoplay: true,
        //     infinite: true,
        //     dots: true,
        //     autoplaySpeed: 2000,
        // })
        // $('.reviews__wrapper').slick({
        //     slidesToShow: 3,
        //     slidesToScroll: 1,
        //     autoplay: true,
        //     infinite: true,
        //     dots: true,
        //     autoplaySpeed: 2000,
        // })
        $(document).ready(function(){
            $(".fa-search").click(function(){
                $(".search-form--open").toggleClass("active");
            });
        });
        // Fancybox.bind("[data-fancybox]", {
        //     // Your custom options
        // });
        Fancybox.bind('[data-fancybox="gallery"]', {
            // Your custom options
        });
        // $(document).ready(function() {
        //     $(".fancybox").fancybox();
        // });
        // $(document).ready(function() {
        //     $(".fancybox-thumb").fancybox({
        //         prevEffect	: 'none',
        //         nextEffect	: 'none',
        //         helpers	: {
        //             title	: {
        //                 type: 'outside'
        //             },
        //             thumbs	: {
        //                 width	: 50,
        //                 height	: 50
        //             }
        //         }
        //     });
        // });



    })
})(jQuery);