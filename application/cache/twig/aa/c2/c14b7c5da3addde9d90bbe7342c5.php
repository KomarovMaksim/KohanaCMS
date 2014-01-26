<?php

/* site/site.twig */
class __TwigTemplate_aac2c14b7c5da3addde9d90bbe7342c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">

<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>

    <!-- Load Our CSS styles -->
    <!--- language = en --->
    <!--- objectType = Channel --->
    <!--- channelId = 8810570850527210VgnVCM100000460014ac____ --->
    <link rel=\"stylesheet\" href=\"/assets/site/eot/styles/pages/innerPageWithGeoSearchAndMapV2.css\" type=\"text/css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/site/eot/styles/menu.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/site/eot/styles/nivo-slider.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/site/eot/styles/themes/default/default.css\"/>
    <script language=\"javascript\">AC_FL_RunContent = 0;</script>
    <script type=\"text/javascript\" src=\"/assets/site/eot/scripts/jquery-1.8.3.min.js\"></script>
    <script async type=\"text/javascript\" src=\"/assets/site/eot/scripts/all.js\"></script>
    <script async type=\"text/javascript\" src=\"/assets/site/eot/scripts/menu.js\"></script>

    <script type=\"text/javascript\" src=\"/assets/site/eot/scripts/jquery.nivo.slider.pack.js\"></script>

    <link rel=\"Shortcut Icon\" href=\"/assets/site/favicon.ico\"/>

    <!-- find and

        <meta property=\"og:title\" content=\"Visit Greece | Culture\"/>
    <meta property=\"og:type\" content=\"article \"/>
    <meta property=\"og:site_name\" content=\"Visit Greece | The Official website of the Greek Tourism Organisation\"/>
    <meta property=\"og:description\"
          content=\"Discover Greece’s rich cultural tradition in the fine and popular arts and explore timeless works of drama, architecture, hagiography, painting and more \"/>
    <meta property=\"og:image\" content=\"http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Museums_510.jpg\"/>
    <meta name=\"description\" content=\"Discover Greece’s rich cultural tradition in the fine and popular arts and explore timeless works of drama, architecture, hagiography, painting and more \"/>
    <meta name=\"keywords\" content=\"culture, greece, museums, monuments, world heritage sites, archaeological sites\"/>

    show title -->

    <meta property=\"og:type\" content=\"article \"/>
    <meta property=\"og:site_name\" content=\"Gnto.ru – официальный сайт туристической информации о Греции, поддерживаемый Греческой национальной туристической организацией.\"/>
    <meta property=\"og:description\"
          content=\"Gnto.ru – официальный сайт туристической информации о Греции, поддерживаемый Греческой национальной туристической организацией.\"/>
    <meta property=\"og:image\" content=\"http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/download/wallpapers/wallpapers_all_time_classic/santorini_800x600.jpg\"/>


    <link href=\"/assets/site/vgn-ext-templating/common/styles/vgn-ext-templating.css\" rel=\"stylesheet\" type=\"text/css\"></link>
    <noscript>In order to bring you the best possible user experience, this site uses Javascript. If you are seeing this message, it is likely that the Javascript option in your browser is disabled.
        For optimal viewing of this site, please ensure that Javascript is enabled for your browser.
    </noscript>
    <!--  facebook analytics -->
    <meta property=\"fb:page_id\" content=\"10150127723605641\"/>
    <script type=\"text/javascript\">
\t\t\tjQuery(document).ready(function() {
\t\t\t\t\$('#header').nivoSlider({
\t\t\t\t\teffect:\"fade\",
\t\t\t\t\tanimSpeed:1000,
\t\t\t\t\tpauseTime:5000,
\t\t\t\t\tstartSlide:0,
\t\t\t\t\tcaptionOpacity:0,
\t\t\t\t\tdirectionNav:false,
\t\t\t\t\tdirectionNavHide:false,
\t\t\t\t\tcontrolNav:true,
\t\t\t\t\tcontrolNavThumbs:false,
\t\t\t\t\tcontrolNavThumbsFromRel:false,
\t\t\t\t\tkeyboardNav:true,
\t\t\t\t\tpauseOnHover:true,
\t\t\t\t\tmanualAdvance:false
\t\t\t\t});

\t\t\t})


