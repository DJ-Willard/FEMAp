const main = document.querySelector('main');
const fs = require('fs');

var gearlist = fs.readFile('test.txt', 'utf8', (err, data) => {
    if(err){
        console.error(err);
        return;
    }
    console.log(data);
    let htmlString = "<div>username</div>";
    htmlString = '<div>${data}</div>';
});

main.innerHTML = htmlString;