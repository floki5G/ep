
function _(e) {
    return document.getElementById(e);
}
//  call 
function calldata(filename, id, e) {
    _('y').innerHTML = "";
    var xh = new XMLHttpRequest();
    xh.open("POST", filename, true);
    xh.onload = () => {
        if (xh.status === 200) {
            _('y').innerHTML = xh.response;
            showcr();

        }
    }
    xh.send(e);
}
//  call 
function addncr() {
    calldata('newcr.php', 'yy', null)
}
function corses() {
    calldata('hold__showcr.php', 'yy', null)
}
function videomain() {
    calldata('video.php', 'y', null)
}

function showvdocr() {
    calldata('vdoimp.php', 'y', null)
}

// show corses  

function showcr() {
    var xh = new XMLHttpRequest();
    xh.open("GET", "showcr.php", true);
    xh.responseType = "json";
    xh.onload = () => {
        if (xh.status === 200) {
            if (xh.response) {
                x = xh.response;
                for (i = 0; i < x.length; i++) {
                    _('a').innerHTML += "<br>" + x[i].cri_id + "</br>";
                    _('b').innerHTML += "<br>" + x[i].cri_img + "</br>";
                    _('c').innerHTML += "<br>" + x[i].cri_t + "</br>";
                    _('d').innerHTML += "<br>" + x[i].cri_d + "</br>";
                    _('e').innerHTML += "<br>" + x[i].cri_o + "</br>";
                    _('f').innerHTML += "<br>" + x[i].cri_s + "</br>";
                }
            }
            else {
                alert("fuck");
            }
        }

    }

    xh.send();
}
// show corses  

// cr insert
function newcrin(e) {
    let title = _('cri_t').value;
    let disc = _('cri_d').value;
    let price = _('cri_o').value;
    let sellprice = _('cri_s').value;
    var xh = new FormData();
    xh.append("file", cir_img.files[0]);
    xh.append("title", title);
    xh.append("disc", disc);
    xh.append("price", price);
    xh.append("sellprice", sellprice);
    fetch('hold_newcr.php', { method: "POST", body: xh });
}
// cr insert


var vdoid;
function video_src() {
    var xh = new XMLHttpRequest();
    var id = _('video_s_id').value;
    xh.open('POST', 'hold_video.php', true);
    xh.setRequestHeader("Content-Type", "application/json");
    xh.responseType = "json"
    xh.onload = () => {
        if (xh.status === 200) {
            x = xh.response;
            if (id = x.cri_id) {
                var xid = x.cri_id;
                vdoid = xid;
                calldata('hold_videoinsert.php', 'yy', null);
            }
        }
        else {
            alert('dfdfuc');
        }
    }
    var mydata = { id: id };
    var data = JSON.stringify(mydata);
    xh.send(data);
}

function videosub() {

    var vd = new FormData();
    var vd_crid = vdoid;
    console.log(vd_crid)
    var vdt = _('vdo_title').value;
    var vdc = _('vdo_disc').value;
    vd.append('vdoid', vd_crid);
    vd.append('vdot', vdt);
    vd.append('vdod', vdc);
    vd.append('file', vdo_link.files[0]);
    fetch('hold_newvideoinsert.php', { method: "POST", body: vd });
}

var vide_ovio_id;
function video_show() {
    var xh = new XMLHttpRequest();
    var id = _('video_id_ipppp').value;
    xh.open('POST', 'show_vdo.php', true);
    xh.setRequestHeader("Content-Type", "application/json");
    xh.responseType = "json"
    xh.onload = () => {
        if (xh.status === 200) {
            x = xh.response;
            console.log(x)
            _('y').innerHTML = " ";
            if (id = x[i].video_cr_id) {
                for (let i = 0; i < x.length; i++) {
                    vide_ovio_id = x[i].video_id;

                    _('y').innerHTML +=
                        "<table><tr><br><td>"
                        + x[i].video_title + "</td><td>"
                        + x[i].video_cr_name + "</td><td>"
                        + x[i].video_disc + "</td><td>"
                        + x[i].video_id + "</td><td>"
                        + x[i].demo + "</td><td>"
                        + x[i].video_link + "</td><td><button class='vdoid' vdobtn ="
                        + x[i].video_id +
                        ">fuck</button></td></tr></table>";

                }
            }
            else {
                _('y').innerHTML += "pleases entere right corde id";
            }
        }
        editdemo()

    }
    var mydata = { id: id };
    var data = JSON.stringify(mydata);
    xh.send(data);
}

function editdemo() {
    var x = document.getElementsByClassName("vdoid");
    console.log(x);
    console.log(x.length);
    for (let i = 0; i < x.length; i++) {
        console.log(x[i]);

        x[i].addEventListener('click', () => {
            alert('onln cliking this video will display as demo to all the users')
              var y =x[i].getAttribute('vdobtn');
            var xh = new FormData();
            xh.append('vdoid', y);
            fetch('hold_newvideoupdate.php', { method: "POST", body: xh });
    
        })
    }
    }

