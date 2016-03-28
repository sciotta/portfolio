(function () {
    'use strict';
    angular
        .module('portfolioApp', ['ngResource', 'ngSanitize', 'pascalprecht.translate', 'angular-click-outside', 'duScroll'])
        .config(function ($translateProvider) {
		  $translateProvider.translations('pt-br', {
		    WORKS: 'Trabalhos',
		    PROJECTS: 'Projetos',
		    MY_NAME: 'Meu nome é Thiago',
				MY_DRIBBBLE_JOBS: 'Meus últimos Dribbbles',
				MY_DESCRIPTION: 'Sou um aficionado por tecnologia e seus meios. Busco tornar projetos em soluções <span class="semi-bold">inteligentes</span> e <span class="semi-bold">robustas</span> ,porém <span class="semi-bold">simples</span> e <span class="semi-bold">amigáveis</span>.'
		  });
		  $translateProvider.translations('us', {
		    WORKS: 'Works',
		    PROJECTS: 'Projects',
		    MY_NAME: 'My name is Thiago',
				MY_DRIBBBLE_JOBS: 'My latest Dribbble jobs'
		  });
		  $translateProvider.preferredLanguage('pt-br');
		});

})();