\t\t</script>

    <link rel=\"publisher\" href=\"https://plus.google.com/100231537834041527322\"/>
    ";
        // line 74
        $this->displayBlock('head', $context, $blocks);
        // line 76
        echo "
</head>
<body>
<div id=\"site_container\"";
        // line 79
        if (isset($context["splash"])) { $_splash_ = $context["splash"]; } else { $_splash_ = null; }
        if ($_splash_) {
            echo " style=\"display: none\"";
        }
        echo ">
<div class=\"j-image\">
    <div class=\"slider-wrapper theme-default\">
        <div class=\"ribbon\"></div>
        <div class=\"nivoSlider\" id=\"header\">
         ";
        // line 84
        if (isset($context["slider_items"])) { $_slider_items_ = $context["slider_items"]; } else { $_slider_items_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_slider_items_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 85
            echo "        <img style=\"display:block\" title=\"\" alt=\"\" border=\"0\" height=\"422\" width=\"1500\" src=\"";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "image"), "html", null, true);
            echo "\">
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 87
        echo "        </div>
    </div>
</div>
      <script src=\"/assets/site/eot/scripts/header.js\"></script>
<div id=\"container\">
<div class=\"top\">
    <div class=\"logo\" style=\"float:left\">
        <div class=\"gg-logo\"><a href=\"/\" alt=\"\"><img src=\"/assets/site/eot/images/logo.png\"></a></div>
    </div>
    <div class=\"topmenu\" style=\"float:left\">
        <style></style>
        <div class=\"gg_top_extras\">
            <ul id=\"menu\">
                   ";
        // line 100
        if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_nav_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item1"]) {
            // line 101
            echo "                    <li>
                        <a onmouseover=\"resetSubmenu('menu";
            // line 102
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "')\" class=\"drop\" style=\"cursor:default\"> &nbsp;";
            if (isset($context["item1"])) { $_item1_ = $context["item1"]; } else { $_item1_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item1_, "title"), "html", null, true);
            echo "&nbsp; </a>

                        <div class=\"dropdown_2columns align_right\">
                            <div class=\"col_1\">
                                <ul class=\"simple\">
                                    ";
            // line 107
            if (isset($context["item1"])) { $_item1_ = $context["item1"]; } else { $_item1_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_item1_, "items"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item2"]) {
                // line 108
                echo "                                        <li onmouseover=\"enableSubmenu('menu";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                echo "', '";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
                echo "')\" id=\"limenu1";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
                echo "\">
                                            <a href=\"";
                // line 109
                if (isset($context["item2"])) { $_item2_ = $context["item2"]; } else { $_item2_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item2_, "link"), "html", null, true);
                echo "\">";
                if (isset($context["item2"])) { $_item2_ = $context["item2"]; } else { $_item2_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item2_, "title"), "html", null, true);
                echo "</a>
                                        </li>
                                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item2'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 112
            echo "                                </ul>
                            </div>
                            <div id=\"menu";
            // line 114
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\" class=\"col_1\">
                                ";
            // line 115
            if (isset($context["item1"])) { $_item1_ = $context["item1"]; } else { $_item1_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_item1_, "items"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item2"]) {
                // line 116
                echo "                                    <div style=\"display:none;\" id=\"menu";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
                echo "\">
                                        <ul class=\"simple2\">
                                            ";
                // line 118
                if (isset($context["item2"])) { $_item2_ = $context["item2"]; } else { $_item2_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_item2_, "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["item3"]) {
                    // line 119
                    echo "                                                <li>
                                                    <a href=\"";
                    // line 120
                    if (isset($context["item3"])) { $_item3_ = $context["item3"]; } else { $_item3_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item3_, "link"), "html", null, true);
                    echo "\">";
                    if (isset($context["item3"])) { $_item3_ = $context["item3"]; } else { $_item3_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item3_, "title"), "html", null, true);
                    echo "</a>
                                                </li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item3'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 123
                echo "                                        </ul>
                                    </div>
                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item2'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 126
            echo "                            </div>
                        </div>
                    </li>
                  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item1'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 130
        echo "            </ul>
        </div>

    </div>
