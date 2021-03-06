<?php

/* site/section.twig */
class __TwigTemplate_e338ef80c5288445b64add3c1409707e extends Twig_Template
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
        echo "    <title>Греция. Вечная Классика | ";
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_section_, "meta_title"), "html", null, true);
        echo "</title>
    <meta name=\"keywords\" content=\"";
        // line 5
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_section_, "meta_keywords"), "html", null, true);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 6
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_section_, "meta_description"), "html", null, true);
        echo "\">
<!-- Put this script tag to the <head> of your page -->
<script type=\"text/javascript\" src=\"//vk.com/js/api/openapi.js?105\"></script>

<script type=\"text/javascript\">
  VK.init({apiId: 4131335, onlyWidgets: true});
</script>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
<div class=\"portlet_2\">
    <style>            div.gg_breadcrumb {
            width: 954px;
            float: left;
            color: #9f9f9f;
            font-size: 10px;
                     margin-top:20px;
        }

        div.gg_breadcrumb span {
            color: #04bff2;
        }

        div.gg_breadcrumb a {
            text-decoration: none;
            color: #9f9f9f;
        }        </style>
   <div class=\"gg_breadcrumb\">
        <a href=\"/\">Главная</a> &nbsp;/&nbsp;
         ";
        // line 36
        if (isset($context["breadcrumbs"])) { $_breadcrumbs_ = $context["breadcrumbs"]; } else { $_breadcrumbs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_breadcrumbs_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 37
            echo "        ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "link")) {
                // line 38
                echo "        <a href=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "link"), "html", null, true);
                echo "\">";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 40
                echo "            <span>";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "</span>
        ";
            }
            // line 42
            echo "        ";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ((!$this->getAttribute($_loop_, "last"))) {
                echo " / ";
            }
            // line 43
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 44
        echo "        </div>
</div>

<div class=\"portlet_3\">
    <style xmlns:urlfunc=\"java.net.URLEncoder\" xmlns:g=\"http://base.google.com/ns/1.0\">            a.geo_results_link, a.geo_results_link:visited {
            font-size: 12px;
            font-weight: bold;
            color: #5f5f5f;
            text-decoration: none;
        }

        a.geo_results_link:hover {
            font-size: 12px;
            font-weight: bold;
            color: #04bff2;
            text-decoration: none;
        }

        div.gg_txt_page {
            /*width:540px;*/
            font-size: 11px;
            font-family: Verdana, Tahoma, Arial;
            padding: 0px 20px 0px 0px;
            float: left; /*color:#6F6F6F;*/
            /*text-align:justify;*/
        }

        div.gg_txt_page a, div.gg_txt_page a:visited {
            font-size: 11px;
            color: #04bff2;
            text-decoration: none;
        }

        div.gg_txt_page a:hover {
            font-size: 11px;
            color: #04bff2;
            text-decoration: none;
        }

        div.gg_txt_page h1 {
            padding: 0px;
            margin: 0px;
            color: #000000;
            font-size: 15px;
            font-weight: normal;
        }

        div.gg_txt_page h2 {
            padding: 0px 0px 10px 0px;
            margin: 0px;
            color: #04bff2;
            font-size: 12px;
            font-weight: normal;
        }

        div.gg_txt_page img {
            padding: 0 8px 0 0;
            border: 0 none;
        }

        div.shareLinks {
            padding-top: 24px;
            min-width: 300px;
            _width: 300px;
            clear: both;
        }

        div.shareLinks img {
            width: 16px;
            height: 16px;
            padding: 0px 5px 0px 5px;
        }        </style>
    <div class=\"gg_txt_page\">


    <h1>";
        // line 119
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_section_, "title"), "html", null, true);
        echo "</h1><br />
    ";
        // line 120
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        echo $this->getAttribute($_section_, "text");
        // line 121
        echo "        <div class=\"shareLinks\"><table><tbody><tr>
    <td><iframe id=\"twitter-widget-0\" scrolling=\"no\" frameborder=\"0\" allowtransparency=\"true\" src=\"http://platform.twitter.com/widgets/tweet_button.1384994725.html#_=1386195314668&amp;count=horizontal&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fwww.visitgreece.gr%2Fen%2Fgeography&amp;size=m&amp;text=Visit%20Greece%20%7C%20Geography&amp;url=http%3A%2F%2Fwww.visitgreece.gr%2Fen%2Fgeography&amp;via=VisitGreecegr\" class=\"twitter-share-button twitter-tweet-button twitter-count-horizontal\" title=\"Twitter Tweet Button\" data-twttr-rendered=\"true\" style=\"width: 110px; height: 20px;\"></iframe><div style=\"width:15px;float:right;\">&nbsp;</div></td>
    <td><div id=\"___plusone_0\" style=\"text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background-position: initial initial; background-repeat: initial initial;\"><iframe frameborder=\"0\" hspace=\"0\" marginheight=\"0\" marginwidth=\"0\" scrolling=\"no\" style=\"position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;\" tabindex=\"0\" vspace=\"0\" width=\"100%\" id=\"I0_1386195314824\" name=\"I0_1386195314824\" src=\"https://apis.google.com/u/0/_/+1/fastbutton?usegapi=1&amp;bsv=o&amp;size=medium&amp;origin=http%3A%2F%2Fwww.visitgreece.gr&amp;url=http%3A%2F%2Fwww.visitgreece.gr%2Fen%2Fgeography&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.ru.ZQGeNOICZqw.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAItRSTM4239lAQe2Y-HSAgMWKoFgBAUpjw#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1386195314824&amp;parent=http%3A%2F%2Fwww.visitgreece.gr&amp;pfname=&amp;rpctoken=16119801\" data-gapiattached=\"true\" title=\"+1\"></iframe></div></td>

      <td>
    <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"//connect.facebook.net/ru_RU/all.js#xfbml=1\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class=\"fb-like\" data-layout=\"button_count\" data-action=\"like\" data-show-faces=\"true\" data-share=\"false\"></div>

      </td>
