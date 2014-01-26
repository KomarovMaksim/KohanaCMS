<?php

/* site/main.twig */
class __TwigTemplate_4a3c347b7f9653b792b86d5ceacd4e7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("site/site.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "site/site.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <title>Главная</title>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
    <div class=\"main_banner\" style=\"\t\t\t\t\t\tpadding-top:20px;\t\t\t\t\t\"><a target=\"_blank\" href=\"http://www.youtube.com/watch?v=SFEX9nMv3MI\"><img title=\"\" alt=\"\" src=\"/assets/site/deployedFiles/StaticFiles/Banners/autumn_playbutton.jpg\"></a></div>

<div class=\"portlet_2\">
\t\t<style></style>
\t\t<div class=\"gg_highlight_box\"><div class=\"gg_tlt_highlight_box\">visitgreece.gr<a href=\"#\">highlights</a></div><div class=\"gg_txt_highlight_box\">
    ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 17
            echo "<div class=\"gg_box\"><div class=\"gg_img_box\"><img title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "image"), "html", null, true);
            echo "\"></div><div class=\"gg_tlt_box\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
            echo "</b><br> </div><div class=\"gg_txt_box\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "short_text"), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "get_url", array(), "method"), "html", null, true);
            echo "\"><span style=\" color: #00B7EF;\"><b>Читать далее</b></span></a><br>
</p></div></div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "</div></div></div>

\t<div class=\"portlet_3\">
\t\t<link rel=\"stylesheet\" media=\"screen\" href=\"/assets/site/eot/styles/movingboxes.css\"><script src=\"/assets/site/eot/scripts/jquery.movingboxes.min.js\"></script><style>\t\t\t\tul#slider2 {\t\t\t\t\twidth : 524px;\t\t\t\t\theight : 230px;\t\t\t\t\tpadding : 0 12px;\t\t\t\t}\t\t\t\t#slider2 li {\t\t\t\t\twidth : 168px;\t\t\t\t}</style><div class=\"gg_home_events\">
<div class=\"gg_tlt_events\">Ближайшие события</div>
<ul id=\"slider2\">
<li>
<img title=\"Exhibition for the 40th Anniversary of the uprising at the NTUA\" alt=\"Exhibition for the 40th Anniversary of the uprising at the NTUA\" src=\"deployedFiles/StaticFiles/Photos/events/melina_140_100.jpg\"><h1>Exhibition for the 40th Anniversary of the uprising at the NTUA</h1>
<h2>The Greek Poster Centre and the Municipality of Athens are hosting a Poster & Document exhibition at the Melina Cultural Centre until November 24, 2013, in honour of the 40th anniversary of the uprising at the National Technical University of Athens on November 17, 1973, against the then governing colonels’ junta. </h2>
<a itemprop=\"url\" href=\"en/events/exhibition_for_the_40th_anniversary_of_the_uprising_at_the_ntua\">Read more...</a>
</li>
<li>
<img title=\"The circle of life at the Museum of Contemporary Art of Crete\" alt=\"The circle of life at the Museum of Contemporary Art of Crete\" src=\"deployedFiles/StaticFiles/Photos/events/Podilates_MuseumofCAC_140.jpg\"><h1>The circle of life at the Museum of Contemporary Art of Crete</h1>
<h2>The Museum of Contemporary Art of Crete in the picturesque town of Rethymnon hosts the exhibition The circle of life with works of art by Philip Tsiaras and Chris Doulgeris, until the end of November 2013. </h2>
<a itemprop=\"url\" href=\"en/events/the_circle_of_life_at_the_museum_of_contemporary_art_of_crete\">Read more...</a>
</li>
<li>
<img title=\"4th Athens Biennale 2013\" alt=\"4th Athens Biennale 2013\" src=\"deployedFiles/StaticFiles/Photos/events/biennale_athens_2013_140_100.png\"><h1>4th Athens Biennale 2013</h1>
<h2>With the multi-collective programme of AGORA and aiming to explore creative alternatives and useful ideas, here comes the 4th Athens Biennale from September 29, 2013 to December 1, 2013.</h2>
<a itemprop=\"url\" href=\"en/events/4th_athens_biennale_2013\">Read more...</a>
</li>
<li>
<img title=\"C. P. Cavafy: &ldquo;Painted&rdquo;. 40 Contemporary Greek Creators\" alt=\"C. P. Cavafy: &ldquo;Painted&rdquo;. 40 Contemporary Greek Creators\" src=\"deployedFiles/StaticFiles/Photos/events/cavafis_tetsis_140_100.jpg\"><h1>C. P. Cavafy: &ldquo;Painted&rdquo;. 40 Contemporary Greek Creators</h1>
<h2>Visit the multifaceted exhibition titled C. P. Cavafy: “Painted”. 40 Contemporary Greek Creators at the B.& M. Theocharakis Foundation for the Fine Arts and Music in the centre of Athens, which will be running from September 25, 2013 to December 8, 2013. </h2>
<a itemprop=\"url\" href=\"en/events/c_p_cavafy_painted_40_contemporary_greek_creators\">Read more...</a>
</li>
<li>
<img title=\"Olympia International Film Festival for Children and Young People\" alt=\"Olympia International Film Festival for Children and Young People\" src=\"deployedFiles/StaticFiles/Photos/events/olympia_festival_2013_140_100.png\"><h1>Olympia International Film Festival for Children and Young People</h1>
<h2>The Olympia International Film Festival for Children and Young People and the European Meeting of Young People’s Audiovisual Creation – Camera Zizanio have renewed their appointment for this year, which is to take place in the first week of winter (November 30, 2013 to December 7, 2013), at Pyrgos town, Ileia, Peloponnese. You’re invited to it! </h2>
<a itemprop=\"url\" href=\"en/events/olympia_international_film_festival_for_children_and_young_people\">Read more...</a>
</li>
<li>
<img title=\"Archaeology behind battle lines in Thessaloniki\" alt=\"Archaeology behind battle lines in Thessaloniki\" src=\"deployedFiles/StaticFiles/Photos/events/Archaiologia_140_100.jpg\"><h1>Archaeology behind battle lines in Thessaloniki</h1>
<h2>If you visit Thessaloniki, the charming city of Macedonia, make a stop at the  Archaeological Museum hosting the exhibition Archaeology behind battle lines. In Thessaloniki of the turbulent years 1912-1922 until the end of 2013.   </h2>
<a itemprop=\"url\" href=\"en/events/archaeology_behind_battle_lines_in_thessaloniki\">Read more...</a>
</li>
<li>
<img title=\"Birds and aircraft in parallel flights at the Athens International Airport\" alt=\"Birds and aircraft in parallel flights at the Athens International Airport\" src=\"deployedFiles/StaticFiles/Photos/events/birds_planes_140.jpg\"><h1>Birds and aircraft in parallel flights at the Athens International Airport</h1>
<h2>Passengers and visitors of the Athens International Airport can visit the photography exhibition on environmental and artistic awareness titled Birds and aircraft in parallel flights which will be running until the end of 2013. </h2>
<a itemprop=\"url\" href=\"en/events/birds_and_aircraft_in_parallel_flights_at_the_athens_international_airport\">Read more...</a>
</li>
<li>
<img title=\"Exhibition for Pyrrhus at the Archaeological Museum of Ioannina\" alt=\"Exhibition for Pyrrhus at the Archaeological Museum of Ioannina\" src=\"deployedFiles/StaticFiles/Photos/events/Pyrros_140.jpg\"><h1>Exhibition for Pyrrhus at the Archaeological Museum of Ioannina</h1>
<h2>The 12th Ephorate of Prehistoric and Classical Antiquities will be hosting at the Archaeological Museum of Ioannina the temporary exhibition “Pyrrhus Leader King. Epirus of the Mediterranean and the Universe”. An exhibition in progress, which will be running until the end of December 2013.</h2>
<a itemprop=\"url\" href=\"en/events/exhibition_for_pyrrhus_at_the_archaeological_museum_of_ioannina\">Read more...</a>
</li>
<li>
<img title=\"Greek Seas at the Benaki Museum\" alt=\"Greek Seas at the Benaki Museum\" src=\"deployedFiles/StaticFiles/Photos/events/thalasses_140_100.jpg\"><h1>Greek Seas at the Benaki Museum</h1>
<h2>Voyage to insular Greece through the exhibition Greek Seas: A photographic journey in time held at the Benaki Museum (Peiraios Street Annexe) until January 5, 2014. </h2>
<a itemprop=\"url\" href=\"en/events/greek_seas_at_the_benaki_museum\">Read more...</a>
</li>
<li>
<img title=\"The Christmas Factory in Athens\" alt=\"The Christmas Factory in Athens\" src=\"deployedFiles/StaticFiles/Photos/events/TheChristmasFactory_140_100.jpg\"><h1>The Christmas Factory in Athens</h1>
<h2>This Christmas a special toy factory will be set up downtown in Technopolis of the City of Athens (Gazi), holding joy and magic in store for children and adults, from December 6, 2013 until January 6, 2014. </h2>
<a itemprop=\"url\" href=\"en/events/the_christmas_factory_in_athens\">Read more...</a>
</li>
<li>
<img title=\"Seeking the ancient kallos at the National Archaeological Museum\" alt=\"Seeking the ancient kallos at the National Archaeological Museum\" src=\"deployedFiles/StaticFiles/Photos/events/EAM GARRIC_140.jpg\"><h1>Seeking the ancient kallos at the National Archaeological Museum</h1>
<h2>Make a point of visiting the photography exhibition by Joshua Garrick titled ‘Seeking the ancient kallos’ which will be hosted at the National Archaeological Museum in Athens until January 8, 2014. </h2>
<a itemprop=\"url\" href=\"en/events/seeking_the_ancient_kallos_at_the_national_archaeological_museum\">Read more...</a>
</li>
<li>
<img title=\"The Antikythera Shipwreck exhibition at the National Archaeological Museum\" alt=\"The Antikythera Shipwreck exhibition at the National Archaeological Museum\" src=\"deployedFiles/StaticFiles/Photos/events/Antikythera_140_100.jpg\"><h1>The Antikythera Shipwreck exhibition at the National Archaeological Museum</h1>
<h2>The National Archaeological Museum of Athens launched on April 6, a temporary exhibition entitled The Antikythera Shipwreck: The ship - the Treasures - the Mechanism, to run until January 12, 2014.</h2>
<a itemprop=\"url\" href=\"en/events/the_antikythera_shipwreck_exhibition_at_the_national_archaeological_museum\">Read more...</a>
</li>
<li>
<img title=\"Martin Kippenberger Exhibition at the Museum of Cycladic Art\" alt=\"Martin Kippenberger Exhibition at the Museum of Cycladic Art\" src=\"deployedFiles/StaticFiles/Photos/events/Martin Kippenberger_140.jpg\"><h1>Martin Kippenberger Exhibition at the Museum of Cycladic Art</h1>
<h2>Visit the contemporary art exhibition titled A Cry For Freedom by the prolific German artist Martin Kippenberger which takes place at the Museum of Cycladic Art until January 26, 2014. </h2>
<a itemprop=\"url\" href=\"en/events/martin_kippenberger_exhibition_at_the_museum_of_cycladic_art\">Read more...</a>
</li>
<li>
<img title=\"Everywhere but Now at the 4th Thessaloniki Biennale of Contemporary Art\" alt=\"Everywhere but Now at the 4th Thessaloniki Biennale of Contemporary Art\" src=\"deployedFiles/StaticFiles/Photos/events/YEROLYMBOS_Thessaloniki_140_100.jpg\"><h1>Everywhere but Now at the 4th Thessaloniki Biennale of Contemporary Art</h1>
<h2>Make a point of visiting the principal exhibition in the 4th Thessaloniki Biennale of Contemporary Art, titled Everywhere but Now, which will be running from September 18, 2013 until January 31, 2014.</h2>
<a itemprop=\"url\" href=\"en/events/everywhere_but_now_at_the_4th_thessaloniki_biennale_of_contemporary_art\">Read more...</a>
</li>
<li>
<img title=\"Exhibition The Costakis Collection and the Russian Avant Garde\" alt=\"Exhibition The Costakis Collection and the Russian Avant Garde\" src=\"deployedFiles/StaticFiles/Photos/events/costakis_russianavantgarde_140_100.jpg\"><h1>Exhibition The Costakis Collection and the Russian Avant Garde</h1>
<h2>Celebrating the centenary year of the birth of Greek born collector George Costakis, the State Museum of Contemporary Art (Moni Lazariston) in Thessaloniki holds a large exhibition on the collector’s work, which will be running until the end of this year. </h2>
<a itemprop=\"url\" href=\"en/events/exhibition_the_costakis_collection_and_the_russian_avant_garde\">Read more...</a>
</li>
<li>
<img title=\"Beware The Prince is Messy at the Greek National Opera\" alt=\"Beware The Prince is Messy at the Greek National Opera\" src=\"deployedFiles/StaticFiles/Photos/events/beware_the_prince_140.jpg\"><h1>Beware The Prince is Messy at the Greek National Opera</h1>
<h2>Nikos Kypourgos’s original comic opera, addressed to young and old alike, is titled Beware! The Prince is Messy. It is directed by Thomas Moschopoulos who also penned the libretto, and it will be performed at Olympia Theatre from November 2013 until March 2014.  </h2>
<a itemprop=\"url\" href=\"en/events/beware_the_prince_is_messy_at_the_greek_national_opera\">Read more...</a>
</li>
<li>
<img title=\"Yannis Tsarouchis: Illustrating an autobiography\" alt=\"Yannis Tsarouchis: Illustrating an autobiography\" src=\"deployedFiles/StaticFiles/Photos/events/Tsarouchis_140.jpg\"><h1>Yannis Tsarouchis: Illustrating an autobiography</h1>
<h2>Make sure you visit Part I (1910-1940) of the exhibition Yannis Tsarouchis: Illustrating an autobiography which will be held until July 27, 2014 at the Benaki Museum (Peiraios Street Annexe). </h2>
<a itemprop=\"url\" href=\"en/events/yannis_tsarouchis_illustrating_an_autobiography\">Read more...</a>
</li>
</ul>

    ";
        // line 113
        if ((isset($context["splash"]) ? $context["splash"] : null)) {
            // line 114
            echo "        <script type=\"text/javascript\">
            \$(function(){
                var div = \$('<div onclick=\"\$(\\'#site_container\\').show();\$(this).fadeOut(2000.0)\"></div>');
                div.css({
                    display: 'none',
                    width: '100%',
                    height: '100%',
                    'background-image': 'url(";
            // line 121
            echo twig_escape_filter($this->env, (isset($context["splash"]) ? $context["splash"] : null), "html", null, true);
            echo ")',
                    position: 'absolute',
                    top: 0,
                    left: 0,
                    'background-size': 'cover',
                    'z-index': 10,
                    'background-position':'50% 50%'
                })
                \$('body').append(div);
                div.fadeIn(2000.0);
                window.setTimeout(function() {
                    \$('#site_container').show();
                    div.fadeOut(2000.0);
                }, 7000);

            })
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "site/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 121,  171 => 114,  169 => 113,  74 => 20,  54 => 17,  50 => 16,  42 => 10,  39 => 9,  32 => 4,  29 => 3,);
    }
}
