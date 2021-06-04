var x = document.getElementById('login_click');
var z = document.getElementById('login_form');

var y = document.getElementById('new_form');

function loginform(e) {
    y.style.left = "500px";
}
function newform(e) {
    y.style.left = "0px";
}
document.getElementById('btn_cross').addEventListener('click', () => {
    if (x.style.display = "") {
        x.style.display = "none";
    }
})


function _(e) {
    return document.getElementById(e);
}

// insert ig 
async function fun() {
    var xh = new FormData();
    xh.append("file", pr_img.files[0]);
    await fetch('newinsert.php', { method: "POST", body: xh });


}

function data(filename, redid, sanddata) {

    var xh = new XMLHttpRequest();
    xh.open("POST", filename, true);
    xh.onload = () => {
        if (xh.readyState === 4 && xh.status === 200) {
            _(redid).innerHTML = xh.response;
        } else {
            console.log("fuck");
        }
    }
    xh.send(sanddata);

}
function payment() {
    data('navbar/paymentstatus.php', 'bodymain', null);
}
function corses() {
    data('navbar/corses.php', 'startpage', null);
}
function puruser() {
    data('pur_mycorses.php', 'startpage', null);
}

function navlogin() {
    _('new_form').style.display = "none";

    _('login_click').style.display = 'block';
    _('x_x').style.display = "block";
}



_('xxx').addEventListener('click', () => {
    _('x_x').style.display = "none";
    _('new_form').style.display = "block";
})




// dont have account 

_("new_submit").addEventListener('click', (e) => {
    e.preventDefault();

    let name = _('namenumd').value;
    let username = _('usernamenumd').value;
    let email = _('emailnumd').value;
    let phonenum = _('phonenumd').value;
    let password = _('passwordnumd').value;
    let conpass = _('cpassnumd').value;
    if (name == "") {
        _('eid').innerHTML = "please fill your name";
    }
    else if ((name.length < 5) || (name.length > 25)) {
        _('eid').innerHTML = "name must be 5 to 25 cahr";
    }
    else if (username == "") {
        _('euser').innerHTML = "please fill username ";
    }
    else if ((username.length < 5) || (username.length > 10)) {
        _('euser').innerHTML = "name must be 5 to 10 cahr";
    }
    else if (email == "") {
        _('eemail').innerHTML = "please fill your email";
    }

    else if ((email.indexOf('@') <= 0) || email.charAt(email.length - 4) != '.') {
        _('eemail').innerHTML = "wddddd";
    }

    else if (phonenum == "") {
        _('emobile').innerHTML = "please fill your phone no.";
    }
    else if ((isNaN(phonenum)) || (phonenum.length > 12) || (phonenum.length < 10)) {
        _('emobile').innerHTML = "vvvvvvvvv";
    }
    else if (password == "" || conpass == "") {
        _('epass').innerHTML = "password id empty";
        _('econ').innerHTML = "password id empty";
    }
    else if (conpass != password) {
        _('epass').innerHTML = "pass and conpass should be same";
        _('econ').innerHTML = "pass and conpass should be same";
    }

    else if ((password.length < 5) || (password.length > 25) || (conpass.length < 5) || (conpass.length > 25)) {
        _('epass').innerHTML = "pass must be 5 to 25 cahr";
        _('econ').innerHTML = "pass must be 5 to 25 cahr";
    }
    else {
        var vd = new FormData(xx_xx);
        fetch('donthac.php', { method: "POST", body: vd })
            .then((response) => response.json())
            .then((data) => {
                if (data == 0) {
                    _('errordonthac').innerHTML = `username ${' ', username} or email ${' ', email} already exist`;
                }
                else {
                    _('errordonthac').innerHTML = `please verify your email ${' ', email} if dont get verificaation link please check span mails`
                }
            })
    }
});
// dont have account 


// login 
_('loginsub').addEventListener('click', (f) => {
    f.preventDefault();
    _('loginerror').innerHTML = "please wait";
    if (_('loginuser').value == "" || _('loginpass').value == "") {
        _('loginerror').innerHTML = "username or password id empty";
    }
    else {
        var xh = new FormData(x_x);
        console.log(xh)
        fetch('loginuser.php', { method: "POST", body: xh }).then((response) => response.json())
            .then(resp => {
                console.log(resp)
                if (resp == 0) {
                    _('loginerror').innerHTML = "invalid username or pass";
                }
                else if (resp == 1) {
                    for (var x in resp) {
                        _('loginerror').innerHTML = `your email ${' ', resp[x].email}is not varifed please varify your email then login`;
                    }
                }
                else {
                    for (var x in resp) {
                        _('loginerror').innerHTML = `welcome ${resp[x].username}`;
                        location.href = "indexx.php";
                    }
                }
            })
            .catch((error) => {
                console.log(error);
            })
    }
});
// login 



// help  
_('subconn').addEventListener('click', (e) => {
    e.preventDefault();
    var xh = new XMLHttpRequest();
    xh.open('POST', 'help.php', true)
    let name = _('c1').value;
    let email = _('c2').value;
    let qns = _('c3').value;
    xh.onload = () => {
        if (xh.status === 200) {
            _('outhelp').innerHTML += "you ill get response withn 24 hr";
        }
    }
    var mydata = { name: name, email: email, qns: qns };
    var data = JSON.stringify(mydata);
    xh.send(data);
})
// help



function viewall() {
    data('navbar/corses.php', 'startpage', null)
}


function enroll() {
    data('navbar/enroll.php', 'startpage', null)
}

function searchcr(x) {
    var k = x.toLowerCase();
    console.log(k)
    if (k.length == 0) {
        _('contt').innerHTML = "empyt";
    }
    else {
        var xh = new XMLHttpRequest();
        xh.open('GET', 'search.php?data=' + k, true);
        xh.onload = () => {
            if (xh.status === 200) {
                _('contt').innerHTML = xh.response;
            }

        }
        xh.send();
    }


}

function navprofil() {
    _('profile').style.display="block"
    
}
_('profilclose').addEventListener('click',()=>{
    _('profile').style.display="none"
})

function loding(){
_('loding').style.display="none";

}

_('updateprofilsub').addEventListener('click',(e)=>{
e.preventDefault();
var xh =  new FormData(updateprofilform);
xh.append('file', updateprofil.files[0]);
fetch('updateprofile.php',{method:'POST' , body:xh})
console.log(xh)
})