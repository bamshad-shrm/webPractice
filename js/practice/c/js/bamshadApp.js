var app = angular.module("bamshadApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "pages/firstPage.html"
    })
    .when("/education", {
        templateUrl : "pages/education.html",
        //controller : "educationCtrl"
    })
    .when("/skills", {
        templateUrl : "pages/skills.html",
        //controller : "skillsCtrl"
    });
});