<td>

<!-- Put this div tag to the place, where the Like block will be -->
<div id=\"vk_like\"></div>
<script type=\"text/javascript\">
VK.Widgets.Like(\"vk_like\", {type: \"button\"});
</script></td>
 </tr></tbody></table></div>
<br /><br />

   <!--- <h2>Ссылки</h2>   --->
        ";
        // line 147
        if (isset($context["links"])) { $_links_ = $context["links"]; } else { $_links_ = null; }
        if ((twig_length_filter($this->env, $_links_) > 0)) {
            // line 148
            echo "   <style>\t\t\t\t\t\tdiv.gg_related_links {\t\t\t\twidth:600px;\t\t\t\tclear:both;\t\t\t\tpadding:20px 0px 0px 0px;\t\t\t}\t\t\t\t\t\tdiv.gg_tlt_related_links {\t\t\t\twidth:140px;\t\t\t\tcolor:#000000;\t\t\t\tfont-size:14px;\t\t\t}\t\t\t\t\t\tdiv.gg_tlt_related_links span{\t\t\t\tcolor:#04bff2;\t\t\t\tfont-size:17px;\t\t\t}\t\t\t\t\t\tdiv.gg_txt_related_links {\t\t\t\twidth:600px;\t\t\t\tpadding:10px 0px 0px 10px;\t\t\t\t\t\t}\t\t\t\t\t\tdiv.gg_txt_related_links_list {\t\t\t\t\t/*width:125px;*/\t\t\t\tcolor:#000000;\t\t\t\tfont-size:9px;\t\t\t\tpadding:0px 0px 16px 0px;\t\t\t}
   \t\t\t\t\tdiv.gg_txt_related_links_list img{\t\t\t\tpadding:0px 0px 6px 0px;\t\t\t}\t\t\t\t\t\t\t\t\tdiv.gg_txt_related_links_list a{\t\t\t\tpadding:0px 10px 0px 0px;\t\t\t\tcolor:#6f6f6f;\t\t\t\tfont-size:10px;\t\t\t\ttext-decoration:none;\t\t\t\tbackground-image:url(/assets/site/eot/images/arrow4.jpg);\t\t\t\tbackground-position:bottom right;\t\t\t\tbackground-repeat:no-repeat;\t\t\t}\t\t</style>
       <div class=\"gg_related_links\">
    <div class=\"gg_tlt_related_links\">Похожие <span>ссылки</span></div>
        ";
            // line 152
            if (isset($context["links"])) { $_links_ = $context["links"]; } else { $_links_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_links_);
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 153
                echo "    <div class=\"gg_txt_related_links\"><div class=\"gg_txt_related_links_list\">";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_link_, "title"), "html", null, true);
                echo "<br>
    <a target=\"_blank\" href=\"";
                // line 154
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_link_, "link"), "html", null, true);
                echo "\">";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_link_, "short_text"), "html", null, true);
                echo "</a></div>
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 156
            echo "    </div>
    </div>
    ";
        }
        // line 159
        echo "
     ";
        // line 160
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        if ((twig_length_filter($this->env, $_articles_) > 0)) {
            // line 161
            echo "    <div class=\"portlet_4\">
\t\t<link type=\"text/css\" href=\"/assets/site/eot/eventsSearch.css\" rel=\"stylesheet\"><table class=\"resultTable\" cellpadding=\"0\" cellspacing=\"0\">
<tbody><tr>
<td class=\"resultTd\"><a class=\"resultLabel\" href=\"#\">Результаты:</a></td>
</tr>
<tr>
<td class=\"resultList\">
  ";
            // line 168
            if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_articles_);
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 169
                echo "

