const fs = require('fs');

var gearlist = fs.readFile('username.txt', 'utf8', (err, data) => {
    if(err){
        console.error(err);
        return;
    }
    console.log(data);
});

var gear = gearlist.split(',');
for (var i=0; i < gear.length; i++){
    x = gear[i]
    console.log(x)
}

//<div class="row">
//<div class="col col_no"><p>${i}</p></div>
//<div class="col col_des">
//    <p class="bold">${gear[i]}</p>    
//</div>
//<div class="col col_check"><input type="checkbox"></input></div>
//</div> ;