const rp = require('request-promise');
const $ = require ('cheerio');
const url = 'http://www.appelaprojets.org/appelprojet';

rp(url)
  .then(function(html){
    //success!
    console.log($('class > a', html).length);
    console.log($('class  > a', html));
  })
  .catch(function(err){
    //handle error
  });


