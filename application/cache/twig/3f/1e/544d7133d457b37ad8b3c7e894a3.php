<?php

/* site/article.twig */
class __TwigTemplate_3f1e544d7133d457b37ad8b3c7e894a3 extends Twig_Template
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
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_article_, "meta_title"), "html", null, true);
        echo "</title>
    <meta name=\"keywords\" content=\"";
        // line 5
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_article_, "meta_keywords"), "html", null, true);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 6
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_article_, "meta_description"), "html", null, true);
        echo "\">
<!-- Put this script tag to the <head> of your page -->
<script type=\"text/javascript\" src=\"//vk.com/js/api/openapi.js?105\"></script>

<script type=\"text/javascript\">
  VK.init({apiId: 4131335, onlyWidgets: true});
</script> 
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
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
        // line 37
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
            // line 38
            echo "        ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "link")) {
                // line 39
                echo "        <a href=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "link"), "html", null, true);
                echo "\">";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 41
                echo "            <span>";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "</span>
        ";
            }
            // line 43
            echo "        ";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ((!$this->getAttribute($_loop_, "last"))) {
                echo " / ";
            }
            // line 44
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
        // line 45
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
        // line 120
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
        echo "</h1><br />
    ";
        // line 121
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo $this->getAttribute($_article_, "text");
        // line 122
        echo "    <div class=\"shareLinks\"><table><tbody><tr>
    <td><iframe id=\"twitter-widget-0\" scrolling=\"no\" frameborder=\"0\" allowtransparency=\"true\" src=\"http://platform.twitter.com/widgets/tweet_button.1384994725.html#_=1386195314668&amp;count=horizontal&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fwww.visitgreece.gr%2Fen%2Fgeography&amp;size=m&amp;text=Visit%20Greece%20%7C%20Geography&amp;url=http%3A%2F%2Fwww.visitgreece.gr%2Fen%2Fgeography&amp;via=VisitGreecegr\" class=\"twitter-share-button twitter-tweet-button twitter-count-horizontal\" title=\"Twitter Tweet Button\" data-twttr-rendered=\"true\" style=\"width: 110px; height: 20px;\"></iframe><div style=\"width:15px;float:right;\">&nbsp;</div></td>
    <td><div id=\"___plusone_0\" style=\"text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background-position: initial initial; background-repeat: initial initial;\"><iframe frameborder=\"0\" hspace=\"0\" marginheight=\"0\" marginwidth=\"0\" scrolling=\"no\" style=\"position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;\" tabindex=\"0\" vspace=\"0\" width=\"100%\" id=\"I0_1386195314824\" name=\"I0_1386195314824\" src=\"https://apis.google.com/u/0/_/+1/fastbutton?usegapi=1&amp;bsv=o&amp;size=medium&amp;origin=http%3A%2F%2Fwww.visitgreece.gr&amp;url=http%3A%2F%2Fwww.visitgreece.gr%2Fen%2Fgeography&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.ru.ZQGeNOICZqw.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAItRSTM4239lAQe2Y-HSAgMWKoFgBAUpjw#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1386195314824&amp;parent=http%3A%2F%2Fwww.visitgreece.gr&amp;pfname=&amp;rpctoken=16119801\" data-gapiattached=\"true\" title=\"+1\"></iframe></div></td>

    <td>
  <div id=\"fb-root\"></div>
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
 <br /><br /><br /><br />

   <!--- <h2>Ссылки</h2>   --->
        ";
        // line 150
        if (isset($context["links"])) { $_links_ = $context["links"]; } else { $_links_ = null; }
        if ((twig_length_filter($this->env, $_links_) > 0)) {
            // line 151
            echo "   <style>\t\t\t\t\t\tdiv.gg_related_links {\t\t\t\twidth:600px;\t\t\t\tclear:both;\t\t\t\tpadding:20px 0px 0px 0px;\t\t\t}\t\t\t\t\t\tdiv.gg_tlt_related_links {\t\t\t\twidth:140px;\t\t\t\tcolor:#000000;\t\t\t\tfont-size:14px;\t\t\t}\t\t\t\t\t\tdiv.gg_tlt_related_links span{\t\t\t\tcolor:#04bff2;\t\t\t\tfont-size:17px;\t\t\t}\t\t\t\t\t\tdiv.gg_txt_related_links {\t\t\t\twidth:600px;\t\t\t\tpadding:10px 0px 0px 10px;\t\t\t\t\t\t}\t\t\t\t\t\tdiv.gg_txt_related_links_list {\t\t\t\t\t/*width:125px;*/\t\t\t\tcolor:#000000;\t\t\t\tfont-size:9px;\t\t\t\tpadding:0px 0px 16px 0px;\t\t\t}
   \t\t\t\t\tdiv.gg_txt_related_links_list img{\t\t\t\tpadding:0px 0px 6px 0px;\t\t\t}\t\t\t\t\t\t\t\t\tdiv.gg_txt_related_links_list a{\t\t\t\tpadding:0px 10px 0px 0px;\t\t\t\tcolor:#6f6f6f;\t\t\t\tfont-size:10px;\t\t\t\ttext-decoration:none;\t\t\t\tbackground-image:url(/assets/site/eot/images/arrow4.jpg);\t\t\t\tbackground-position:bottom right;\t\t\t\tbackground-repeat:no-repeat;\t\t\t}\t\t</style>
       <div class=\"gg_related_links\">
    <div class=\"gg_tlt_related_links\">Похожие <span>ссылки</span></div>
        ";
            // line 155
            if (isset($context["links"])) { $_links_ = $context["links"]; } else { $_links_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_links_);
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 156
                echo "    <div class=\"gg_txt_related_links\"><div class=\"gg_txt_related_links_list\">";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_link_, "title"), "html", null, true);
                echo "<br>
    <a target=\"_blank\" href=\"";
                // line 157
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
            // line 159
            echo "    </div>
    </div>
    ";
        }
        // line 162
        echo "
";
    }

    public function getTemplateName()
    {
        return "site/article.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 162,  287 => 159,  275 => 157,  269 => 156,  264 => 155,  258 => 151,  255 => 150,  225 => 122,  222 => 121,  217 => 120,  140 => 45,  126 => 44,  120 => 43,  113 => 41,  103 => 39,  99 => 38,  81 => 37,  59 => 17,  56 => 16,  43 => 6,  38 => 5,  32 => 4,  29 => 3,);
    }
}
