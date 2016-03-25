(function () {
    'use strict';
    angular
        .module('portfolioApp', ['ngResource', 'pascalprecht.translate', 'angular-click-outside', 'duScroll'])
        .config(function ($translateProvider) {
		  $translateProvider.translations('pt-br', {
		    WORKS: 'Trabalhos',
		    PROJECTS: 'Projetos',
		    MYNAME: 'Meu nome é Thiago'
		  });
		  $translateProvider.translations('us', {
		    WORKS: 'Works',
		    PROJECTS: 'Projects',
		    MYNAME: 'My name is Thiago'
		  });
		  $translateProvider.preferredLanguage('pt-br');
		});

})();
