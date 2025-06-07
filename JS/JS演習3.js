document.write("問1" + "<br>");

function menseki(hankei) {
    return "面積は" + hankei * hankei * 3.14 + "㎠です";
}

document.write(menseki(5) + "<br>");
document.write(menseki(7) + "<br>");
document.write(menseki(10) + "<br>");

document.write("<br>" + "問2" + "<br>");

function goukei(group, otona, kodomo) {
    return group + "グループの合計金額は" + 
    (500 * otona + 200 * kodomo) + "円です";
}

document.write(goukei("A", 2, 4) + "<br>");
document.write(goukei("B", 1, 5) + "<br>");
document.write(goukei("C", 3, 7));