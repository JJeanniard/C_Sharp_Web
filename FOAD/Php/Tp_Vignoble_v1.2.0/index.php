<?php
require_once("./header.php");
require_once("./msg_session.php");
require_once("./connect_pdo.php");

?>
    <section id="carousel">
        <div id="border">
            <div id="slide">
                <div id="switch">
                    <img src="./images/slides/image1.jpg">
                    <img src="./images/slides/image2.jpg">
                    <img src="./images/slides/image3.jpg">
                    <img src="./images/slides/image4.jpg">
                    <img src="./images/slides/image5.jpg">
                    <img src="./images/slides/image6.jpg">
                    <img src="./images/slides/image7.jpg">
                </div>
            </div>
        </div>
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
    </section>
    <hr>
    <section id="sec-vignette">
        <div class="vignette">
            <h2>La Cave </h2><img class="icon" src='./images/icon-1.png' />
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos exercitationem alias maxime numquam
                quas, doloribus dolorem voluptas. Quasi aperiam, eveniet maiores eos amet vel debitis ipsam
                repellendus deserunt cupiditate tempora!</p>
            <button>Lire la suite</button>
        </div>
        <div class="vignette">
            <h2>Le Vigneron</h2><img class="icon" src='./images/icon-2.png' />
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, ducimus natus sint minima sunt atque
                reprehenderit ad voluptatibus, consequuntur earum omnis obcaecati recusandae at. Aliquam veritatis
                rem corrupti iusto explicabo.</p>
            <button>Lire la suite</button>
        </div>
        <div class="vignette">
            <h2>Les produits</h2><img class="icon" src='./images/icon-3.png' />
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nostrum minus facilis? Magni,
                impedit dolore voluptatem dolor atque amet facilis quas explicabo laudantium, expedita aut fugit
                aspernatur, tenetur porro eius?</p>
            <button>Lire la suite</button>
        </div>
    </section>
    <hr>
    <section>
        <div id="selection">
            <h2>Notre Sélection</h2>
            <ul>
                <li>Gigondas</li>
                <li>Vacqueyras</li>
                <li>Rasteau</li>
                <li>Bourgogne</li>
                <li>Bordeaux</li>
                <li>Sauterne</li>
            </ul>
        </div>
        <div id="cadeaux">
            <h2>Cadeaux et accessoires</h2>
            <article>
                <!--TODO: faire en sort de prendre le dernier cadeaux en bdd-->
                <img src="images/home-img1.jpg">
                <p id="little-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ducimus quos facilis vitae soluta
                    quidem optio deleniti, eveniet quo dolores. Iste fugiat modi expedita veniam recusandae
                    voluptatum repellat explicabo ullam!
                    Inventore provident doloremque, sunt eum voluptas ex aspernatur sapiente excepturi at, omnis
                    labore expedita itaque assumenda. In quos totam recusandae odio architecto voluptatem ducimus
                    labore laborum iusto nostrum, laudantium ratione.
                    Facere accusamus iste voluptatibus quidem assumenda amet distinctio consectetur repudiandae quos
                    debitis, eveniet vero officia modi rerum itaque commodi sed iusto dolor vel reprehenderit
                    asperiores ratione a! Quidem, eum voluptatem.</p>
                <button><a href="./cadeaux.php">Lire la suite</a></button>
            </article>
        </div>
    </section>
    
    <hr>
    
    <?php
    require_once("./footer.php");
    ?>