</div>
<!--vgn-portal:includeStyle friendlyID=\"page_controls\"/-->

<div id=\"page_container\">
<div id=\"page_row_1\">
    <div id=\"panel_1\" style=\"float:left;\">
    </div>
    <div id=\"panel_2\" style=\"float:left;\">
    </div>
</div>
<div id=\"page_row_2\">
    <div id=\"panel_1\" style=\"float:left;\">
    </div>
</div>
<div id=\"page_row_3\">
<div id=\"panel_1\" style=\"float:left;\">
<div class=\"portlet_1\">
    <div class=\"main_banner\" style=\"padding-top:46px;\">
    ";
        // line 152
        if (isset($context["banner_items"])) { $_banner_items_ = $context["banner_items"]; } else { $_banner_items_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_banner_items_);
        foreach ($context['_seq'] as $context["_key"] => $context["item2"]) {
            // line 153
            echo "    <a target=\"_self\" href=\"";
            if (isset($context["item2"])) { $_item2_ = $context["item2"]; } else { $_item2_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item2_, "url"), "html", null, true);
            echo "\"><img src=\"";
            if (isset($context["item2"])) { $_item2_ = $context["item2"]; } else { $_item2_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item2_, "image"), "html", null, true);
            echo "\"></a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item2'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 155
        echo "    </div>
    </div>


       ";
        // line 159
        $this->displayBlock('content', $context, $blocks);
        // line 161
        echo "
      </div></div></div>
<div id=\"panel_2\" style=\"float:left;\">
<div class=\"portlet_1\">
    <div class=\"gg_right-area-open\">
        <img src=\"/assets/site/eot/images/open-right-area.png\">
    </div>
</div>

<div class=\"portlet_2\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/site/ggSearchPortlet/include/styles.css\"/>
    <div class=\"gg_right-area-content\">
        <div class=\"gg_search_lang\">
            <div class=\"gg_search\">
                <form name=\"searchForm\" method=\"post\" action=\"/search\">
                    <input type=\"text\" name=\"search_string\" value=\"&nbsp;Поиск\" onfocus=\"if(this.value=='&nbsp;Поиск'){this.value=''}; return false;\"/>
                    <input type=\"image\" src=\"/assets/site/ggSearchPortlet/images/btn-search.png\"/>
                </form>
            </div>

            <div class=\"gg_language\"> <a href=\"http://www.visitgreece.gr/\"><img
                            src=\"/assets/site/eot/images/flag-en.jpg\"></a></div>
        </div>
    </div>


</div>

