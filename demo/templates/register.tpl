<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>註冊</title>
  <script src="js/jquery-3.4.1.js"></script>
  <link rel="stylesheet" href="../bootstrap-4.4.1-dist\css\bootstrap.css">
  <script src="../bootstrap-4.4.1-dist\js\bootstrap.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>

  {* 登入頁ok *}
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">會員登入</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="checkpwd.php">
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">帳號</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="staticEmail" name="memberAC" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">密碼</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" name="memberPW" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
              <button type="submit" class="btn btn-primary">登入</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  {* 資料輸入區ok *}
  <div class="col-md-4 mb-3">
    <form method="POST" action="addAC.php">
      <div class="col-md-9 mb-3">
        <label for="validationServer01">帳號</label>
        <input type="text" class="form-control" id="validationServer01" name="memberAC" onblur="checkAC()" required>
        <h6 style="visibility: hidden" id="checkAC">.</h6>
      </div>
      <div class="col-md-9 mb-3">
        <label for="validationServer02">密碼</label>
        <input type="password" class="form-control" id="validationServer02" name="memberPW" onblur="checkPW()" required>
        <h6 style="visibility: hidden" id="checkPW">.</h6>
      </div>
      <div class="col-md-9 mb-3">
        <label for="validationServer03">確認密碼</label>
        <input type="password" class="form-control" id="validationServer03" onblur="reCheckPW()" required>
        <h6 style="visibility: hidden" id="reCheckPW">.</h6>
      </div>
      <div class="col-md-9 mb-3">
        <label for="validationServer04">暱稱</label>
        <input type="text" class="form-control" id="validationServer04" name="memberName" onblur="checkName()" required>
        <h6 style="visibility: hidden" id="checkName">.</h6>
      </div>
      <div class="col-md-9 mb-3">
        <label for="validationServer05">電子信箱</label>
        <input type="text" class="form-control" id="validationServer05" name="memberMail" onblur="checkMail()" required>
        <h6 style="visibility: hidden" id="checkMail">.</h6>
      </div>
      <div style="margin:15px" onmouseover="McheckForm()">
        <button class="btn btn-primary" type="submit" style="margin-right:10px" id="submitBtn" disabled>註冊</button>
        <button class="btn btn-primary" type="reset">清除</button>
      </div>
    </form>
  </div>
  <hr>
  
  <script src="js/check.js"></script>
</body>
</html>