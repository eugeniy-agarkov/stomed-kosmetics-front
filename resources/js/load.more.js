jQuery( function( $ ) {

    'use strict';

    /******************************************************************
     * Load More
     * @type {{init: LoadMore.init, install: LoadMore.install}}
     * @since 1.0
     * @author Alex Cherniy
     * @date 18.05.2022
     */
    var LoadMore = {

        /**
         * Init
         */
        init: function () {

            this.install  = this.install( this )

        },

        /**
         * Install
         */
        install: function() {

            /**
             * Get Items
             * @click
             */
            $(document).on('click', '.loadMore', function (e) {

                e.preventDefault()

                var $this   = $(this),
                    page    = ($this.data('current') || 1) + 1,
                    url     = $this.attr('href'),
                    last    = parseInt($this.data('last')),
                    target  = $this.data('target'),
                    s       = url.indexOf('?') === -1 ? '?' : '&';

                $.ajax( {
                    beforeSend  :   function(xhr){

                        $this.addClass('loading')
                        $this.prop('disabled', true)

                    },
                    data        :   {
                        page : page,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method      :   'get',
                    complete    :   function(){

                        $this.removeClass('loading')
                        $this.prop('disabled', false)
                        $this.data('current', page)

                    },
                    success     :   function( response )
                    {

                        $(target).append(response).ready(function () {

                            $this.data('current', page)

                        })

                        if (parseInt(page) >= last) {
                            $('.pagination').remove()
                        }

                    },
                    url         :   url + s + 'page=' + page
                } );


            })

        },

    }

    LoadMore.init()

});
