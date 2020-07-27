const rp = require('request-promise');
const $ = require ('cheerio');
const url = 'https://www.onera.fr/fr/projets-anr-onera';

rp(url)
  .then(function(html){
    //success!
    console.log($('span > a', html).length);
    console.log($('span > a', html));
  })
  .catch(function(err){
    //handle error
  });