<div class=\"portlet_3\">
    <div class=\"gg_right-area-content\">
        <div class=\"gg_right-area-social\">
            <h1>Общение и обмен<br /> впечатлениями</h1>

            <div style=\"height:50px;padding:10px 0;text-align:center;margin:0 22px;\">

           <!---       <div style=\"float:left;padding:4px 6px\">
                    <a href=\"https://plus.google.com/100231537834041527322?prsrc=3\" target=\"_blank\"
                       style=\"border:none;color:#656565;text-decoration:none;font-family:Verdana,Arial,Tahoma,'Trebuchet MS',GRHelvetica;font-size:13px;\"><img style=\"border:none;\"
                                                                                                                                                               src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/g+.png\"/></a>
                </div>
                <div style=\"float:left;padding:4px 6px;\">
                    <a href=\"http://twitter.com/visitgreecegr\" target=\"_blank\"
                       style=\"border:none;color:#656565;text-decoration:none;font-family:Verdana,Arial,Tahoma,'Trebuchet MS',GRHelvetica;font-size:13px;\"><img style=\"border:none;\"
                                                                                                                                                               src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/tw.png\"/></a>
                </div>    --->
              <div style=\"float:left;padding:4px 6px;\">
                    <a href=\"https://www.facebook.com/visitgreeceru\" target=\"_blank\"
                       style=\"border:none;color:#656565;text-decoration:none;font-family:Verdana,Arial,Tahoma,'Trebuchet MS',GRHelvetica;font-size:13px;\"><img style=\"border:none;\"
                                                                                                                                                               src=\"/assets/site/deployedFiles/StaticFiles/Photos/fb.jpg\"/></a>
                </div>
                  <div style=\"float:left;padding:4px 6px;\">
                    <a href=\"https://vk.com/visitgreeceru\" target=\"_blank\"
                       style=\"border:none;color:#656565;text-decoration:none;font-family:Verdana,Arial,Tahoma,'Trebuchet MS',GRHelvetica;font-size:13px;\"><img style=\"border:none;\"
                                                                                                                                                               src=\"/assets/site/deployedFiles/StaticFiles/Photos/vk.png\"/></a>
                </div>

         <!---             <div style=\"float:left;padding:4px 6px;\">
                    <a href=\"http://www.youtube.com/visitgreecegr\" target=\"_blank\"
                       style=\"border:none;color:#656565;text-decoration:none;font-family:Verdana,Arial,Tahoma,'Trebuchet MS',GRHelvetica;font-size:13px;\"><img style=\"border:none;\"
                                                                                                                                                               src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/utube.png\"/></a>
                </div>
                <div class=\"clear\"></div>
                <div style=\"float:left; padding: 4px 6px;\">
                    <a href=\"http://www.flickr.com/groups/visitgreecegr/\" target=\"_blank\"
                       style=\"border:none;color:#656565;text-decoration:none;font-family:Verdana,Arial,Tahoma,'Trebuchet MS',GRHelvetica;font-size:13px;\"><img style=\"border:none;\"
                                                                                                                                                               src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/fr.png\"/></a>
                </div>
          <div style=\"float:left;padding:4px 6px;\">
                    <a href=\"http://foursquare.com/visitgreecegr\" target=\"_blank\"
                       style=\"border:none;color:#656565;text-decoration:none;font-family:Verdana,Arial,Tahoma,'Trebuchet MS',GRHelvetica;font-size:13px;\"><img style=\"border:none;\"
                                                                                                                                                               src=\"/assets/site/deployedFiles/StaticFiles/foursquare.png\"/></a>
                </div>      --->
                <div style=\"float:left;padding:4px 6px;\">
                    <a href=\"http://pinterest.com/visitgreecegr/\" target=\"_blank\"
                       style=\"border:none;color:#656565;text-decoration:none;font-family:Verdana,Arial,Tahoma,'Trebuchet MS',GRHelvetica;font-size:13px;\"><img style=\"border:none;\"
                                                                                                                                                               src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/pinterest.png\"
                                                                                                                                                               width=\"31\" height=\"31\"
                                                                                                                                                               alt=\"Follow Me on Pinterest\"/></a>
                </div>
                <div style=\"float:left;padding:4px 6px;\">
                    <a href=\"http://instagram.com/visitgreeceru\" target=\"_blank\"
                       style=\"border:none;color:#656565;text-decoration:none;font-family:Verdana,Arial,Tahoma,'Trebuchet MS',GRHelvetica;font-size:13px;\"><img style=\"border:none;\"
                                                                                                                                                               src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/instagram.png\"
                                                                                                                                                               width=\"31\" height=\"31\"
                                                                                                                                                               alt=\"Follow Me on Instagram\"/></a>
                </div>

            </div>
        </div>

        <div class=\"gg_txt_social_line\"><img src=\"/assets/site/eot/images/dot-social.png\"></div>
        <div class=\"gg_txt_download\">
            <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
                <tbody>
                <tr>
                    <td><img src=\"/assets/site/eot/images/img-banners.png\"></td>
                    <td><a href=\"/banneri.html\">Баннеры</a></td>
                </tr>
                <tr>
                    <td><img src=\"/assets/site/eot/images/img-wallpapers.png\"></td>
                    <td><a href=\"/wallpapers.html\">Обои для рабочего стола</a></td>
                </tr>
                <tr>
                    <td><img src=\"/assets/site/eot/images/img-guides.png\"></td>
                    <td><a href=\"/guides.html\">Путеводители</a></td>
                </tr>
                <tr>
                    <td><img src=\"/assets/site/eot/images/img-brochures.png\"></td>
                    <td><a href=\"/brochures.html\">Брошюры</a></td>
                </tr>
                <tr>
                    <td><img src=\"/assets/site/eot/images/img-maps.png\"></td>
                    <td><a href=\"/maps.html\">Карты</a></td>
                </tr>
                <tr>
                    <td><img src=\"/assets/site/eot/images/img-newsletter.png\"></td>
                    <td><a href=\"/newsletter/\">Подписка на рассылку новостей</a></td>
                </tr>
                     <tr>
                    <td><img src=\"/assets/site/eot/images/img-newsletter.png\"></td>
                    <td><a href=\"/contacts/\">Контакты</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class=\"gg_right-area-content\">
         ";
        // line 288
        if (isset($context["bannerright_items"])) { $_bannerright_items_ = $context["bannerright_items"]; } else { $_bannerright_items_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_bannerright_items_);
        foreach ($context['_seq'] as $context["_key"] => $context["item4"]) {
            // line 289
            echo "    <a href=\"";
            if (isset($context["item4"])) { $_item4_ = $context["item4"]; } else { $_item4_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item4_, "url"), "html", null, true);
            echo "\" target=\"_blank\">
    <img src=\"";
            // line 290
            if (isset($context["item4"])) { $_item4_ = $context["item4"]; } else { $_item4_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item4_, "image"), "html", null, true);
            echo "\" style=\"padding-left:7px; padding-bottom:7px\"/>
    </a>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item4'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 293
        echo "    </p>
        <p></div>
    <div class=\"gg_right-area-content\">
         ";
        // line 296
        if (isset($context["bannerright2_items"])) { $_bannerright2_items_ = $context["bannerright2_items"]; } else { $_bannerright2_items_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_bannerright2_items_);
        foreach ($context['_seq'] as $context["_key"] => $context["item5"]) {
            // line 297
            echo "    <a href=\"";
            if (isset($context["item5"])) { $_item5_ = $context["item5"]; } else { $_item5_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item5_, "url"), "html", null, true);
            echo "\" target=\"_blank\">
    <img src=\"";
            // line 298
            if (isset($context["item5"])) { $_item5_ = $context["item5"]; } else { $_item5_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item5_, "image"), "html", null, true);
            echo "\" style=\"padding-left:7px; padding-bottom:7px\"/>
    </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item5'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 301
        echo "        </p>
        <p></div>
