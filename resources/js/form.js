jQuery( function( $ ) {

    'use strict';

    /******************************************************************
     * Forms Submit
     * @type {{init: Forms.init, install: Forms.install}}
     * @since 1.0
     * @author Alex Cherniy
     * @date 15.04.2022
     */
    var Forms = {

        /**
         * Init
         */
        init: function () {

            this.install  = this.install( this )

            this.formAppointment()

        },

        /**
         * Install
         */
        install: function() {

            /**
             * Submit Form
             * @click
             */
            $(document).on('submit', '.ajaxForm', function (e)
            {

                e.preventDefault()

                var $this   = $(this),
                    url     = $this.attr('action');

                $.ajax( {
                    beforeSend  :   function(xhr){

                        $this.find('.error').remove()

                    },
                    data        :   $this.serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method      :   'POST',
                    complete    :   function(){

                    },
                    error: function(response) {

                        $.each(response.responseJSON.errors,function(field_name,error){
                            $this.find('.'+field_name+'-error').remove()
                            $this.find('[name='+field_name+']').after('<span class="'+field_name+'-error error">' +error+ '</span>')
                        })

                    },
                    success     :   function( response ){

                        if( 'success' === response.status )
                        {
                            $this[0].reset()
                            $this.find('.error').remove()

                            $.fancybox.close(true)
                            $.fancybox.open({
                                src  : '#succesMessage',
                                type : 'inline',
                            })

                        }

                    },
                    url         :   url
                } );

            })

        },

        /**
         * Form Appointment
         */
        formAppointment: function ()
        {




        }

    }

    Forms.init()

});
