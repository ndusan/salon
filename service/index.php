<?php $token = $_SESSION['token'] = md5(uniqid(rand(), TRUE)); ?>
<!--Services -->
<ul class="products">
    <li class="noTop">
        <h2>Šta je ALEXANDRIA Professional epliacija tela šećernom pastom?<a name="EPILACIJA-TELA-USLUGA"></a></h2>
        <p>Alexandria Professional epilacija šećerom pastom pomaže da učinite vašu dlaku finijom i da održavate vašu kožu glatkom i zdravom. Epilacija šećernom pastom je mnogo nežniji, bezbedniji i zaista napredan metod uklanjanja dlaka za sve delove tela. Deluje na sve tipove kože i strukture dlake kako kod žena tako i kod muškaraca.</p>
            <a href="#" class="toggle-form" rel="EPILACIJA">Pitajte i saznajte više</a>
        <div class="moreInfo" id="EPILACIJA"  style="display: none;" title="hide">
            <form action="/proizvodi" medtod="post" id="form-EPILACIJA">
                <label for="name">Vaše ime:</label>
                <input type="text" id="name" name="name"/><br/>
                <label for="email">Vaša elektronska adresa:</label>
                <input type="text" id="email" name="email"/><br/>
                <label for="question">Vaše pitanje:</label>
                <textarea id="question" name="question"></textarea><br/>
                <input type="hidden" name="subject" value="Forma [Objasnite mi više o EPILACIJA]" />
                <input type="hidden" name="token" value="<?php echo $token ?>" />
                <input type="submit" value="Pošalji pitanje" name="submit"/>
            </form>
            <a href="#" class="toggle-form" rel="EPILACIJA">Zatvorite formu za pitajte</a>
        </div>
    </li>
    <li>
        <h2>Jedinstven šećerni proizvod<a name="ŠEĆERNI-PROIZVOD-USLUGA"></a></h2>
        <p>Šećerna pasta, koja se koristi, je smeša prirodnih sastojaka koji nemaju nikakve hemijske dodatke tako da ne postoji strah od bilo kakvih štetnih dejstava. Upotreba ovog jedinstvenog proizvoda će takode ukloniti mrtve ćelije kože ostavljajući kožu mekanom, svilenkastom i zdravom.</p>
        <a href="#" class="toggle-form" rel="SECERNI-PROIZVOD">Pitajte i saznajte više</a>
        <div class="moreInfo" id="SECERNI-PROIZVOD" style="display: none;" title="hide">
            <form action="/proizvodi" medtod="post" id="form-SECERNI-PROIZVOD">
                <label for="name">Vaše ime:</label>
                <input type="text" id="name" name="name"/><br/>
                <label for="email">Vaša elektronska adresa:</label>
                <input type="text" id="email" name="email"/><br/>
                <label for="question">Vaše pitanje:</label>
                <textarea id="question" name="question"></textarea><br/>
                <input type="hidden" name="subject" value="Forma [Objasnite mi više o SECERNI PROIZVOD]" />
                <input type="hidden" name="token" value="<?php echo $token ?>" />
                <input type="submit" value="Pošalji pitanje" name="submit"/>
            </form>
            <a href="#" class="toggle-form" rel="SECERNI-PROIZVOD">Zatvorite formu za pitajte</a>
        </div>
    </li>
    <li class="noBot">
        <h2>Priprema vaše kože za tretman<a name="PRIPREMA-ZA-TRETMAN-USLUGA"></a></h2>
        <p>Molimo vas da izmedu tretmana ne koristite brijač ili kreme za depilaciju, jer će to ometati postizanje vašeg cilja da proredite vašu dlaku, učinite je finijom i da održavate vašu kožu glatkom i zdravom. Redovan piling i hidriranje kože izmedu tretmana sećerom podjednako je važno kao i tretman koji dobijate u salonu. Dobićete najbolje rezultate ukoliko je vaša koža zdrava. Konsultujte se svojim Alexandria Professional stručnjakom o tome kako možete da poboljšate i dovedete do vrhunca vaše rezultate na koži. Što je bolja vaša koža bolji je i vas tretman. Što je efikasniji tretman, efikasniji su rezultati na vašoj koži... Zaista je toliko jednostavno!</p>
        <a href="#" class="toggle-form" rel="PRIPREMA-KOZE">Pitajte i saznajte više</a>
        <div class="moreInfo" id="PRIPREMA-KOZE" style="display: none;" title="hide">
            <form action="/proizvodi" medtod="post" id="form-PRIPREMA-KOZE">
                <label for="name">Vaše ime:</label>
                <input type="text" id="name" name="name"/><br/>
                <label for="email">Vaša elektronska adresa:</label>
                <input type="text" id="email" name="email"/><br/>
                <label for="question">Vaše pitanje:</label>
                <textarea id="question" name="question"></textarea><br/>
                <input type="hidden" name="subject" value="Forma [Objasnite mi više o PRIPREMA-KOZE]" />
                <input type="hidden" name="token" value="<?php echo $token ?>" />
                <input type="submit" value="Pošalji pitanje" name="submit"/>
            </form>
            <a href="#" class="toggle-form" rel="PRIPREMA-KOZE">Zatvorite formu za pitajte</a>
        </div>
    </li>
</ul>
    
