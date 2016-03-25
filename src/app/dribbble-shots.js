angular.module('portfolioApp')
  .factory('DribbbleShots', function ($resource) {
    return $resource('https://api.dribbble.com/v1/users/:user/shots', { user: 'thiagosciotta'} ,
      {
        query: {
          method: 'GET',
          params: {
            user: "thiagosciotta"
          },
          isArray: true,
          headers: {'Authorization': 'Bearer 973c3e7af8da12e1fd93c578564b03b06348cded468b8cd9352e99f2e981436c'}
        }
    })
  });