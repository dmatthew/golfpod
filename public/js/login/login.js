/**
 * GP Login Module
 * 
 * @file login.js
 * @author Matt Davis
 */

(function () {
    angular
        .module('login', [])
        .controller('LoginController', [LoginController]);

    function LoginController() {
        var lc = this;
        
        // Variables
        lc.username;             // Username
        lc.email;                // Email
        lc.password;             // Password
        lc.confirm_password;     // Password Confirmation
    }
})();
