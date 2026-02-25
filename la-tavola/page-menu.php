<?php
/**
 * Template Name: Menu Page
 * A dedicated restaurant menu page with Italian dishes
 */
get_header();
?>

<!-- MENU HERO -->
<section class="menu-hero">
    <div class="container">
        <p class="menu-hero__label">Curated with Love</p>
        <h1 class="menu-hero__title">Our Menu</h1>
        <p class="menu-hero__desc">Seasonal ingredients, time-honored recipes, and the passion of three generations.</p>
    </div>
</section>

<!-- MENU NAVIGATION -->
<div class="menu-nav" id="menu-nav">
    <button class="menu-nav__btn active" data-target="antipasti">Antipasti</button>
    <button class="menu-nav__btn" data-target="primi">Primi</button>
    <button class="menu-nav__btn" data-target="secondi">Secondi</button>
    <button class="menu-nav__btn" data-target="contorni">Contorni</button>
    <button class="menu-nav__btn" data-target="dolci">Dolci</button>
    <button class="menu-nav__btn" data-target="vini">Vini</button>
</div>

<!-- MENU CONTENT -->
<div class="container container--narrow">

    <!-- ANTIPASTI -->
    <section class="menu-category" id="antipasti">
        <div class="menu-category__header fade-in">
            <p class="menu-category__label">To Begin</p>
            <h2 class="menu-category__title">Antipasti</h2>
            <p class="menu-category__subtitle">Start your journey through Italian flavors</p>
        </div>

        <div class="menu-items">
            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Burrata Pugliese</h4>
                    <p class="menu-item__desc">Creamy burrata from Puglia with heirloom tomatoes, wild arugula, aged balsamic reduction, and extra virgin olive oil.</p>
                </div>
                <span class="menu-item__price">$19</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Carpaccio di Manzo</h4>
                    <p class="menu-item__desc">Thinly sliced prime beef tenderloin with shaved Parmigiano-Reggiano, capers, arugula, and lemon-truffle dressing.</p>
                </div>
                <span class="menu-item__price">$22</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Polpo alla Griglia</h4>
                    <p class="menu-item__desc">Chargrilled Spanish octopus with cannellini bean pur&eacute;e, roasted cherry tomatoes, and salsa verde.</p>
                </div>
                <span class="menu-item__price">$24</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Arancini di Riso</h4>
                    <p class="menu-item__desc">Crispy saffron risotto balls stuffed with mozzarella and rag&ugrave;, served with marinara sauce.</p>
                </div>
                <span class="menu-item__price">$16</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Tagliere di Salumi <span class="menu-item__tag">For Two</span></h4>
                    <p class="menu-item__desc">Selection of imported prosciutto di Parma, soppressata, coppa, with marinated olives, giardiniera, and grissini.</p>
                </div>
                <span class="menu-item__price">$28</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Caponata Siciliana</h4>
                    <p class="menu-item__desc">Sweet and sour eggplant stew with celery, capers, pine nuts, and golden raisins served on crostini.</p>
                </div>
                <span class="menu-item__price">$15</span>
            </div>
        </div>
    </section>

    <!-- PRIMI -->
    <section class="menu-category" id="primi">
        <div class="menu-category__header fade-in">
            <p class="menu-category__label">First Course</p>
            <h2 class="menu-category__title">Primi</h2>
            <p class="menu-category__subtitle">Handmade pasta and traditional first courses</p>
        </div>

        <div class="menu-items">
            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Cacio e Pepe <span class="menu-item__tag">Signature</span></h4>
                    <p class="menu-item__desc">Handmade tonnarelli pasta tossed tableside with aged Pecorino Romano and freshly cracked Tellicherry black pepper.</p>
                </div>
                <span class="menu-item__price">$24</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Pappardelle al Cinghiale</h4>
                    <p class="menu-item__desc">Wide ribbon pasta with slow-braised wild boar rag&ugrave;, rosemary, and a touch of dark chocolate.</p>
                </div>
                <span class="menu-item__price">$28</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Risotto ai Funghi Porcini</h4>
                    <p class="menu-item__desc">Carnaroli rice slowly stirred with foraged porcini mushrooms, white wine, and finished with truffle butter.</p>
                </div>
                <span class="menu-item__price">$26</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Ravioli di Ricotta e Spinaci</h4>
                    <p class="menu-item__desc">Delicate pasta parcels filled with fresh ricotta and spinach, in brown butter and sage sauce with toasted pine nuts.</p>
                </div>
                <span class="menu-item__price">$23</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Linguine alle Vongole</h4>
                    <p class="menu-item__desc">Linguine with littleneck clams, white wine, garlic, chili flakes, and fresh Italian parsley.</p>
                </div>
                <span class="menu-item__price">$27</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Lasagna della Nonna</h4>
                    <p class="menu-item__desc">Our grandmother's recipe with handmade pasta sheets, bol&ograve;gnese rag&ugrave;, b&eacute;chamel, and Parmigiano-Reggiano.</p>
                </div>
                <span class="menu-item__price">$25</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Gnocchi alla Sorrentina</h4>
                    <p class="menu-item__desc">Pillowy potato gnocchi baked with San Marzano tomato sauce, fresh mozzarella, and basil.</p>
                </div>
                <span class="menu-item__price">$22</span>
            </div>
        </div>
    </section>

    <!-- SECONDI -->
    <section class="menu-category" id="secondi">
        <div class="menu-category__header fade-in">
            <p class="menu-category__label">Main Course</p>
            <h2 class="menu-category__title">Secondi</h2>
            <p class="menu-category__subtitle">Prime meats and the freshest seafood</p>
        </div>

        <div class="menu-items">
            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Osso Buco alla Milanese <span class="menu-item__tag">Signature</span></h4>
                    <p class="menu-item__desc">Braised veal shanks in white wine and vegetables, served with saffron risotto and gremolata.</p>
                </div>
                <span class="menu-item__price">$42</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Branzino al Forno</h4>
                    <p class="menu-item__desc">Whole roasted Mediterranean sea bass with Ligurian olives, capers, cherry tomatoes, and white wine.</p>
                </div>
                <span class="menu-item__price">$38</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Bistecca alla Fiorentina <span class="menu-item__tag">For Two</span></h4>
                    <p class="menu-item__desc">40oz dry-aged porterhouse grilled over oak wood, seasoned with Maldon salt, rosemary, and Tuscan olive oil.</p>
                </div>
                <span class="menu-item__price">$98</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Pollo alla Parmigiana</h4>
                    <p class="menu-item__desc">Pan-fried chicken breast with San Marzano tomato sauce, melted mozzarella, and fresh basil over spaghetti.</p>
                </div>
                <span class="menu-item__price">$29</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Saltimbocca alla Romana</h4>
                    <p class="menu-item__desc">Tender veal escalopes wrapped with prosciutto and sage, pan-seared and finished with white wine butter sauce.</p>
                </div>
                <span class="menu-item__price">$36</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Salmone in Crosta</h4>
                    <p class="menu-item__desc">Atlantic salmon in a golden herb crust with lemon-dill beurre blanc and roasted vegetables.</p>
                </div>
                <span class="menu-item__price">$34</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Agnello Scottadito</h4>
                    <p class="menu-item__desc">Grilled lamb chops marinated in garlic, rosemary, and chili, served with roasted potatoes and mint pesto.</p>
                </div>
                <span class="menu-item__price">$40</span>
            </div>
        </div>
    </section>

    <!-- CONTORNI -->
    <section class="menu-category" id="contorni">
        <div class="menu-category__header fade-in">
            <p class="menu-category__label">Sides</p>
            <h2 class="menu-category__title">Contorni</h2>
            <p class="menu-category__subtitle">Perfect accompaniments to your meal</p>
        </div>

        <div class="menu-items">
            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Patate Arrosto</h4>
                    <p class="menu-item__desc">Crispy roasted potatoes with rosemary, garlic, and Tuscan olive oil.</p>
                </div>
                <span class="menu-item__price">$10</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Broccolini alla Griglia</h4>
                    <p class="menu-item__desc">Chargrilled broccolini with chili, lemon zest, and shaved Pecorino.</p>
                </div>
                <span class="menu-item__price">$11</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Insalata Mista</h4>
                    <p class="menu-item__desc">Mixed greens, radicchio, fennel, and citrus with a light lemon vinaigrette.</p>
                </div>
                <span class="menu-item__price">$12</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Spinaci Saltati</h4>
                    <p class="menu-item__desc">Saut&eacute;ed spinach with garlic, olive oil, and a squeeze of lemon.</p>
                </div>
                <span class="menu-item__price">$9</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Funghi Trifolati</h4>
                    <p class="menu-item__desc">Mixed wild mushrooms saut&eacute;ed with garlic, thyme, and a splash of white wine.</p>
                </div>
                <span class="menu-item__price">$13</span>
            </div>
        </div>
    </section>

    <!-- DOLCI -->
    <section class="menu-category" id="dolci">
        <div class="menu-category__header fade-in">
            <p class="menu-category__label">Sweet Endings</p>
            <h2 class="menu-category__title">Dolci</h2>
            <p class="menu-category__subtitle">The perfect finale to your Italian feast</p>
        </div>

        <div class="menu-items">
            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Tiramis&ugrave; Classico <span class="menu-item__tag">Signature</span></h4>
                    <p class="menu-item__desc">Our legendary recipe with house-made mascarpone cream, espresso-soaked Savoiardi, and Marsala wine.</p>
                </div>
                <span class="menu-item__price">$16</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Panna Cotta al Limone</h4>
                    <p class="menu-item__desc">Silky vanilla panna cotta with Amalfi lemon curd and fresh berries.</p>
                </div>
                <span class="menu-item__price">$14</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Cannoli Siciliani</h4>
                    <p class="menu-item__desc">Crispy cannoli shells filled to order with sweet ricotta, chocolate chips, and candied orange peel.</p>
                </div>
                <span class="menu-item__price">$13</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Torta Caprese</h4>
                    <p class="menu-item__desc">Flourless chocolate and almond cake from Capri, served warm with whipped cream and amarena cherries.</p>
                </div>
                <span class="menu-item__price">$15</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Affogato al Caff&egrave;</h4>
                    <p class="menu-item__desc">Vanilla gelato drowned in a shot of hot espresso, with a splash of Amaretto on request.</p>
                </div>
                <span class="menu-item__price">$11</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Gelato e Sorbetto</h4>
                    <p class="menu-item__desc">Three scoops of house-made gelato or sorbetto. Ask your server for today's flavors.</p>
                </div>
                <span class="menu-item__price">$12</span>
            </div>
        </div>
    </section>

    <!-- VINI -->
    <section class="menu-category" id="vini">
        <div class="menu-category__header fade-in">
            <p class="menu-category__label">From the Cellar</p>
            <h2 class="menu-category__title">Vini</h2>
            <p class="menu-category__subtitle">Curated wines from Italy's finest vineyards</p>
        </div>

        <div class="menu-items">
            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Prosecco di Valdobbiadene</h4>
                    <p class="menu-item__desc">Nino Franco &mdash; Veneto. Crisp, fresh, with notes of green apple and white flowers.</p>
                </div>
                <span class="menu-item__price">$14 / $56</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Vermentino di Sardegna</h4>
                    <p class="menu-item__desc">Argiolas &mdash; Sardinia. Bright and mineral with citrus zest and Mediterranean herbs.</p>
                </div>
                <span class="menu-item__price">$15 / $60</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Chianti Classico Riserva</h4>
                    <p class="menu-item__desc">Fontodi &mdash; Tuscany. Rich Sangiovese with dried cherry, leather, and earthy undertones.</p>
                </div>
                <span class="menu-item__price">$18 / $72</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Barolo</h4>
                    <p class="menu-item__desc">Giacomo Conterno &mdash; Piedmont. Powerful and elegant with rose, tar, and black truffle.</p>
                </div>
                <span class="menu-item__price">$32 / $128</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Amarone della Valpolicella</h4>
                    <p class="menu-item__desc">Allegrini &mdash; Veneto. Full-bodied with dried fruit, chocolate, and warm spice.</p>
                </div>
                <span class="menu-item__price">$28 / $112</span>
            </div>

            <div class="menu-item fade-in">
                <div class="menu-item__info">
                    <h4 class="menu-item__name">Brunello di Montalcino</h4>
                    <p class="menu-item__desc">Biondi-Santi &mdash; Tuscany. The benchmark Brunello. Complex, structured, with exceptional aging potential.</p>
                </div>
                <span class="menu-item__price">$45 / $180</span>
            </div>
        </div>
    </section>

</div>

<!-- RESERVATION CTA -->
<section class="section cta-section">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-header__label">Join Us</span>
            <h2 class="section-header__title">Ready to Dine?</h2>
            <div class="section-header__divider"></div>
            <p class="section-header__desc">Reserve your table and let us take you on a culinary journey through Italy.</p>
        </div>
        <div class="fade-in" style="text-align:center;">
            <a href="tel:+12125551987" class="btn btn--filled">Call to Reserve</a>
            <span class="cta-section__phone">(212) 555-1987</span>
        </div>
    </div>
</section>

<?php get_footer(); ?>
