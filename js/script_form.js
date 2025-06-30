(function($) {
    $(document).ready(function () {

        /*Ползунок*/
        $(document).on('click', '#region_move', function(e) {
            e.preventDefault();
            let value_region = $('#region_move option:selected').attr('data-val');
            let id_scale = "tickmarks" + $('#region_move option:selected').attr('data-id');
            $('#current_range').html('0 тонн');
            $('#range_p').attr('max', value_region);
            $('#range_p').attr('list', id_scale);
            $('#range_p').val(0);
            $('.tickmarks').hide();
            $('#'+id_scale).show();
            let selectedFuel = parseInt($('.selected_fuel').attr('data-val'));
            if (selectedFuel > 0) {
                calculeteTariff();
            }
        });
        $(document).on('change', '#range_p', function(e) {
            e.preventDefault();
            let val_range = $(this).val() + " тонн";
            $("#current_range").html(val_range);
            calculeteTariff();
        });
        $(document).on('click', '.fuel_block > span', function(e) {
            $(".fuel_block > span").removeClass('selected_fuel');
            $(this).addClass('selected_fuel');
            let value_range = parseInt($('#range_p').val().match(/\d/g));
            var brandsShow = $(this).attr('data-brands').split(',');
            $(".brand_item").hide();
            for (let i = 0; i < brandsShow.length; i++) {
                $(".brand_item").each(function(key, val) {
                    let brand = $(this).find('span').text().trim();
                    if (brandsShow[i].trim() == brand) {
                        $(this).show();
                    }
                })
            }
            if (value_range > 0) {
                calculeteTariff();
            }
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
            console.log(calculeteTariff());
        })
        $(document).on('click', '#agree', function(e) {
            $( this ).toggleClass( "active_checkbox");
        })
        let calculeteTariff = function() {
            let selectedFuel = parseInt($('.selected_fuel').attr('data-val'));
            let countFuel = parseInt($('#range_p').val());
            let nameTariff= "Эконом";
            let nameFuel = $('.selected_fuel').html();
            let promo = [2, 5];
            let tarifDiscount = 3;
            if (selectedFuel == "" || isNaN(selectedFuel)) {
                alert("Выберите тип топлива и бренд топлива!");
                $('#current_range').html('0 тонн');
                $('#range_p').val(0);
                return false;
            }
            if (countFuel <= 100 && nameFuel === "Бензин" ) {
                nameTariff = "Эконом";
            }
            if (countFuel >= 100 && countFuel < 300 && nameFuel === "Бензин") {
                nameTariff = "Избранный";
                promo = [5, 20];
            }
            if (countFuel >= 300 && nameFuel === "Бензин") {
                nameTariff = "Премиум";
                promo = [20, 50];
                tarifDiscount = 7;
            }
            if (countFuel <= 200 && nameFuel === "Газ" ) {
                nameTariff = "Эконом";
            }
            if (countFuel >= 200 && countFuel < 700 && nameFuel === "Газ") {
                nameTariff = "Избранный";
                promo = [5, 20];
                tarifDiscount = 5;
            }
            if (countFuel >= 700 && nameFuel === "Газ") {
                nameTariff = "Премиум";
                promo = [20, 50];
                tarifDiscount = 7;
            }
            if (countFuel <= 150 && nameFuel === "ДТ" ) {
                nameTariff = "Эконом";
            }
            if (countFuel >= 350 && countFuel < 700 && nameFuel === "ДТ") {
                nameTariff = "Избранный";
                promo = [5, 20];
                tarifDiscount = 5;
            }
            if (countFuel >= 350 && nameFuel === "ДТ") {
                nameTariff = "Премиум";
                promo = [20, 50];
                tarifDiscount = 7;
            }
            $('.name_tariff').html(nameTariff);
            $('.order_button_block > span > span').text('Заказать тариф «'+ nameTariff +"»");
            $('.popup > h2').text('Заказать тариф «'+ nameTariff +"»");
            $('#send__form').text('Заказать тариф «'+ nameTariff +"»");
            $(".promo_item").hide();
            $(".promo_item").each(function(key, val) {
                if ( parseInt(promo[0]) == parseInt($(this).attr('data-val')) || parseInt(promo[1]) == parseInt($(this).attr('data-val'))) {
                    $(this).show();
                }
            });
            promo = isNaN(parseInt($(".promo_item.active").attr('data-val'))) ? 0 : parseInt($(".promo_item.active").attr('data-val'));
            let percent = parseInt(tarifDiscount + promo);
            let totalSumm = parseInt(selectedFuel * countFuel);
            let summMinusPersent = totalSumm - parseInt(percent * totalSumm) /100;

            let economInMonth = parseInt(percent * totalSumm) /100;
            let economInYear =  parseInt(economInMonth) * parseInt(12);
            if (economInMonth.toString().length >= 7 ) {
                economInMonth = parseInt(economInMonth / 1000000) + " млн "
            }
            if (economInYear.toString().length >= 7 ) {
                economInYear = parseInt(economInYear / 1000000) + " млн "
            }
            $('.text_after_promo_block_right_second > span:last-child').html("от " + economInYear + "₽");
            $('.text_after_promo_block_right_third > span:last-child').html("от " + economInMonth + "₽");
            $('#send__form').attr('data-percent', percent);
            $('#send__form').attr('data-totalSumm', totalSumm);
            $('#send__form').attr('data-summMinusPercent', summMinusPersent);
            return (summMinusPersent);
        }
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
            var percent = $('#send__form').attr('data-percent');
            var totalSumm = $('#send__form').attr('data-totalSumm');
            var summMinusPersent = $('#send__form').attr('data-summMinusPercent');
            var tarif = $('.name_tariff').text();
            var countFuel = parseInt($('#range_p').val());
            var selectedFuel = $('.selected_fuel').text();
            var brandFuel = $('.brand_item.active > span').text(); 
            var region = $('#region_move option:selected').text();
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
                form_data.append('percent', percent);
                form_data.append('totalSumm', totalSumm);
                form_data.append('summMinusPersent', summMinusPersent);
                form_data.append('tarif', tarif);
                form_data.append('countFuel', countFuel);
                form_data.append('selectedFuel', selectedFuel);
                form_data.append('brandFuel', brandFuel);
                form_data.append('region', region);
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