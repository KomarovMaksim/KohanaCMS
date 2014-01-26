<?php

/* site/site.twig */
class __TwigTemplate_b698d5a31ab0d4af8c2cd10b229f9afa extends Twig_Template
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

    <!-- find and show title -->
    <meta property=\"og:title\" content=\"Visit Greece | Culture\"/>
    <meta property=\"og:type\" content=\"article \"/>
    <meta property=\"og:site_name\" content=\"Visit Greece | The Official website of the Greek Tourism Organisation\"/>
    <meta property=\"og:description\"
          content=\"Discover Greece’s rich cultural tradition in the fine and popular arts and explore timeless works of drama, architecture, hagiography, painting and more \"/>
    <meta property=\"og:image\" content=\"http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Museums_510.jpg\"/>
    <meta name=\"description\" content=\"Discover Greece’s rich cultural tradition in the fine and popular arts and explore timeless works of drama, architecture, hagiography, painting and more \"/>
    <meta name=\"keywords\" content=\"culture, greece, museums, monuments, world heritage sites, archaeological sites\"/>

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
\t\t\t\t\$('#slider2').movingBoxes({
\t\t\t\t\t\t\tstartPanel   : 2,
\t\t\t\t\t\t\treducedSize  : 1,
\t\t\t\t\t\t\tfixedHeight  : true,
\t\t\t\t\t\t\twrap         : false,
\t\t\t\t\t\t\tbuildNav     : false,
\t\t\t\t\t\t\tnavFormatter : function(){ return \"&#9679;\"; }
\t\t\t\t})
\t\t\t})
\t\t</script>

    <link rel=\"publisher\" href=\"https://plus.google.com/100231537834041527322\"/>
    ";
        // line 70
        $this->displayBlock('head', $context, $blocks);
        // line 72
        echo "
</head>
<body>
<div id=\"site_container\"";
        // line 75
        if ((isset($context["splash"]) ? $context["splash"] : null)) {
            echo " style=\"display: none\"";
        }
        echo ">
<div class=\"j-image\">
    <div class=\"slider-wrapper theme-default\">
        <div class=\"ribbon\"></div>
        <div class=\"nivoSlider\" id=\"header\">
         ";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slider_items"]) ? $context["slider_items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 81
            echo "        <img style=\"display:block\" title=\"\" alt=\"\" border=\"0\" height=\"422\" width=\"1500\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "image"), "html", null, true);
            echo "\">
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 83
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
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nav"]) ? $context["nav"] : null));
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
            // line 97
            echo "                    <li>
                        <a onmouseover=\"resetSubmenu('menu";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "')\" class=\"drop\" style=\"cursor:default\"> &nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item1"]) ? $context["item1"] : null), "title"), "html", null, true);
            echo "&nbsp; </a>

                        <div class=\"dropdown_2columns align_right\">
                            <div class=\"col_1\">
                                <ul class=\"simple\">
                                    ";
            // line 103
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item1"]) ? $context["item1"] : null), "items"));
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
                // line 104
                echo "                                        <li onmouseover=\"enableSubmenu('menu";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "parent"), "loop"), "index"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "')\" id=\"limenu1";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "\">
                                            <a href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item2"]) ? $context["item2"] : null), "link"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item2"]) ? $context["item2"] : null), "title"), "html", null, true);
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
            // line 108
            echo "                                </ul>
                            </div>
                            <div id=\"menu";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\" class=\"col_1\">
                                ";
            // line 111
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item1"]) ? $context["item1"] : null), "items"));
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
                // line 112
                echo "                                    <div style=\"display:none;\" id=\"menu1";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "\">
                                        <ul class=\"simple2\">
                                            ";
                // line 114
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item2"]) ? $context["item2"] : null), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["item3"]) {
                    // line 115
                    echo "                                                <li>
                                                    <a href=\"";
                    // line 116
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item3"]) ? $context["item3"] : null), "link"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item3"]) ? $context["item3"] : null), "title"), "html", null, true);
                    echo "</a>
                                                </li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item3'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 119
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
            // line 122
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
        // line 126
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
    <div class=\"main_banner\" style=\"\t\t\t\t\t\tpadding-top:46px;\t\t\t\t\t\"><a target=\"_self\" href=\"http://blog.visitgreece.gr/\"><img title=\"visitgreece.blog.gr\"
                                                                                                                                                             alt=\"visitgreece.blog.gr\"
                                                                                                                                                             src=\"/assets/site/deployedFiles/StaticFiles/Banners/banner_to_blog_en.png\"></a>
    </div>
    </div>


       ";
        // line 153
        $this->displayBlock('content', $context, $blocks);
        // line 155
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
            <script type=\"text/javascript\">
                greekPage = function () {
                    location.href = '/el' + location.pathname.substring(3) + location.search;
                }
                englishPage = function () {
                    location.href = '/en' + location.pathname.substring(3) + location.search;
                }

            </script>
            <div class=\"gg_language\"> <a href=\"http://www.visitgreece.gr/\"><img
                            src=\"/assets/site/eot/images/flag-en.jpg\"></a></div>
        </div>
    </div>


