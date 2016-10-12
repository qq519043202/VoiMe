
    <div id="main">
        <input hidden class="hidden" id = "list">
        <div class="header">
            <h1>Start your VoiMe!</h1>
            <h2>Login or register here</h2>
        </div>

        <div class="content">
        <?php
        foreach ($res as $k) {
            // echo $k['user_id'];
            $url ='public/recordings/'.$k['record_url'];
            $id = $k['id'];
        ?>

            <div class="pure-g">
                <input value=<?php echo "$id"; ?> class ="hidden" />
                <h2 class="content-subhead pure-u-1-3 pure-u-sm-1-2"><b><?php echo $k['time']?></b></h2>
                <p class="content-subhead pure-u-1-3 pure-u-sm-1-2">by <a href="<?=BASE ?>/index.php/home/user?id=<?=$k['user_id']?>"><?php echo $k['user_name']?></a></p>

                <div class="pure-u-1 pure-u-sm-3-8 pure-u-md-1-2"><a class="pure-button play" href="javascript:void(0)">>>><?php echo $k['lenth']; ?>>>></a>
                <audio controls hidden>
                    <source src=<?php echo $url; ?> type="audio/wav">
                    换个浏览器吧~~
                </audio>
                </div>
                <div class="pure-u-1-3 pure-u-sm-5-24 pure-u-md-1-6"><a class="button-success pure-button can_button" href="javascript:void(0)">收藏(<?php echo $k['collections'];?>)</a></div>

                <div class="pure-u-1-3 pure-u-sm-5-24  pure-u-md-1-6"><a class="button-warning pure-button liu_button" href="javascript:void(0)">留言(<?php echo $k['liuyans'];?>)</a></div>

                <div class="pure-u-1-3 pure-u-sm-5-24  pure-u-md-1-6"><a class="button-error pure-button del_button" href="javascript:void(0)">删除</a></div>                

                <div class="pure-u-1 liuyan">
                    <div class="pure-u-1-12"></div>
                    <div class="pure-u-5-6 liuyan_body">


                        <form class="pure-form" method="post" action="?/usr/liuyan">
                            <input name="id" value=<?php echo "$id"; ?> class ="hidden" />
                            <input type="text" name='body' class="pure-input-rounded pure-u-1 pure-u-sm-1-2" placeholder="Leave a message"/>
                            <button type="submit"  class="button-secondary pure-button">submit</button>
                        </form>
                    </div>
                </div>



            </div>

            <?php
                }
            ?>

        </div>
    </div>
