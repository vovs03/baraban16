/* b-ecoclean.js *
2018-11-01
javascript var in html title
*/

var link = document.querySelector('link[rel=import]');
var content = link.import.querySelector('#ecoclean-import');

document.body.appendChild(content.cloneNode(true));