</div>

<div class=\"portlet_3\">
    <div class=\"gg_right-area-content\">
        <div class=\"gg_right-area-social\">
            <h1>connect and experience</h1>

            <div style=\"height:50px;padding:10px 0;text-align:center;margin:0 22px;\">
                 <!----
                <div style=\"float:left;padding:4px 6px\">
                    <a href=\"https://plus.google.com/100231537834041527322?prsrc=3\" target=\"_blank\"
                       style=\"border:none;color:#656565;text-decoration:none;font-family:Verdana,Arial,Tahoma,'Trebuchet MS',GRHelvetica;font-size:13px;\"><img style=\"border:none;\"
                                                                                                                                                               src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/g+.png\"/></a>
                </div>
                <div style=\"float:left;padding:4px 6px;\">
                    <a href=\"http://twitter.com/visitgreecegr\" target=\"_blank\"
                       style=\"border:none;color:#656565;text-decoration:none;font-family:Verdana,Arial,Tahoma,'Trebuchet MS',GRHelvetica;font-size:13px;\"><img style=\"border:none;\"
                                                                                                                                                               src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/tw.png\"/></a>
                </div>
                <div style=\"float:left;padding:4px 6px;\">
                    <a href=\"http://www.facebook.com/visitgreecegr\" target=\"_blank\"
                       style=\"border:none;color:#656565;text-decoration:none;font-family:Verdana,Arial,Tahoma,'Trebuchet MS',GRHelvetica;font-size:13px;\"><img style=\"border:none;\"
                                                                                                                                                               src=\"/assets/site/deployedFiles/StaticFiles/Photos/fb.jpg\"/></a>
                </div>
                <div style=\"float:left;padding:4px 6px;\">
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
                </div>
                <div style=\"float:left;padding:4px 6px;\">
                    <a href=\"http://pinterest.com/visitgreecegr/\" target=\"_blank\"
                       style=\"border:none;color:#656565;text-decoration:none;font-family:Verdana,Arial,Tahoma,'Trebuchet MS',GRHelvetica;font-size:13px;\"><img style=\"border:none;\"
                                                                                                                                                               src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/pinterest.png\"
                                                                                                                                                               width=\"31\" height=\"31\"
                                                                                                                                                               alt=\"Follow Me on Pinterest\"/></a>
                </div>
                <div style=\"float:left;padding:4px 6px;\">
                    <a href=\"http://instagram.com/visitgreecegr\" target=\"_blank\"
                       style=\"border:none;color:#656565;text-decoration:none;font-family:Verdana,Arial,Tahoma,'Trebuchet MS',GRHelvetica;font-size:13px;\"><img style=\"border:none;\"
                                                                                                                                                               src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/instagram.png\"
                                                                                                                                                               width=\"31\" height=\"31\"
                                                                                                                                                               alt=\"Follow Me on Instagram\"/></a>
                </div>
                      ---->
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
                    <td><a href=\"en/gnto/newsletter\">Подписка на рассылку новостей</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class=\"gg_right-area-content\"><a href=\"http://www.gr2014.eu/\" target=\"_blank\"><img src=\"/assets/site/deployedFiles/StaticFiles/Banners/banner_proedria_225x182.png\"
                                                                                            style=\"padding-left:7px; padding-bottom:7px\"/></a></p>
        <p></div>
    <div class=\"gg_right-area-content\"><a href=\"http://www.my-greece.gr/en\" target=\"_blank\"><img src=\"/assets/site/deployedFiles/StaticFiles/Banners/my-greece-banner.png\"
                                                                                                 alt=\"MyGreece\" title=\"MyGreece\" style=\"padding-left:7px; padding-bottom:7px\"/></a>
        </p>
        <p></div>
