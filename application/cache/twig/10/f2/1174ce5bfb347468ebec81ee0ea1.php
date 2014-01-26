<?php

/* site/site.twig */
class __TwigTemplate_10f21174ce5bfb347468ebec81ee0ea1 extends Twig_Template
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

\t\t\t})


\t\t</script>

    <link rel=\"publisher\" href=\"https://plus.google.com/100231537834041527322\"/>
    ";
        // line 64
        $this->displayBlock('head', $context, $blocks);
        // line 66
        echo "
</head>
<body>
<div id=\"site_container\"";
        // line 69
        if ((isset($context["splash"]) ? $context["splash"] : null)) {
            echo " style=\"display: none\"";
        }
        echo ">
<div class=\"j-image\">
    <div class=\"slider-wrapper theme-default\">
        <div class=\"ribbon\"></div>
        <div class=\"nivoSlider\" id=\"header\">
         ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slider_items"]) ? $context["slider_items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 75
            echo "        <img style=\"display:block\" title=\"\" alt=\"\" border=\"0\" height=\"422\" width=\"1500\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "image"), "html", null, true);
            echo "\">
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 77
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
        // line 90
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
            // line 91
            echo "                    <li>
                        <a onmouseover=\"resetSubmenu('menu";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "')\" class=\"drop\" style=\"cursor:default\"> &nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item1"]) ? $context["item1"] : null), "title"), "html", null, true);
            echo "&nbsp; </a>

                        <div class=\"dropdown_2columns align_right\">
                            <div class=\"col_1\">
                                <ul class=\"simple\">
                                    ";
            // line 97
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
                // line 98
                echo "                                        <li onmouseover=\"enableSubmenu('menu";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "parent"), "loop"), "index"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "')\" id=\"limenu1";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "\">
                                            <a href=\"";
                // line 99
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
            // line 102
            echo "                                </ul>
                            </div>
                            <div id=\"menu";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\" class=\"col_1\">
                                ";
            // line 105
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
                // line 106
                echo "                                    <div style=\"display:none;\" id=\"menu";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "parent"), "loop"), "index"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo "\">
                                        <ul class=\"simple2\">
                                            ";
                // line 108
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item2"]) ? $context["item2"] : null), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["item3"]) {
                    // line 109
                    echo "                                                <li>
                                                    <a href=\"";
                    // line 110
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
                // line 113
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
            // line 116
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
        // line 120
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
        // line 142
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banner_items"]) ? $context["banner_items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item2"]) {
            // line 143
            echo "    <a target=\"_self\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item2"]) ? $context["item2"] : null), "url"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item2"]) ? $context["item2"] : null), "image"), "html", null, true);
            echo "\"></a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item2'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 145
        echo "    </div>
    </div>


       ";
        // line 149
        $this->displayBlock('content', $context, $blocks);
        // line 151
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
        // line 278
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bannerright_items"]) ? $context["bannerright_items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item4"]) {
            // line 279
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item4"]) ? $context["item4"] : null), "url"), "html", null, true);
            echo "\" target=\"_blank\">
    <img src=\"";
            // line 280
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item4"]) ? $context["item4"] : null), "image"), "html", null, true);
            echo "\" style=\"padding-left:7px; padding-bottom:7px\"/>
    </a>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item4'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 283
        echo "    </p>
        <p></div>
    <div class=\"gg_right-area-content\">
         ";
        // line 286
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bannerright2_items"]) ? $context["bannerright2_items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item5"]) {
            // line 287
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item5"]) ? $context["item5"] : null), "url"), "html", null, true);
            echo "\" target=\"_blank\">
    <img src=\"";
            // line 288
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item5"]) ? $context["item5"] : null), "image"), "html", null, true);
            echo "\" style=\"padding-left:7px; padding-bottom:7px\"/>
    </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item5'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 291
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
                        <a href=\"en/you_in_greece\">Вы в Греции</a>
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
                                  <a href=\"/sections/touring.html\">Пешие прогулки</a> <a href=\"/sections/gastronomy.html\">Гастрономия</a>
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
</body>
</html>





";
    }

    // line 64
    public function block_head($context, array $blocks = array())
    {
        // line 65
        echo "    ";
    }

    // line 149
    public function block_content($context, array $blocks = array())
    {
        // line 150
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
        return array (  701 => 150,  698 => 149,  694 => 65,  691 => 64,  506 => 291,  497 => 288,  492 => 287,  488 => 286,  483 => 283,  474 => 280,  469 => 279,  465 => 278,  336 => 151,  334 => 149,  328 => 145,  317 => 143,  313 => 142,  289 => 120,  272 => 116,  256 => 113,  245 => 110,  242 => 109,  238 => 108,  231 => 106,  214 => 105,  210 => 104,  206 => 102,  187 => 99,  178 => 98,  161 => 97,  151 => 92,  148 => 91,  131 => 90,  116 => 77,  107 => 75,  103 => 74,  93 => 69,  88 => 66,  86 => 64,  21 => 1,);
    }
}
