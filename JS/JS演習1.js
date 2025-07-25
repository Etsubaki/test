document.write("★問1★");
document.write("<br>");

for(var a = 1; a <=5; a ++) {
    document.write("★");
}

document.write("<br>");
document.write("<br>");

document.write("問2");
document.write("<br>");

for(var b1 = 1; b1 <=2; b1 ++) {
    for(var b2 = 1; b2 <=3; b2 ++) {
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br>");
document.write("問3");
document.write("<br>");

for(var c1 = 1; c1 <= 2; c1 ++) {
    for(var c2 = 1; c2 <= 5; c2 ++) {
        document.write("☆");
    }
    document.write("<br>");
}

document.write("<br>");
document.write("問4");
document.write("<br>");

for(var d1 = 1; d1 <= 4; d1 ++) {
    for(var d2 = 1; d2 <= 5; d2 ++ ) {
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br>");
document.write("問5");
document.write("<br>");

for(var d1 = 1; d1 <= 4; d1 ++) {
    for(var d2 = 1; d2 <= 3; d2 ++ ) {
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br>");
document.write("問6");
document.write("<br>");

for(var e1 = 1; e1 <= 3; e1 ++) {
    for(var e2 = 1; e2 <= 3; e2 ++) {
        if(e2 % 2 == 1) {
            document.write("☆");
        }else {
            document.write("★");
        }
    }
    document.write("<br>");
}

document.write("<br>");
document.write("問7");
document.write("<br>");

for(var f1 = 1; f1 <= 4; f1 ++) {
    for(var f2 = 1; f2 <= 5; f2 ++) {
        if(f2 % 3 == 0) {
            document.write("☆");
        }else {
            document.write("★");
        }
    }
    document.write("<br>");
}

document.write("<br>");
document.write("問8");
document.write("<br>");

for(h1 = 1; h1 <= 5; h1 ++) {
    for(h2 = 1; h2 <= h1; h2 ++) {
        document.write("★");
    }
    document.write("<br>");
}