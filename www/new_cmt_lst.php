<?php
switch ($tg) {
    case 'elct': # 당선자에 달리는 댓글일 경우
        $cmts = \App\Common::getElctCommentList($elected['id']);
        break;

    case 'pol':  # 공약에 달리는 댓글일 경우
        $cmts = \App\Common::getPolCommentList($policy['id']);
        break;
}
?>

<!-- PRINT COMMENT LIST -->
<div class="comment_list col-md-12">
<?php
foreach ($cmts as $cmt)
{

    if ($cmt['comment_id'] == $cmt['id']) // 댓글일 경우
    { ?>
        <div class="comment_main">
            <div class="comment_header">
<?php echo $cmt['nick'] ?>
                <div class="wr_user_ip go_right">
                    <span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span><?php echo $cmt['ip'] ?>
                </div>
            </div>
            <div class="comment_area">
<?php echo $cmt['content'] ?>
            </div>
            <div class="comment_report">
<?php echo $cmt['created_at']?> | 신고
            </div>
            <div class="comment_info">
                <div class="comment_openaddbtn">
                    <button class="cmt_addmnt_btn">대댓글</button>
                </div>
                <div class="comment_recommend">
                    <button class="cmt_like">좋아요</button>
                    <button class="cmt_dislike">싫어요</button>
                </div>
            </div>
            <div class="comment_add hidden">
<?php $prt_cmt=$cmt['id']; include 'new_addcmt_summit.php'; ?>
            </div>
        </div>
<?php
    } else {
// 대댓글일 경우
?>
        <div class="add_comment">
            <div class="add_comment_header">
<?php echo $cmt['nick'] ?> |
                <div class="go_right">
                    IP: <?php echo $cmt['ip'] ?>
                </div>
            </div>
            <div class="add_comment_area">
<?php echo $cmt['content']?>
            </div>
            <div class="add_comment_info">
                <div class="add_comment_report">
<?php echo $cmt['created_at']?> | 신고
                </div>
                <div class="add_comment_recommend">
                    <button>좋아요</button>
                    <button>싫어요</button>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
<?php
}
?>
</div>