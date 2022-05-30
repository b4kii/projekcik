<?php
    include_once "header.php"    
?>
    <!-- Main section  -->
    <section class="main">
	<?php
            if (isset($_SESSION["userName"])) {
                echo "<div class='user-name'><h2>Witaj ".$_SESSION["userName"]."!</h2></div>";
            }
        ?>
        <!-- Gallery -->
        <div class="container">
            <div class="mySlides">
                <img src="img/1.jpg" alt="1" style="width:100%;">
            </div>

            <div class="mySlides">
                <img src="img/2.jpg" alt="2" style="width:100%;">
            </div>

            <div class="mySlides">
                <img src="img/3.jpg" alt="3" style="width:100%;">
            </div>
                
            <div class="mySlides">
                <img src="img/4.jpg" alt="4" style="width:100%;">
            </div>

            <div class="mySlides">
                <img src="img/5.jpg" alt="5" style="width:100%;">
            </div>
                
            <div class="mySlides">
                <img src="img/6.jpg" alt="6" style="width:100%;">
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

            <div class="caption-container">
            </div>

            <div class="row">
                <div class="column">
                    <img class="demo cursor" src="img/1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img/2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img/3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img/4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                </div>
                <div class="column">
                    <img class="demo cursor" src="img/5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
                </div>    
                <div class="column">
                    <img class="demo cursor" src="img/6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
                </div>
            </div>

            <div class="caption-container">
            </div>

        </div>

        <!-- About  -->
        <div id="about" class="about">
        <div class="center-title">
            <div class="line"></div>
            <p>O mnie</p>
            <div class="line"></div>
        </div>
            <div class="about-wrap">
                <img src="img/avekk.jpg" alt="Photo">
                <div class="phrase">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia sint, corrupti deleniti minima natus maxime pariatur a sed cupiditate atque quos ex voluptatibus sequi nulla esse eaque assumenda veniam eius quod officiis delectus inventore. Non porro minima alias accusantium in adipisci! Itaque qui aliquam recusandae ad corrupti iure ab officia?</div>
            </div>
            <div class="me">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora eligendi, earum saepe officiis alias ipsum soluta corporis ea ipsam eveniet voluptatum. Quia explicabo ex incidunt fugiat sint doloribus dolorem quo, eius animi pariatur et cumque soluta eum ut, similique obcaecati deserunt fugit consequatur porro, laboriosam reprehenderit rerum quam? Deleniti soluta vitae dolorem, numquam ducimus minima molestiae reiciendis nam dolor iusto, iure cupiditate ex libero nulla atque vel voluptatem voluptatum veritatis corporis neque! Nemo placeat hic accusamus fuga voluptate dicta atque natus reiciendis perferendis maxime officia sunt voluptates tenetur facilis fugit non, assumenda ad? Quas corporis animi totam expedita temporibus, nemo eius beatae soluta voluptate fugiat cum dolore minima earum eum quod, dolor repellat fuga aperiam recusandae iste nostrum minus quos at! Alias dicta aliquam maiores, voluptate cum deleniti reprehenderit repudiandae sed aspernatur eveniet aperiam impedit error magni placeat assumenda sunt culpa praesentium autem saepe ex hic excepturi. Iure corrupti totam reiciendis omnis sequi aut rerum nemo temporibus vero, voluptate ducimus enim incidunt eveniet alias nostrum quod odit earum harum. Eum unde voluptate ducimus velit nemo explicabo, culpa possimus beatae neque? Itaque quidem eveniet, doloribus, cupiditate adipisci assumenda asperiores quibusdam eligendi aperiam velit mollitia ullam dolorum odio quasi eum, rerum ipsam.</div>
        </div>

        <!-- Price list  -->
        <div id="price-list" class="price-list">
        <div class="center-title">
            <div class="line"></div>
            <p>Cennik</p>
            <div class="line"></div>
        </div>
            <table>
                <thead>
                    <tr>
                        <th>Usługa</th>
                        <th>Cena</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lorem ipsum dolor sit.</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing.</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td>Lorem ipsum dolor sit amet consectetur.</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Lorem ipsum dolor sit amet consectetur.</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing.</td>
                        <td>70</td>
                    </tr>

                </tbody>
            </table>
        </div>
            <div class="center-title padd">
                <div class="line"></div>
                <p>Kontakt</p>
                <div class="line"></div>
            </div>
        <div id="contact" class="contact">
            <div class="img-wrap">
                <img src="img/contact2.png" alt="Mapa">
            </div>
 	
            <div class="cont-wrap">
                <div class="ic">
                    <i class="material-icons">local_phone</i>
                    <p>123456789</p>
                </div>
                <div class="ic">
                    <i class="material-icons">mail</i>
                    <p>kontakt@gmail.com</p>
                </div>
                <div class="ic">
                    <i class="material-icons">location_on</i>
                    <p>Kraków, ul. Truskawkowa 32</p>
                </div>
            </div>

           
        </div>
    </section>

<?php
    include_once "footer.php"
?>
