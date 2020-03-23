var Login = function() {

    return {
        //main function to initiate the module
        init: function() {

           // handleLogin();

            // init background slide images
            $('.login-bg').backstretch([
                "admin/pages/img/login/bg5.jpg",
                "admin/pages/img/login/bg6.jpg",
                "admin/pages/img/login/bg7.jpg"
                ], {
                  fade: 1000,
                  duration: 8000
                }
            );

            $('.forget-form').hide();

        }

    };

}();

jQuery(document).ready(function() {
    Login.init();
});