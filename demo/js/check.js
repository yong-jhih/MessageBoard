let testAC = false ;
let testPW = false ;
let testRePW = false ;
let testName = false ;
let testMail = false ;

function checkAC() {
    let newAC = document.getElementById("validationServer01").value;
    var regAC = new RegExp("^[A-Za-z][A-Za-z0-9]{7,15}");
    if (regAC.test(newAC)) {
        $.ajax({
            async: true,
            type: "POST",
            url: 'checkAC.php',
            dataType: "json",
            data: {
                'newAC': newAC
            },
            success: function (response) {
                if (newAC == response) {
                    testAC = false ;
                    document.getElementById('validationServer01').classList.remove('is-valid');
                    document.getElementById('validationServer01').classList.add('is-invalid');
                    document.getElementById('checkAC').innerHTML = "帳號已被使用";
                    document.getElementById('checkAC').style.color = "red";
                    document.getElementById('checkAC').style.visibility = "visible";
                }
            },
            error: function (response) {
                testAC = true ;
                document.getElementById('validationServer01').classList.remove('is-invalid');
                document.getElementById('validationServer01').classList.add('is-valid');
                document.getElementById('checkAC').innerHTML = "帳號可以使用";
                document.getElementById('checkAC').style.color = "green";
                document.getElementById('checkAC').style.visibility = "visible";
            }
        })

    } else {
        testAC = false ;
        document.getElementById('validationServer01').classList.remove('is-valid');
        document.getElementById('validationServer01').classList.add('is-invalid');
        document.getElementById('checkAC').innerHTML = "格式錯誤,請輸入開頭為英文之8-16位英數混合帳號";
        document.getElementById('checkAC').style.color = "red";
        document.getElementById('checkAC').style.visibility = "visible";
    }
}

function checkPW() {
    let newPW = document.getElementById("validationServer02").value;
    var regPW = new RegExp("^[A-Za-z0-9]{8,16}");
    if (regPW.test(newPW)) {
        testPW = true ;
        document.getElementById('validationServer02').classList.remove('is-invalid');
        document.getElementById('validationServer02').classList.add('is-valid');
        document.getElementById('checkPW').style.visibility = "hidden";
    }else{
        testPW = false ;
        document.getElementById('checkPW').innerHTML = "密碼格式錯誤,請輸入8-16位英數混合密碼";
        document.getElementById('validationServer02').classList.remove('is-valid');
        document.getElementById('validationServer02').classList.add('is-invalid');
        document.getElementById('checkPW').style.color = "red";
        document.getElementById('checkPW').style.visibility = "visible";
    }
}

function reCheckPW() {
    if (document.getElementById("validationServer02").value != document.getElementById("validationServer03").value) {
        testRePW = false ;
        document.getElementById('validationServer03').classList.add('is-invalid');
        document.getElementById('reCheckPW').innerHTML = "密碼不同,請重新輸入";
        document.getElementById('reCheckPW').style.color = "red";
        document.getElementById('reCheckPW').style.visibility = "visible";
    } else {
        testRePW = true ;
        document.getElementById('validationServer03').classList.remove('is-invalid');
        document.getElementById('validationServer03').classList.add('is-valid');
        document.getElementById('reCheckPW').style.visibility = "hidden";
    }
}

function checkName( ) {
    let newName = document.getElementById("validationServer04").value;
    var regName = new RegExp("^[A-Za-z0-9]{3,16}");
    if(regName.test(newName)){
        testName = true ;
        document.getElementById('validationServer04').classList.remove('is-invalid');
        document.getElementById('validationServer04').classList.add('is-valid');
    }else{
        testName = false ;
        document.getElementById('validationServer04').classList.remove('is-valid');
        document.getElementById('validationServer04').classList.add('is-invalid');
    }
}

function checkMail() {
    let newMail = document.getElementById("validationServer05").value;
    var regMail = new RegExp("^\\w{1,63}@[a-zA-Z0-9]{2,63}\\.[a-zA-Z]{2,63}(\\.[a-zA-Z]{2,63})?$");
    if (regMail.test(newMail)) {
        testMail = true ;
        document.getElementById('checkMail').style.visibility = "hidden";
        document.getElementById('validationServer05').classList.remove('is-invalid');
        document.getElementById('validationServer05').classList.add('is-valid');
    }else{
        testMail = false ;
        document.getElementById('validationServer05').classList.remove('is-valid');
        document.getElementById('validationServer05').classList.add('is-invalid');
        document.getElementById('checkMail').innerHTML = "信箱格式錯誤,請重新輸入";
        document.getElementById('checkMail').style.color = "red";
        document.getElementById('checkMail').style.visibility = "visible";
    }
}

function checkForm(){
    checkAC();
    checkPW()
    reCheckPW();
    checkName();
    checkMail();
    if(testAC==true && testPW==true && testRePW==true && testName==true && testMail==true){
        document.getElementById('submitBtn').disabled=false;
    }else{
        document.getElementById('submitBtn').disabled=true;
    }
}

function McheckForm(){
    checkPW()
    reCheckPW();
    checkName();
    checkMail();
    if(testPW==true && testRePW==true && testName==true && testMail==true){
        document.getElementById('submitBtn').disabled=false;
    }else{
        document.getElementById('submitBtn').disabled=true;
    }
}