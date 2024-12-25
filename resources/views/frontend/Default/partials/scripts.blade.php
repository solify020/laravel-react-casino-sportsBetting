<script type="text/javascript">
    @if((isset ($errors) && count($errors) > 0) || Session::get('success', false))
    //show_notifications();
    @endif


    var globaltimer;


    if(terms_and_conditions){
        show_terms_and_conditions();
    }

    $('body').on('click', '.checkAgreed', function(event){
        if(terms_and_conditions){
            show_terms_and_conditions();
            return false;
        }
        return true;
    });


    $('body').on('click', '.burger-menu-button', function(event){
        let flag = $('.burger__container').hasClass('is-opened');
        if(flag) {
            $('.burger__container').removeClass('is-opened');
        } else {
            $('.burger__container').addClass('is-opened');
        }
    });

    $('body').on('click', '.burger__close-button', function(event){
        let flag = $('.burger__container').hasClass('is-opened');
        if(flag) {
            $('.burger__container').removeClass('is-opened');
        } else {
            $('.burger__container').addClass('is-opened');
        }
    });

    $('body').on('click', '#daily_entry', function(event){
        if(terms_and_conditions){
            show_terms_and_conditions();
            return false;
        }
        if( !$('#daily_entry').hasClass('_active')){
            return;
        }
        $.ajax({
            url: "{{ route('frontend.profile.daily_entry') }}",
            type: "GET",
            dataType: "json",
            success: function(data){
                if( data.fail ){
                    $('#daily_entry').addClass('_active');
                    show_error(data.error);
                }
                if( data.success ){

                    $('.close-btn').click();

                    var popup = $('div.popup-3');

                    popup.find('.popup__value').attr('data-attr', parseFloat(data.value));
                    popup.find('.popup__value').html(parseFloat(data.value));
                    popup.find('.popup__type').html(data.message);
                    popup.addClass('active');

                    $('.overlay').toggle();
                    $('body').toggleClass('locked');

                    $('.balance').text(data.balance + ' ' + data.currency);
                    $('.refunds').text(data.refunds + ' ' + data.currency);
                    $('.refunds-icon').addClass('disabled');

                    $('.refunds').attr('id', '');
                    $('#daily_entry').removeClass('_active');

                }
            }
        });
    });

    $('body').on('click', '#send', function(event){
        if(terms_and_conditions){
            show_terms_and_conditions();
            return false;
        }
        var pincode = $('#inputPin').val();
        $.ajax({
            url: "{{ route('frontend.profile.pincode') }}",
            type: "GET",
            data: {pincode : pincode},
            dataType: "json",
            success: function(data){
                if( data.fail ){
                    show_error(data.error);
                }
                if( data.success ){
                    window.location.reload();
                }
            }
        });
    });

    $('body').on('click', '.verifyMyPhone', function(event){
        if(terms_and_conditions){
            show_terms_and_conditions();
            return false;
        }
        var phone = $('#myPhone').val();
        $.ajax({
            url: "{{ route('frontend.profile.phone') }}",
            type: "GET",
            data: {phone : phone},
            dataType: "json",
            success: function(data){
                if( data.fail ){
                    show_error(data.text);
                }
                if( data.success ){

                    $('#show_sms_timer').show();
                    $('#show_sms_timer_item').show();
                    $('#verifyMyPhone').hide();
                    $('#ckeckCode').show();
                    $('#show_phone').hide();

                    var timer = $('#sms_timer');

                    timer.attr('data-seconds', data.times);
                    timer.html(data.timer_text);
                    //show_modal('modal-invite-2');

                    startTimer(data.times, timer);

                }
            }
        });
    });


    $('body').on('click', '#ckeckCode', function(event){
        if(terms_and_conditions){
            show_terms_and_conditions();
            return false;
        }
        var code = $('#myCode').val();
        $.ajax({
            url: "{{ route('frontend.profile.code') }}",
            type: "GET",
            data: {code : code},
            dataType: "json",
            success: function(data){
                $('#inputPhone').val('+');
                if( data.fail ){
                    show_error(data.text);
                }
                if( data.success ){
                    window.location.reload();
                }
            }
        });
    });

    $('body').on('click', '#sendPhone', function(event){
        if(terms_and_conditions){
            show_terms_and_conditions();
            return false;
        }
        var phone = $('#inputPhone').val();
        $.ajax({
            url: "{{ route('frontend.profile.sms') }}",
            type: "GET",
            data: {phone : phone},
            dataType: "json",
            success: function(data){
                $('#inputPhone').val('+');
                if( data.fail ){
                    show_error(data.text);
                }
                if( data.success ){

                    if( !$('.modal__invite-phones').length){
                        $('.modal__invite-title').text('Invited friends');
                        $('.modal__invite-subtitle').remove();
                        $('.modal__invite-place').addClass('modal__invite-phones').removeClass('modal__invite-place');
                    }

                    $('.modal__invite-phones').append(
                        '<div class="modal__invite-row">' +
                        '<div class="modal__invite-info">' +
                        '<div class="modal__invite-date">'+ data.data.created +'</div>' +
                        '<span class="modal__invite-valid">Until '+ data.data.until +'</span>' +
                        '<div class="modal__invite-phones-value">'+ data.data.phone +'</div>' +
                        '</div>' +
                        '</div>'
                    );



                }
            }
        });
    });

    $('body').on('click', '.take_reward', function(event){
        if(terms_and_conditions){
            show_terms_and_conditions();
            return false;
        }
        var reward_id = $(event.target).data('id');

        $.ajax({
            url: "{{ route('frontend.profile.reward') }}",
            type: "GET",
            data: {reward_id : reward_id},
            dataType: "json",
            success: function(data){
                if( data.fail ){
                    show_error(data.text);
                }
                if( data.success ){
                    $('#reward' + reward_id).remove();
                }
            }
        });

    });

    $('body').on('click', '#sendContactForm', function(event){
        var message = $('#messageContactForm').val();
        $.ajax({
            url: "{{ route('frontend.profile.contact') }}",
            type: "POST",
            data: {message : message},
            dataType: "json",
            success: function(data){
                if( data.fail ){
                    show_error(data.text);
                }
                if( data.success ){
                    show_success(data.text);
                }
                $('#messageContactForm').val('');
                $('.modal-contact .close-btn').click();
            }
        });

    });

    $(document).on('click', '#refunds', function(e) {
        if(terms_and_conditions){
            show_terms_and_conditions();
            return false;
        }
        e.preventDefault();
    //     $.get('{{ route('frontend.profile.refunds')  }}', function(data) {
    //         if (data.success) {

    //             if(data.value){
    //                 $('.close-btn').click();

    //                 var popup = $('div.popup-3');

    //                 popup.find('.popup__value').attr('data-attr', parseFloat(data.value));
    //                 popup.find('.popup__value').html(parseFloat(data.value));
    //                 popup.find('.popup__type').html('@lang('app.refunds')');

    //                 popup.addClass('active');

    //                 $('.overlay').toggle();
    //                 $('body').toggleClass('locked');

    //                 $('.balance').text(data.balance + ' ' + data.currency);
    //                 $('.refunds').text(data.refunds + ' ' + data.currency);
    //                 $('.refunds-icon').addClass('disabled');

    //                 $('.refunds').attr('id', '');
    //             }

    //         }
    //         if (data.fail) {
    //             show_error(data.text);
    //         }
    //     }, 'json');
    // });

    // @if( Auth::check() )
    //     setInterval(function(){
    //         $.getJSON('{{ route('frontend.profile.ajax')  }}', function(data) {
    //             if( data.jackpots ){
    //                 var jackpots = data.jackpots;
    //                 if( jackpots.length >= 7 ){
    //                     for(var i=0; i<7; i++){
    //                         $('.jackpot' + i).text((parseFloat(jackpots[i]['balance'])).toFixed(2));
    //                     }
    //                 }
    //             }
    //             if( data.jackpotSum ){
    //                 $('.jackpotSum').text((parseFloat(data.jackpotSum)).toFixed(2));
    //             }


    //         if( data.profile ){
    //             var profile = data.profile;
    //             $('.balance').text(profile.balance + ' ' + data.currency);
    //             if( profile.balance ){
    //                 $('.bonusMenu .info-icon').removeClass('_disabled');
    //             } else {
    //                 $('.bonusMenu .info-icon').addClass('_disabled');
    //             }
    //             $('.rating').attr('src', '/frontend/Default/img/badges64x64/badge-'+profile.rating+'.png');

    //             if( profile.bonus ){
    //                 var bonus = profile.bonus;
    //                 if( bonus.available ){
    //                     $('.bonusMenu .info-icon').removeClass('_disabled');
    //                 } else{
    //                     $('.bonusMenu .info-icon').addClass('_disabled');
    //                 }
    //                 $('.bonusMenu .info-value').text(bonus.balance + ' ' + data.currency);
    //                 if( bonus.tooltip ){
    //                     $('.bonusMenu .footer__tooltip').html(bonus.tooltip).css('display', '');
    //                 } else {
    //                     $('.bonusMenu .footer__tooltip').css('display', 'none');
    //                 }
    //             }

    //             if( profile.wager ){
    //                 var wager = profile.wager;
    //                 if( wager.available ){
    //                     $('.wagerMenu .info-icon').removeClass('_disabled');
    //                 } else{
    //                     $('.wagerMenu .info-icon').addClass('_disabled');
    //                 }
    //                 $('.wagerMenu .info-value').text(wager.balance + ' ' + data.currency);
    //                 if( wager.tooltip ){
    //                     $('.wagerMenu .footer__tooltip').html(wager.tooltip).css('display', '');
    //                 } else {
    //                     $('.wagerMenu .footer__tooltip').css('display', 'none');
    //                 }
    //             }

    //             if( profile.refunds ){
    //                 var refunds = profile.refunds;
    //                 if( refunds.available ){
    //                     $('.refunds-icon .info-icon').removeClass('_disabled');
    //                 } else{
    //                     $('.refunds-icon .info-icon').addClass('_disabled');
    //                 }
    //                 $('.refunds-icon .info-value').text(refunds.balance + ' ' + data.currency);
    //             }

    //             if( profile.payments ){
    //                 if( profile.payments.available ){
    //                     $('.paymentsMenu .info-icon').addClass('_active');
    //                 } else{
    //                     $('.paymentsMenu .info-icon').removeClass('_active');
    //                 }
    //             }

    //             if( profile.invites ){
    //                 if( profile.invites.available ){
    //                     $('.inviteMenu').addClass('_active');
    //                 } else{
    //                     $('.inviteMenu').removeClass('_active');
    //                 }
    //                 if( profile.invites.tooltip ){
    //                     $('.inviteMenu .footer__tooltip').html(profile.invites.tooltip).css('display', '');
    //                 } else {
    //                     $('.inviteMenu .footer__tooltip').css('display', 'none');
    //                 }
    //             }

    //             if( profile.daily_entry ){
    //                 if( profile.daily_entry.available ){
    //                     $('.dailyEntryMenu ').addClass('_active');
    //                 } else{
    //                     $('.dailyEntryMenu ').removeClass('_active');
    //                 }
    //             }

    //         }

    //         if( data.tournaments ){
    //             var tournaments = data.tournaments;
    //             Object.keys(tournaments).forEach(function(tournament_id) {
    //                 var index = 1;
    //                 var stats = tournaments[tournament_id].data;
    //                 if( $( ".tournament" + tournament_id ).length ){
    //                     $( ".tournament" + tournament_id + ' .table1').html('');
    //                     $( ".tournament" + tournament_id + ' .table2').html('');
    //                     $( ".tournament" + tournament_id + '_place').text(tournaments[tournament_id].my_place);
    //                     Object.keys(stats).forEach(function(stat) {
    //                         var table = '.table1';
    //                         if( index > 5 ){
    //                             table = '.table2';
    //                         }
    //                         $( ".tournament" + tournament_id + ' ' + table).append(
    //                             '<div class="leaderboard__table-row">\n' +
    //                             '<div class="leaderboard__table-body-item">'+ index +'</div>\n' +
    //                             '<div class="leaderboard__table-body-item">'+ stats[stat].username +'</div>\n' +
    //                             '<div class="leaderboard__table-body-item">'+ stats[stat].points +'</div>\n' +
    //                             '<div class="leaderboard__table-body-item">'+ stats[stat].prize +'</div>\n' +
    //                             '</div>'
    //                         );
    //                         index++;
    //                     });
    //                     if( !$( ".tournament" + tournament_id + ' .table1 .leaderboard__table-row').length ){
    //                         $( ".tournament" + tournament_id + ' .table1').append(
    //                             '<div class="tournament__table-row">' +
    //                                 '<span class="tournament__table-item">No data available in table</span>' +
    //                             '</div>'
    //                         );
    //                     }
    //                     if( !$( ".tournament" + tournament_id + ' .table2 .leaderboard__table-row').length ){
    //                         $( ".tournament" + tournament_id + ' .table2').append(
    //                             '<div class="tournament__table-row">' +
    //                             '<span class="tournament__table-item">No data available in table</span>' +
    //                             '</div>'
    //                         );
    //                     }
    //                 }
    //             });
    //         }

    //     });
    // }, 5000);

    // setInterval(function(){
    //     $.getJSON('{{ route('frontend.profile.message')  }}', function(data) {

    //         if( data.exist ){
    //             $('.close-btn').click();

    //             var message = data.message;

    //             if(message.type === 'progress'){
    //                 var popup2 = $('div.popup-2');
    //                 popup2.find('.popup__value img').attr('src', '/frontend/Default/img/badges320x320/badge-'+message.rating+'.png');
    //                 popup2.find('.popup__prize span').html(parseFloat(message.text) + ' ' + message.currency);
    //                 popup2.addClass('active');
    //             } else {
    //                 var popup = $('div.popup-3');
    //                 popup.find('.popup__value').attr('data-attr', parseFloat(message.text));
    //                 popup.find('.popup__value').html(parseFloat(message.text));
    //                 popup.find('.popup__type').html(message.type);
    //                 popup.addClass('active');
    //             }

    //             $('.overlay').toggle();
    //             $('body').toggleClass('locked');
    //         }

    //     });
    // }, 5000);
    // @endif
    $(document).on('keyup', '.search', function() {
        if(terms_and_conditions){
            show_terms_and_conditions();
            return false;
        }
        var query = $(this).val().toLowerCase();
        doSearch(query, '{{ $category1 }}');
    });

    function OnSearch(input) {
        var query = input.value.toLowerCase();
        doSearch(query, '{{ $category1 }}');
    }

    /*
    if( is_games_page  ){
        setInterval(function(){
            var query = '';
            $('.search').each(function (index) {
                var value = $(this).val();
                if( value ){
                    query = value;
                }
            });
            doSearch(query, '{{ $category1 }}');
        }, 30000);
    }
    */

    function doSearch(query, category1=''){
        $.getJSON('{{ route('frontend.search.json')  }}?q=' + query + '&search_all_db=1&category1=' + category1, function(data) {
            $('#games').html('');
            if( data.success ){
                var elems = data.data;
                if(Object.keys(elems).length){
                    for (const [key, value] of Object.entries(elems)) {
                        var append =
                            '<div class="grid-item grid-item--height2 grid-item--width2">\n' +
                            '    <div class="grid__content games">\n' +
                            '        <div class="games__item">\n' +
                            '            <div class="games__content">\n' +
                            '                <img class="lazy" data-src="' + value.icon + '" alt="' + value.title + '">\n';

                        if( value.jackpot ){
                            append += '<span class="label label-d label--left">\n' +
                                value.jackpot.balance + ' ' +  value.jackpot.currency +
                                '</span>\n';
                        }

                        if( value.tournaments ){
                            append += '<span class="label-cup">' +
                                '<span class="cup-img"><img src="/frontend/Default/img/svg/game-cup.svg" alt=""></span>';

                            if( value.is_new ){
                                append += '<span class="label"></span><span class="label label--right label-b">NEW</span>\n';
                            } else if( value.is_hot ){
                                append += '<span class="label"></span><span class="label label--right label-g">HOT</span>\n';
                            } else {
                                if( value.label === 'Exclusive' ){
                                    append += '<span class="label"></span><span class="label label--right label-d">' + value.label + '</span>\n';
                                }
                            }
                        } else {
                            if( value.is_new ){
                                append += '<span class="label"></span><span class="label label--right label-b">NEW</span>\n';
                            } else if( value.is_hot ){
                                append += '<span class="label"></span><span class="label label--right label-g">HOT</span>\n';
                            } else {
                                if( value.label === 'Exclusive' ){
                                    append += '<span class="label"></span><span class="label label--right label-d">' + value.label + '</span>\n';
                                }
                            }
                        }


                        append += '                <a href="' + value.link + '?api_exit=/" class="play-btn btn">Play</a>\n' +
                            '                <span class="game-name">' + value.title + '</span>\n' +
                            '            </div>\n' +
                            '        </div>\n' +
                            '    </div>\n' +
                            '</div>';

                        $('#games').append(append);
                    }
                }
                lazyLoadInstance.update();
            }
        });
    }

    function show_notifications() {
        $('.close-btn').click();
        $('div.modal-notifications').addClass('active');
        $('.overlay').show();
        $('body').addClass('locked');
    }

    function show_terms_and_conditions() {
        $('.close-btn').click();
        $('div.modal-terms_and_conditions2').addClass('active');
        $('.overlay').show();
        $('body').addClass('locked');
    }

    function show_modal(modal) {
        $('.close-btn').click();
        $('div.' + modal).addClass('active');
        $('.overlay').show();
        $('body').addClass('locked');
    }

    function show_error(text){
        $('.notification__message_success').removeClass('_active');
        $('.notification__message_failed .notification__text').text(text);
        $('.notification__message_failed').addClass('_active');
        setTimeout(function () {
            $('.notification__message_failed').removeClass('_active');
        }, 3000);
    }

    function show_success(text){
        $('.notification__message_failed').removeClass('_active');
        $('.notification__message_success .notification__text').text(text);
        $('.notification__message_success').addClass('_active');
        setTimeout(function () {
            $('.notification__message_success').removeClass('_active');
        }, 3000);
    }

    setTimeout(function () {
        $('form#payment_form').submit();
    }, 5000);


</script>