let end = "end";
let sencondend = "second_end";
let leaderline = document.getElementsByClassName("leaderline");
let second_leaderline = document.getElementsByClassName("second_leaderline");

for (let i = 0; i <= leaderline.length - 1; i++) {
  leaderline[i].setAttribute("id", end + i);

  let line = new LeaderLine(
    document.getElementById('start'),
    document.getElementById('end'+i),
  );
  // line.dash = true ;
  line.setOptions({startSocket: 'bottom', endSocket: 'top'});
  line.color = '#ffa500';
}

for (let i = 0; i <= second_leaderline.length - 1; i++) {
  second_leaderline[i].setAttribute("id", sencondend + i);

  let line2 = new LeaderLine(
    document.getElementById('end'+i),
    document.getElementById('second_end'+i),
  );
  // line2.dash = true ;
  line2.setOptions({startSocket: 'bottom', endSocket: 'top'});
  line2.color = '#ffa500';
}