</div>

<div class=\"portlet_4\">
    <div class=\"gg_right-area-content\">
        <div class=\"gg_map\"><h1>Исследуйте Грецию по регионам:</h1>
            <div class=\"gg_img_map\" id=\"flashMapOfGreeceDiv\"><embed width=\"100%\" height=\"310\" src=\"/assets/site/eot/flash/cs/map.swf?xmlName=/assets/site/eot/flash/cs/countries&amp;langid=en&amp;vcmId=\" quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" play=\"true\" loop=\"true\" scale=\"exactfit\" wmode=\"normal\" devicefont=\"false\" bgcolor=\"red\" name=\"map\" menu=\"true\" allowfullscreen=\"false\" allowscriptaccess=\"sameDomain\" salign=\"\" type=\"application/x-shockwave-flash\"> </div>
        </div>
    </div>
 <noscript>To use this utility you need to enable javascript.</noscript>
</div>

<div class=\"portlet_5\">
    <div class=\"gg_right-area-content\">
        <div class=\"gg_activity\">
            <h1>Исследуйте Грецию по интересам:</h1>

            <div class=\"txt_activity\">
                <div><a href=\"/sections/culture.html\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/culture.png\"/>
                        <span>Культура</span></a>
                </div>
                <div><a href=\"/sections/leisure.html\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/leisure.png\"/>
                        <span>Отдых</span></a>
                </div>
                <div><a href=\"/sections/touring.html\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/touring.png\"/>
                        <span>Пешие прогулки</span></a>
                </div>
                <div><a href=\"/sections/gastronomy.html\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/gastronomy.png\"/>
                        <span>Гастрономия</span></a>
                </div>
                <div><a href=\"/sections/activities.html\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/activities.png\"/>
                        <span>Занятия</span></a>
                </div>
                <div><a href=\"/sections/religion.html\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/religious.png\"/>
                        <span>Религия</span></a>
                </div>
                <div><a href=\"/sections/meetings_and_incentives.html\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/meetings.png\"/>
                        <span>Деловые встречи</span></a>
                </div>
                <div><a href=\"/sections/citybreak.html\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/citybreaks.png\"/>
                        <span>Городской отдых</span></a>
                </div>
            </div>
        </div>
        <div class=\"clear\"></div>
        <div class=\"gg_info\">
            <h1>Полезная информация:</h1>

            <div class=\"txt_info\">
                <div><a href=\"/sections/travelling_to_greece.html\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/traveling.png\"/>
                        <span>Путешествие в Грецию</span></a>
                </div>
                <div><a href=\"/articles/general_info/zdorove_i_bezopasnost.html\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/safety.png\"/>
                        <span>Безопасность и здоровье</span></a>
                </div>
                <div><a href=\"/sections/passports_and_visas.html\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/visas.png\"/>
                        <span>Паспорта и визы</span></a>
                </div>
                <div><a href=\"/sections/weather.html\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/weather.png\"/>
                        <span>Погода</span></a>
                </div>
                <div><a href=\"/articles/general_info/chasto_zadavaemie_voprosi_turista_faq.html\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/protection.png\"/>
                        <span>Советы</span></a>
                </div>
                <div><a href=\"/events/\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/calendar.png\"/>
                        <span>Календарь</span></a>
                </div>
            </div>
        </div>
        <div class=\"clear\"></div>
    </div>
