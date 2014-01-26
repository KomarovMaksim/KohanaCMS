<?php

/* site/search.twig */
class __TwigTemplate_daab101dc7b192900ec1af8481f953a4 extends Twig_Template
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
        echo "    <title>Греция. Вечная Классика | Результаты поиска</title>
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
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
     <br /><br />
    <h1>Результаты поиска</h1>
     <div class=\"portlet_4\">
\t\t<link type=\"text/css\" href=\"/assets/site/eot/eventsSearch.css\" rel=\"stylesheet\"><table class=\"resultTable\" cellpadding=\"0\" cellspacing=\"0\">
<tbody><tr>
</tr>
<tr>
<td class=\"resultList\">
   ";
        // line 108
        if (isset($context["results"])) { $_results_ = $context["results"]; } else { $_results_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_results_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 109
            echo "<div class=\"row2\">
<table cellspacing=\"0\" cellpadding=\"0\">
<tbody><tr>
<td class=\"imgTd\">
 ";
            // line 113
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "image")) {
                // line 114
                echo "<a itemprop=\"url\" href=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "get_url", array(), "method"), "html", null, true);
                echo "\">
<img height=\"60px\" width=\"85px\" title=\"";
                // line 115
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "\" alt=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "\" itemprop=\"image\" src=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "image"), "html", null, true);
                echo "\"></a>
</td>    ";
            } else {
                // line 117
                echo " <a itemprop=\"url\" href=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "get_url", array(), "method"), "html", null, true);
                echo "\">
<img height=\"60px\" width=\"85px\" title=\"";
                // line 118
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "\" alt=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "\" itemprop=\"image\" src=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "image"), "html", null, true);
                echo "\"></a>
</td>
  ";
            }
            // line 121
            echo "<td class=\"textTd\">
<a itemprop=\"url\" class=\"resultItem\" href=\"";
            // line 122
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "get_url", array(), "method"), "html", null, true);
            echo "\">
<span itemprop=\"name\">";
            // line 123
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
            echo "</span></a><br>
<br>
<span itemprop=\"description\" class=\"event_body\">";
            // line 125
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "short_text"), "html", null, true);
            echo "</span></td>
</tr>
</tbody></table>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 130
        echo "</td>
</tr>
<tr>
<td class=\"resultTd\" align=\"right\">
  ";
        // line 134
        if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
        if ($_pagination_) {
            // line 135
            echo "    <div class=\"pagination\" style=\"margin-right:10px;\">Страницы:
        ";
            // line 136
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($_pagination_, "pages_amount")));
            foreach ($context['_seq'] as $context["_key"] => $context["cp"]) {
                // line 137
                echo "            ";
                if (isset($context["cp"])) { $_cp_ = $context["cp"]; } else { $_cp_ = null; }
                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                if (($_cp_ == $this->getAttribute($_pagination_, "page"))) {
                    // line 138
                    echo "                <b><a class=\"active\">";
                    if (isset($context["cp"])) { $_cp_ = $context["cp"]; } else { $_cp_ = null; }
                    echo twig_escape_filter($this->env, $_cp_, "html", null, true);
                    echo "</a></b>
            ";
                } else {
                    // line 140
                    echo "                <a href=\"?page=";
                    if (isset($context["cp"])) { $_cp_ = $context["cp"]; } else { $_cp_ = null; }
                    echo twig_escape_filter($this->env, $_cp_, "html", null, true);
                    echo "\">";
                    if (isset($context["cp"])) { $_cp_ = $context["cp"]; } else { $_cp_ = null; }
                    echo twig_escape_filter($this->env, $_cp_, "html", null, true);
                    echo "</a>
            ";
                }
                // line 142
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cp'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 143
            echo "        <div class=\"clearfix\"></div>
    </div>
    ";
        }
        // line 145
        echo "</td>
</tr>
<tr>
<td class=\"resultTd\"><span class=\"blue_title\">Найдено&nbsp;";
        // line 148
        if (isset($context["amount"])) { $_amount_ = $context["amount"]; } else { $_amount_ = null; }
        echo twig_escape_filter($this->env, $_amount_, "html", null, true);
        echo "&nbsp;результатов</span></td>
</tr>
</tbody></table>
</div>


";
    }

    public function getTemplateName()
    {
        return "site/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 148,  269 => 145,  264 => 143,  258 => 142,  248 => 140,  241 => 138,  236 => 137,  231 => 136,  228 => 135,  225 => 134,  219 => 130,  207 => 125,  201 => 123,  196 => 122,  193 => 121,  180 => 118,  174 => 117,  162 => 115,  156 => 114,  153 => 113,  147 => 109,  142 => 108,  42 => 10,  39 => 9,  32 => 4,  29 => 3,);
    }
}
