<div class="homeContent">
    <div class="landing">
        <h1>Salon lepote Lan Team</h1>
        <span class="fbLike">
            <!-- Like button -->
            <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
            <fb:like href="http://salonlepote.co.rs" send="false" layout="button_count" show-faces="false" width="20" font="arial" colorscheme="light" />


            <!-- Send to friend button -->
            <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:send href="http://salonlepote.co.rs" font="arial"></fb:send>
        </span>
        <h2>Dobrodošli</h2>
        <p>
            Salon lepote Lan Team se nalazi u ulici Jelisavete Načić (bivša Pavla Papa) br. 1, u neposrednoj blizini pijace Bajloni.
        </p>
        <p>
            U našem salonu koriste se najkvalitetniji kozmetički preparati za negu lica i tela poznate kanadske kozmetičke kuće Alexandria professional™.
        </p>
        <br/>
        <p>
            Posetite nas i uverite se i sami u kvalitet i profesionalizam našeg osoblja, očekujemo vas.
        </p>
    </div>
    <div class="home">
        <div class="homeNews">
            <?php include_once 'public/news.php'; ?>
            <?php if (!empty($_news)): ?>
                <!-- News -->
                <ul id="news" class="news">
                    <?php foreach ($_news as $n): ?>
                        <li>
                            <span><?php echo $n['datum']; ?></span>
                            <h3><?php echo $n['naslov']; ?></h3>
                            <p><?php echo $n['tekst']; ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
        <div class="homeSocial">
            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FLan-Team%2F118374028264322&amp;width=340&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=true&amp;header=false&amp;height=300" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:400px; height:395px;" allowTransparency="true"></iframe>
        </div>
    </div>
</div>





