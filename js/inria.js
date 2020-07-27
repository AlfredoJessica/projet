
const rp = require('request-promise');
const $ = require ('cheerio');
const url = 'https://www.inria.fr/fr/recherche?search_text=appel+%C3%A0+projet&end_date=&start_date=&sort_by=created';

rp(url)
  .then(function(html){
    //success!
    console.log($('span > a', html).length);
    console.log($('span > a', html));
  })
  .catch(function(err){
    //handle error
  });


