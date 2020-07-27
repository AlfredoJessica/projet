const rp = require('request-promise');
const $ = require ('cheerio');
const url = 'https://anr.fr/fr/appels-a-projets/';

rp(url)
  .then(function(html){
    //success!
    console.log($('class > a', html).length);
    console.log($('class > a', html));
  })
  .catch(function(err){
    //handle error
  });