</div>

<div class=\"portlet_6\">
    <div class=\"gg_right-area-close\"><img src=\"/assets/site/eot/images/close-right-area.png\"></div>
</div>

</div>
</div>
</div>
</div>
<div id=\"holder-bottom\">
    <div id=\"container\">
        <div id=\"page_row_4\">
            <div id=\"panel_1\">
                <div class
                \"portlet_1\"=\"\">

                <style></style>
                <div class=\"gg_bottom_extras\">
                    <div class=\"gg_bottom_extras_links1\">Быстрые ссылки »</div>


                    <div class=\"gg_bottom_extras_links2\"><span>Куда отправиться</span><br>
                        <a href=\"/sections/greek_islands.html\">Греческие острова</a>
                        <a href=\"/sections/main_cities.html\">Главные города</a>
                         <a href=\"/articles/main_cities/athens.html\">Афины</a>
                          <a href=\"/articles/main_cities/thessaloniki.html\">Салоники</a>
                        <a href=\"/sections/crete.html\">Крит</a>
                        <a href=\"/sections/cyclades.html\">Киклады</a>
                        <a href=\"/sections/ionicheskie_ostrova.html\">Ионические острова</a> <a href=\"/sections/dodekanes.html\">Додеканес</a>
                          <!---       <a href=\"http://www.visitgreece.gr/en/destinations/peloponnese\">Пелопоннес</a>----></div>

                    <div class=\"gg_bottom_extras_links2\"><span>Специальные функции</span><br>
                        <a href=\"en/you_in_greece\">Ты в Греции</a>
                        <a href=\"en/downloads\">Загрузки</a>
                         <a href=\"/brochures.html\">Брошюры</a> <a href=\"/maps.html\">Карты</a> <a
                                href=\"/newsletter\">Новостная рассылка</a></div>

                    <div class=\"gg_bottom_extras_links2\"><span>Информация для путешественников</span><br>
                        <a href=\"/sections/before_you_travel.html\">Прежде чем отправиться в путь</a>
                         <a href=\"/sections/accommodation.html\">Размещение</a>
                          <a href=\"/articles/general_info/chasto_zadavaemie_voprosi_turista_faq.html\">FAQ для путешественников</a> <a
                                href=\"/sections/general_info.html\">Основная информация</a>
                                 <a href=\"/sections/weather.html\">Погода</a>
                                  <a href=\"/articles/general_info/bezopasnost_turistov.html\">Защита туристов</a></div>

                    <div class=\"gg_bottom_extras_links2\"><span>Чем заняться и что посмотреть</span><br>
                        <a href=\"/sections/museums.html\">Музеи</a> <a href=\"/sections/archaeological_sites.html\">Археологические раскопки</a>
                         <a href=\"/sections/religion.html\">Религиозный туризм</a>
                         <a href=\"/articles/water_sports/parusniy_sport.html\">Морские прогулки</a>
                                 <a href=\"/sections/wellness.html\">Уход и здоровье</a>
                                  <a href=\"/sections/touring.html\">Пешие прогулки</a> <a href=\"/sections/gastronomy.html\">Кухня</a>
                    </div>

                    <div style=\" clear: both;\">&nbsp;</div>
                </div>

                <p>Gnto.ru – официальный сайт туристической информации о Греции, поддерживаемый Греческой национальной туристической организацией. На этой странице вы найдете информацию о важнейших туристических направлениях – городах, островах, пляжах, а также о разнообразии занятий, организуемых мероприятий и праздников и многом другом! </p>
            </div>
        </div>
    </div>
    <div id=\"page_row_5\">
        <div id=\"panel_1\">
            <div class=\"portlet_1\">
                <div class=\"gg_footer_logo\"><img src=\"/assets/site/eot/images/logo-footer.png\"></div>
            </div>
        </div>
    </div>
    <div id=\"page_row_6\">
        <div id=\"panel_1\">
            <div class=\"portlet_1\">

                <style></style>
                <div class=\"gg_extras_bottom\"> <a href=\"/about_us.html\">О нас</a>
                                              | <a href=\"/gnto_offices_abroad.html\">Офисы ГНТО за рубежом</a>
                                              | <a href=\"/advertising_campaigns.html\">Реклама</a><br>
                  \t\t\t\t\t\t\t  <a href=\"/links.html\">Ссылки</a>
                 \t\t\t\t\t\t\t  | <a href=\"#\">Карта сайта</a>
                \t\t\t\t\t\t      | <a href=\"/contacts/\">Контакты</a></div>

                <p>Все материалы этого сайта представляют интеллектуальную собственность Греческой национальной туристической организации и не разрешены к использованию и распространению частично или полностью без письменного на то разрешения от Греческой национальной туристической организации. &nbsp;<br>
                    Для подробной информации обратитесь, пожалуйста, по адресу:&nbsp;<a href=\"mailto:info@gnto.ru?subject=copyright\">info@gnto.ru</a>&nbsp;&nbsp;&nbsp;&nbsp;Все права защищены. GNTO © 2013.</p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-----  Разработано в Лондоне london-adv.ru и 4sol.pro by Komarov Maksim ------>
</body>
</html>






";
    }

    // line 74
    public function block_head($context, array $blocks = array())
    {
        // line 75
        echo "    ";
    }

    // line 159
    public function block_content($context, array $blocks = array())
    {
        // line 160
        echo "    ";
    }

    public function getTemplateName()
    {
        return "site/site.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  741 => 160,  738 => 159,  734 => 75,  731 => 74,  544 => 301,  534 => 298,  528 => 297,  523 => 296,  518 => 293,  508 => 290,  502 => 289,  497 => 288,  368 => 161,  366 => 159,  360 => 155,  347 => 153,  342 => 152,  318 => 130,  301 => 126,  285 => 123,  272 => 120,  269 => 119,  264 => 118,  255 => 116,  237 => 115,  232 => 114,  228 => 112,  207 => 109,  195 => 108,  177 => 107,  165 => 102,  162 => 101,  144 => 100,  129 => 87,  119 => 85,  114 => 84,  103 => 79,  98 => 76,  96 => 74,  21 => 1,);
    }
}
