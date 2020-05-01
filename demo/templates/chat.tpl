<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>guestbook</title>
    <script src="js/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist\css\bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
</head>
<body>
    <hr>
    {* 留言表ok *}
    <div class="container">
        <div class="accordion" id="accordionExample">
            {foreach item=post from=$post_array}
                {* 文章列表 *}
                <div class="card">
                    <div class="card-header" id="headingOne" style="block-inline">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{$post.postID}" aria-expanded="true" aria-controls="collapse{$post.postID}">
                                <h4>{$post.subject}</h4>
                            </button>
                        </h2>
                        <div>
                            <div style="text-align:right">{$post.memberName}  於  {$post.date}  發表</div>
                        </div>
                    </div>
                    {* 內文 *}
                    <div id="collapse{$post.postID}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body" style="display:flex">
                            {* 主留言附圖 *}
                            {if $post.img} 
                                <div class="col-sm-6" style="height:300px;"><img src="{$post.img}" style="display: block;width: auto;height: 100%;" ></div>
                                <div class="col-sm-6" style="height:300px;padding:10px;margin-left:5px;overflow:scroll">
                                    <h5 style="margin:0px">
                                        {* 主留言者有無大頭照 *}
                                        {if $post.Face}
                                            <img src="{$post.Face}" style="width:auto;height:30px" title="{$post.memberName}"> said:
                                        {else}
                                            {$post.memberName} said:
                                        {/if}
                                    </h5>
                                    <p class="text-break mt-1">{$post.content}<p>
                                    {foreach item=reply from=$reply_array}
                                        {* 回覆者有無大頭照 *}
                                        {if $reply.subID==$post.postID}
                                            <h5 style="margin:0px">
                                            {if $reply.Face}
                                                <img src="{$reply.Face}" style="width:auto;height:30px" title="{$reply.memberName}"> said:
                                            {else}
                                                {$reply.memberName} said:
                                            {/if}
                                            </h5>
                                            <p class="text-break mt-1">{$reply.content}<p>
                                        {/if}
                                    {/foreach}
                                </div>
                            {* 主留言留言不附圖 *}
                            {else}
                                <div class="col-sm-12" style="height:300px;padding:10px;overflow:scroll">
                                    <h5 style="margin:0px">
                                    {* 主留言者有無大頭照 *}
                                    {if $post.Face}
                                        <img src="{$post.Face}" style="width:auto;height:30px" title="{$post.memberName}"> said:
                                    {else}
                                        {$post.memberName} said:
                                    {/if}
                                    <p class="text-break mt-1">{$post.content}<p>
                                    {foreach item=reply from=$reply_array}
                                        {if $reply.subID==$post.postID}
                                            <h5 style="margin:0px">
                                            {* 回覆者有無大頭照 *}
                                            {if $reply.Face}
                                                <img src="{$reply.Face}" style="width:auto;height:30px" title="{$reply.memberName}"> said:
                                            {else}
                                                {$reply.memberName} said:
                                            {/if}
                                            </h5>
                                            <p class="text-break mt-1">{$reply.content}<p>
                                        {/if}
                                    {/foreach}
                                </div>
                            {/if}
                        </div>
                        {* 回覆 *}
                        <div style="text-align:center">
                            <form action="reply.php" method="post">
                                <div>
                                    {if $passed}
                                    <input type="text" class="col-sm-11" name="reply" required>
                                    {else}
                                    <input type="text" class="col-sm-11" name="reply" disabled required>
                                    {/if}
                                    <button type="submit" class='btn btn-outline-primary' style="margin-left:10px;margin-bottom:10px">submit</button>
                                </div>
                                <input type='text' name='subID' value="{$post.postID}" hidden>
                                <input type='text' name='subject' value="RE.{$post.subject}" hidden>
                            </form>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
    <script type="text/javascript">
        let passed ;
        let cookie = document.cookie.split(" ") ;
        if(cookie.length>1){
            passed = true ;
            var memberName = cookie[1].split("=")[1].replace("+"," ");
            document.getElementById('author').value = memberName.substring(0,memberName.length-1) ;
        }else{
            passed = false ;
        }
    </script>

</body>
</html>