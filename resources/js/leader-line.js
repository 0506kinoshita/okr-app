let moji = "end"
let tmp = document.getElementsByClassName("leaderline") ;

for(let i=0;i<=tmp.length-1;i++){
    tmp[i].setAttribute("id",moji+i);
}
