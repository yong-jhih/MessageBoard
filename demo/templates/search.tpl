<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>搜尋</title>
    <script src="js/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist\css\bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <style>
        .content {
            width: 200px;
        }
    </style>
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
    
    {* 搜尋結果 *}
    {if $records}
        <p>查詢結果:共有{$records}筆資料</p>
        <div>
            <div>
            <h4>留言列表</h4>
                <table class="table" style="text-align:center">
                    <thead>
                        <tr>
                            <th scope="col" style="width:100px">前往</th>
                            <th scope="col" style="width:100px">留言者</th>
                            <th scope="col" style="width:100px">主題</th>
                            <th scope="col" style="width:100px">時間</th>
                            <th scope="col" style="width:50%;overflow:hidden">內容</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach item=post from=$post_array}
                        <tr>
                        <form action="index.php" method="POST">
                            <input type="text" name="postID" value="{$post.postID}" hidden>
                            <input type="text" name="subID" value="{$post.subID}" hidden>
                            <input type="text" name="type" value="{$post.type}" hidden>
                            <td><button type="submit" class="btn btn-outline-success my-2 my-sm-0">前往</button></td>
                            <td>{$post.memberName}</td>
                            <td>{$post.subject}</td>
                            <td>{$post.date}</td>
                            <td class='content text-break' style="overflow:hidden">{$post.content}</td>
                        </form>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    {else}
        <p>查無結果:請重新確認查詢資料</p>
    {/if}
</body>
</html>