</div>

<div class=\"portlet_4\">
    <div class=\"gg_right-area-content\">
        <div class=\"gg_map\"><h1>Исследуйте Грецию по регионам:</h1>

            <div class=\"gg_img_map\" id=\"flashMapOfGreeceDiv\"></div>
        </div>
    </div>
    <script type=\"text/javascript\">            BASE_URL = '/en/search_by_location';
        var embedFlash = function () {
            embedFlashMap('flashMapOfGreeceDiv', '', 'en');
        };
        registerLoadTask(embedFlash, 1);        </script>
    <noscript>To use this utility you need to enable javascript.</noscript>
</div>

<div class=\"portlet_5\">
    <div class=\"gg_right-area-content\">
        <div class=\"gg_activity\">
            <h1>Исследуйте Грецию по интересам:</h1>

            <div class=\"txt_activity\">
                <div><a href=\"en/culture\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/culture.png\"/>
                        <span>Culture</span></a>
                </div>
                <div><a href=\"en/leisure\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/leisure.png\"/>
                        <span>Leisure</span></a>
                </div>
                <div><a href=\"en/touring\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/touring.png\"/>
                        <span>Touring</span></a>
                </div>
                <div><a href=\"en/gastronomy\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/gastronomy.png\"/>
                        <span>Gastronomy</span></a>
                </div>
                <div><a href=\"en/activities\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/activities.png\"/>
                        <span>Activities</span></a>
                </div>
                <div><a href=\"en/religion\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/religious.png\"/>
                        <span>Religious</span></a>
                </div>
                <div><a href=\"en/meetings_and_incentives\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/meetings.png\"/>
                        <span>Meetings</span></a>
                </div>
                <div><a href=\"en/citybreak\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/citybreaks.png\"/>
                        <span>City Break</span></a>
                </div>
            </div>
        </div>
        <div class=\"clear\"></div>
        <div class=\"gg_info\">
            <h1>Полезная информация:</h1>

            <div class=\"txt_info\">
                <div><a href=\"en/travelling_to_greece\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/traveling.png\"/>
                        <span>Travelling to Greece</span></a>
                </div>
                <div><a href=\"en/before_you_travel/health_and_safety\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/safety.png\"/>
                        <span>Health &amp; Safety</span></a>
                </div>
                <div><a href=\"en/before_you_travel/passports_and_visas\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/visas.png\"/>
                        <span>Passports &amp; Visas</span></a>
                </div>
                <div><a href=\"en/weather\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/weather.png\"/>
                        <span>Weather</span></a>
                </div>
                <div><a href=\"en/before_you_travel/travel_tips\">
                        <img src=\"/assets/site//assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/protection.png\"/>
                        <span>Travel Tips</span></a>
                </div>
                <div><a href=\"en/events\">
                        <img src=\"/assets/site/deployedFiles/StaticFiles/Photos/icons/explore-info/calendar.png\"/>
                        <span>Calendar</span></a>
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
                    <div class=\"gg_bottom_extras_links1\">Quick links »</div>

                    <div class=\"gg_bottom_extras_links2\"><span>Where to go</span><br>
                        <a href=\"en/greek_islands\">Greek Islands</a> <a href=\"en/main_cities\">Main Cities</a> <a href=\"en/main_cities/athens\">Athens</a> <a href=\"en/main_cities/thessaloniki\">Thessaloniki</a>
                        <a href=\"en/greek_islands/crete\">Crete</a> <a href=\"en/greek_islands/cyclades\">Cyclades</a> <a href=\"en/greek_islands/ionian_islands\">Ionian Islands</a> <a
                                href=\"en/greek_islands/dodecanese\">Dodecanese</a> <a href=\"http://www.visitgreece.gr/en/destinations/peloponnese\">Peloponnese</a></div>

                    <div class=\"gg_bottom_extras_links2\"><span>Special Features</span><br>
                        <a href=\"en/you_in_greece\">You in Greece</a> <a href=\"en/downloads\">Downloads</a> <a href=\"en/downloads/brochures\">Brochures</a> <a href=\"en/downloads/maps\">Maps</a> <a
                                href=\"en/newsletter\">Newsletter</a></div>

                    <div class=\"gg_bottom_extras_links2\"><span>Travel Information</span><br>
                        <a href=\"en/before_you_travel\">Before you Travel</a> <a href=\"en/accommodation\">Accommodation</a> <a href=\"en/general_info/travel_faqs\">Travel FAQs</a> <a
                                href=\"en/general_info\">General Info</a> <a href=\"en/weather\">Weather</a> <a href=\"en/before_you_travel/tourist_protection_line\">Tourist protection</a></div>

                    <div class=\"gg_bottom_extras_links2\"><span>Things to See &amp; do</span><br>
                        <a href=\"en/culture/museums\">Museums</a> <a href=\"en/culture/archaeological_sites\">Archaeological sites</a> <a href=\"en/religion\">Religious tourism</a> <a
                                href=\"en/activities/water_sports/sailing\">Sailing</a> <a href=\"en/leisure/wellness\">Wellness</a> <a href=\"en/touring\">Touring</a> <a href=\"en/gastronomy\">Gastronomy</a>
                    </div>

                    <div style=\" clear: both;\">&nbsp;</div>
                </div>

                <p>Visitgreece.gr is the official tourism web site for Greece, run by the Greek National Tourism Organisation, where you'll find information on the main tourist destinations, such as
                    cities, beaches, as well as activities, events and much more!</p>
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
                <div class=\"gg_extras_bottom\"> <a href=\"http://www.visitgreece.gr/en/gnto/about_us\">О нас</a>
                                              | <a href=\"http://www.visitgreece.gr/en/contact/gnto_offices_abroad\">Офисы ГНТО за рубежом</a>
                                              | <a href=\"http://www.visitgreece.gr/en/gnto/about_us/advertising_campaigns\">Реклама</a><br>
                  \t\t\t\t\t\t\t  <a href=\"http://www.visitgreece.gr/en/gnto/links\">Ссылки</a>
                 \t\t\t\t\t\t\t  | <a href=\"http://www.visitgreece.gr/en/sitemap\">Карта сайта</a>
                \t\t\t\t\t\t      | <a href=\"http://www.visitgreece.gr/en/contact\">Контакты</a></div>

                <p>All content included on this site consists intellectual property of GNTO and you are not allowed to reproduce the whole or part of this work in any way without the written
                    permission of GNTO.&nbsp;<br>
                    For information please contact:&nbsp;<a href=\"mailto:webmaster@gnto.gr?subject=copyright\">webmaster@gnto.gr</a>&nbsp;&nbsp;&nbsp;&nbsp;All Rights Reserved. GNTO © 2013.</p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>





";
    }

    // line 70
    public function block_head($context, array $blocks = array())
    {
        // line 71
        echo "    ";
    }

    // line 153
    public function block_content($context, array $blocks = array())
    {
        // line 154
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
        return array (  642 => 154,  639 => 153,  635 => 71,  632 => 70,  325 => 155,  323 => 153,  294 => 126,  277 => 122,  261 => 119,  250 => 116,  247 => 115,  243 => 114,  237 => 112,  220 => 111,  216 => 110,  212 => 108,  193 => 105,  184 => 104,  167 => 103,  157 => 98,  154 => 97,  137 => 96,  122 => 83,  113 => 81,  109 => 80,  99 => 75,  94 => 72,  92 => 70,  21 => 1,  180 => 121,  171 => 114,  169 => 113,  74 => 20,  54 => 17,  50 => 16,  42 => 10,  39 => 9,  32 => 4,  29 => 3,);
    }
}
