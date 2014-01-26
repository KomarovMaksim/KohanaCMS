<?php

/* site/section.twig */
class __TwigTemplate_edb021b8a0ad4f1b51cc54e2ebe71d0a extends Twig_Template
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
        echo "    <title>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "meta_title"), "html", null, true);
        echo "</title>
    <meta name=\"keywords\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "meta_keywords"), "html", null, true);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "meta_description"), "html", null, true);
        echo "\">
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
   <div class=\"gg_breadcrumb\">
        <a href=\"/\">Главная</a> &nbsp;/&nbsp;
         ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
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
            // line 31
            echo "        ";
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link")) {
                // line 32
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 34
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                echo "</span>
        ";
            }
            // line 36
            echo "        ";
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                echo " / ";
            }
            // line 37
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
        // line 38
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
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "title"), "html", null, true);
        echo "</h1><br />
    ";
        // line 114
        echo $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "text");
        // line 115
        echo "
   <!--- <h2>Ссылки</h2>   --->
        ";
        // line 117
        if ((twig_length_filter($this->env, (isset($context["links"]) ? $context["links"] : null)) > 0)) {
            // line 118
            echo "   <style>\t\t\t\t\t\tdiv.gg_related_links {\t\t\t\twidth:600px;\t\t\t\tclear:both;\t\t\t\tpadding:20px 0px 0px 0px;\t\t\t}\t\t\t\t\t\tdiv.gg_tlt_related_links {\t\t\t\twidth:140px;\t\t\t\tcolor:#000000;\t\t\t\tfont-size:14px;\t\t\t}\t\t\t\t\t\tdiv.gg_tlt_related_links span{\t\t\t\tcolor:#04bff2;\t\t\t\tfont-size:17px;\t\t\t}\t\t\t\t\t\tdiv.gg_txt_related_links {\t\t\t\twidth:600px;\t\t\t\tpadding:10px 0px 0px 10px;\t\t\t\t\t\t}\t\t\t\t\t\tdiv.gg_txt_related_links_list {\t\t\t\t\t/*width:125px;*/\t\t\t\tcolor:#000000;\t\t\t\tfont-size:9px;\t\t\t\tpadding:0px 0px 16px 0px;\t\t\t}
   \t\t\t\t\tdiv.gg_txt_related_links_list img{\t\t\t\tpadding:0px 0px 6px 0px;\t\t\t}\t\t\t\t\t\t\t\t\tdiv.gg_txt_related_links_list a{\t\t\t\tpadding:0px 10px 0px 0px;\t\t\t\tcolor:#6f6f6f;\t\t\t\tfont-size:10px;\t\t\t\ttext-decoration:none;\t\t\t\tbackground-image:url(/assets/site/eot/images/arrow4.jpg);\t\t\t\tbackground-position:bottom right;\t\t\t\tbackground-repeat:no-repeat;\t\t\t}\t\t</style>
       <div class=\"gg_related_links\">
    <div class=\"gg_tlt_related_links\">Related <span>Links</span></div>
        ";
            // line 122
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 123
                echo "    <div class=\"gg_txt_related_links\"><div class=\"gg_txt_related_links_list\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "title"), "html", null, true);
                echo "<br>
    <a target=\"_blank\" href=\"";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "link"), "html", null, true);
                echo "\">Weather report for Greece.</a></div>
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 126
            echo "    </div>
    </div>
    ";
        }
        // line 129
        echo "
     ";
        // line 130
        if ((twig_length_filter($this->env, (isset($context["articles"]) ? $context["articles"] : null)) > 0)) {
            // line 131
            echo "    <div class=\"portlet_4\">
\t\t<link type=\"text/css\" href=\"/assets/site/eot/eventsSearch.css\" rel=\"stylesheet\"><table class=\"resultTable\" cellpadding=\"0\" cellspacing=\"0\">
<tbody><tr>
<td class=\"resultTd\"><a class=\"resultLabel\" href=\"#\">Результаты:</a></td>
</tr>
<tr>
<td class=\"resultList\">
  ";
            // line 138
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 139
                echo "<div class=\"row2\">
<table cellspacing=\"0\" cellpadding=\"0\">
<tbody><tr>
<td class=\"imgTd\">
<a itemprop=\"url\" href=\"";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "get_url", array(), "method"), "html", null, true);
                echo "\">
<img height=\"60px\" width=\"85px\" title=\" ";
                // line 144
                if ((!$this->getAttribute((isset($context["article"]) ? $context["article"] : null), "get_tags_titles", array(), "method"))) {
                    echo " Локации не найдены ";
                }
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "get_tags_titles", array(), "method"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
                echo "\" itemprop=\"image\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "image"), "html", null, true);
                echo "\"></a>
</td><td class=\"textTd\">
<a itemprop=\"url\" class=\"resultItem\" href=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "get_url", array(), "method"), "html", null, true);
                echo "\">
<span itemprop=\"name\">";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
                echo "</span></a><br>
<br>
<span itemprop=\"description\" class=\"event_body\">";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "short_text"), "html", null, true);
                echo "</span></td>
</tr>
</tbody></table>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 154
            echo "</td>
</tr>
<tr>
<td class=\"resultTd\"><span class=\"blue_title\">Найдено&nbsp;";
            // line 157
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["articles"]) ? $context["articles"] : null)), "html", null, true);
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
        return array (  307 => 157,  302 => 154,  291 => 149,  286 => 147,  282 => 146,  270 => 144,  266 => 143,  260 => 139,  256 => 138,  247 => 131,  245 => 130,  242 => 129,  237 => 126,  229 => 124,  224 => 123,  220 => 122,  214 => 118,  212 => 117,  208 => 115,  206 => 114,  202 => 113,  125 => 38,  111 => 37,  106 => 36,  100 => 34,  92 => 32,  89 => 31,  72 => 30,  50 => 10,  47 => 9,  41 => 6,  37 => 5,  32 => 4,  29 => 3,);
    }
}