<div class=\"row2\">
<table cellspacing=\"0\" cellpadding=\"0\">
<tbody>
";
                // line 174
                if (isset($context["is_title_tag"])) { $_is_title_tag_ = $context["is_title_tag"]; } else { $_is_title_tag_ = null; }
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                if (($_is_title_tag_ != $this->getAttribute($_article_, "get_tags_titles", array(), "method"))) {
                    // line 175
                    echo "<tr>
  <td colspan=\"2\" class=\"resultTd\" style=\"padding-top: 10px;padding-bottom:5px;font-size:16px\"><span class=\"blue_title\">";
                    // line 176
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_article_, "get_tags_titles", array(), "method"), "html", null, true);
                    echo "</span></td>
</tr>
 ";
                }
                // line 179
                echo " ";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                $context["is_title_tag"] = $this->getAttribute($_article_, "get_tags_titles", array(), "method");
                // line 180
                echo "<tr>
<td class=\"imgTd\">
<a itemprop=\"url\" href=\"";
                // line 182
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "get_url", array(), "method"), "html", null, true);
                echo "\">
<img height=\"60px\" width=\"85px\" title=\" ";
                // line 183
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                if ((!$this->getAttribute($_article_, "get_tags_titles", array(), "method"))) {
                    echo " Локации не найдены ";
                }
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "get_tags_titles", array(), "method"), "html", null, true);
                echo "\" alt=\"";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
                echo "\" itemprop=\"image\" src=\"";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "image"), "html", null, true);
                echo "\"></a>
</td><td class=\"textTd\">
<a itemprop=\"url\" class=\"resultItem\" href=\"";
                // line 185
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "get_url", array(), "method"), "html", null, true);
                echo "\">
<span itemprop=\"name\">";
                // line 186
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
                echo "</span></a><br>
<br>
<span itemprop=\"description\" class=\"event_body\">";
                // line 188
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "short_text"), "html", null, true);
                echo "</span></td>
</tr>
</tbody></table>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 193
            echo "</td>
</tr>
<tr>
<td class=\"resultTd\"><span class=\"blue_title\">Найдено&nbsp;";
            // line 196
            if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $_articles_), "html", null, true);
            echo "&nbsp;результатов</span></td>
</tr>
</tbody></table>
</div>
 ";
        }
    }

    public function getTemplateName()
    {
        return "site/section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 196,  383 => 193,  371 => 188,  365 => 186,  360 => 185,  344 => 183,  339 => 182,  335 => 180,  331 => 179,  324 => 176,  321 => 175,  317 => 174,  310 => 169,  305 => 168,  296 => 161,  293 => 160,  290 => 159,  285 => 156,  273 => 154,  267 => 153,  262 => 152,  256 => 148,  253 => 147,  225 => 121,  222 => 120,  217 => 119,  140 => 44,  126 => 43,  120 => 42,  113 => 40,  103 => 38,  99 => 37,  81 => 36,  59 => 16,  56 => 15,  43 => 6,  38 => 5,  32 => 4,  29 => 3,);
    }
}
