<div class="banner">
    banner carousel
</div>
<div class="landing">
    <h1>Welcome to Lan Team</h1>
    <span class="fbLike">
        <!-- Like button -->
        <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
        <fb:like href="http://salonlepote.co.rs" send="false" layout="button_count" show-faces="false" width="20" font="arial" colorscheme="light" />


        <!-- Send to friend button -->
        <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:send href="http://salonlepote.co.rs" font="arial"></fb:send>
    </span>
    <h2>BEAUTY SALON</h2>
    <p>
        Kako ćete prepoznati Alexandria proizvode ( tretman ) i Alexandria stručnjaka?
    </p>
    <p>
        Alexandria proizvodi se uvoze direktno iz Kanade, nalaze se u plavo belim kutijama i flašicama, pune se fabrički i prošli su visoke sanitarne kontrole.
        Sertifikovani Alexandria stručnjaci poseduju originalne diplome i Alexandria postere koji su nalaze na vidno postavljenim mestima.
    </p>
    <p>
        Koža se obavezno prvo očisti Alexandria preseptom, nakon čega se stavlja tonik za proširenje pora i Alexandria specijalni puder.
        Tretman se radi isključivo rukavicama. Šećerna pasta se zagreva jedino u grejačima, gde se pasta zagreje do temperature tela ( 37 stepeni ).
        Nakon tretmana koža se smiruje Alexandria restorom i tonikom. 
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
        social plugin
    </div>
</div>





