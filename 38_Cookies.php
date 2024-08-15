<?php

// waht is Cookies ?
//It is an information. It is a piese of information  witch stores the php on the user's computer.
// Cookies are used to store information about the user's preferences, such as language, currency, or
 // other settings. They are sent to the server with each request and stored on the user's browser.
 // Cookies can be used to create a session, track user behavior, or personalize user experiences.


//Systext to set  a cookie.
setcookie(name, value, expire, path, domain, secure, httponly);
//name : the name of the cookie.
 //value : the value of the cookie.
 //expire : the expiration time of the cookie in seconds since the Unix timestamp.
 //path : the path on the server where the cookie will be available for access.
 //domain : the domain where the cookie will be available for access.
 //secure : a boolean value indicating whether the cookie should only be transmitted over a secure connection (https).
 //httponly : a boolean value indicating whether the cookie should be accessible only through the HTTP protocol (not through JavaScript's Document.cookie).








?>