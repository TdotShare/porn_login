function actionLogin() {
    console.log('actionLogin !')
    let _username = $("#username").val();
    let _password = $("#password").val();
    if (_username != "" && _password != "") {
        axios.post('/porn_login/api/controller/login/index.php', {
            username: _username,
            password: _password,
        })
            .then(function (response) {
                console.log(response.data.result);
                if (response.data.result != false) {
                    //alert('ทำการสมัครสมาชิก สำเร็จ !');
                    window.location.href = "/porn_login/debug/succeed.php?result=เข้าสู่ระบบสำเร็จชื่อผู้ใช้คือ," + response.data.result.name;
                } else {
                    window.location.href = "/porn_login/debug/error.php?result=เข้าสู่ระบบล้มเหลวกรุณากรอกผู้ใช้ใหม่";
                }
            })
            .catch(function (error) {
                window.location.href = "/porn_login/debug/error.php?result=เข้าสู่ระบบล้มเหลวกรุณากรอกผู้ใช้ใหม่";
            });
    } else {
        alert('กรุณากรอก username และ password !')
    }

}

function actionRegister() {
    console.log('actionRegister !')
    let _username = $("#username").val();
    let _password = $("#password").val();
    let _name = $("#name").val();

    if (_username != "" && _password != "" && _name != "") {
        console.log(_username + " , " + _password + " , " + _name);
        axios.post('/porn_login/api/controller/register/index.php', {
            username: _username,
            password: _password,
            name: _name
        })
            .then(function (response) {
                console.log(response.data.result);
                if (response.data.result == "succeed") {
                    //alert('ทำการสมัครสมาชิก สำเร็จ !');
                    window.location.href = "/porn_login/debug/succeed.php?result=สมัครสมาชิกสำเร็จ";
                } else {
                    window.location.href = "/porn_login/debug/error.php?result=สมัครสมาชิกล้มเหลว";
                }
            })
            .catch(function (error) {
                window.location.href = "/porn_login/debug/error.php?result=สมัครสมาชิกล้มเหลว";
            });


    } else {
        alert('กรุณากรอก ข้อมูลให้ครบ !')
    }
}