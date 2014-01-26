<?php

/* site/event_list.twig */
class __TwigTemplate_a4e325692654c83194105b7b8ec54c37 extends Twig_Template
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
        echo "    <title>Греция. Вечная Классика | Cобытия</title>
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


<div class=\"portlet_3\">
    <link type=\"text/css\" href=\"/assets/site/css/geo.css\" rel=\"stylesheet\">

    <link type=\"text/css\" href=\"/assets/site/css/events.css\" rel=\"stylesheet\">
    <link type=\"text/css\" href=\"/assets/site/css/jquery-ui-1.8.2.custom.css\" rel=\"stylesheet\">
    ";
        // line 118
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js\" type=\"text/javascript\"></script>

    ";
        // line 140
        echo "    <div class=\"calendarForm\">
        <form method=\"get\">
            <div class=\"cal-ev\">
                <div class=\"cal-bl\">
                    <label>Год</label>
                    <br>
                    <select name=\"y\">
                        <option value=\"0\">(Все)</option>
                        ";
        // line 148
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(2013, (twig_date_format_filter($this->env, twig_date_converter($this->env), "Y") + 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["y"]) {
            // line 149
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["y"]) ? $context["y"] : null), "html", null, true);
            echo "\"";
            if (((isset($context["y"]) ? $context["y"] : null) == (isset($context["year"]) ? $context["year"] : null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["y"]) ? $context["y"] : null), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['y'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 151
        echo "                    </select>
                </div>
                <div class=\"cal-bl\">
                    <label>Месяц</label>
                    <br>
                    <select name=\"m\">
                        <option value=\"0\">(Все)</option>
                        ";
        // line 158
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["months"]) ? $context["months"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 159
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\"";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == (isset($context["month"]) ? $context["month"] : null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["m"]) ? $context["m"] : null), "html", null, true);
            echo "</option>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 161
        echo "                    </select>
                </div>
                <div class=\"cal-bl\">
                    <label>Категория</label>
                    <br>
                    <select name=\"category\">
                        <option value=\"0\">(Все)</option>
                        ";
        // line 168
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 169
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "id"), "html", null, true);
            echo "\"";
            if (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "id") == (isset($context["category"]) ? $context["category"] : null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "title"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 171
        echo "                    </select>
                </div>
\t\t<div class=\"cal-bl\">
                    <label>Место:</label>
                    <br>
                    <select class=\"slc\" name=\"location\">
                        <option value=\"0\">(Все)</option>
                        ";
        // line 178
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 179
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "id"), "html", null, true);
            echo "\"";
            if (($this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "id") == (isset($context["location"]) ? $context["location"] : null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "title"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 181
        echo "                    </select>
                </div>
\t\t<div class=\"cal-bl\" style=\"margin-top: 13px;\">
                    <input class=\"btnCalendar\" type=\"submit\" value=\"Search\">
                </div>
            </div>
            <div style=\"clear:both;\"></div>
            <div>

            </div>
        </form>
    </div>
    <div style=\"clear:both;\"></div>

    ";
        // line 199
        echo "
    ";
        // line 200
        if ((twig_length_filter($this->env, (isset($context["events"]) ? $context["events"] : null)) > 0)) {
            // line 201
            echo "        <h1>События</h1>

        <div class=\"portlet_4\">
            <link type=\"text/css\" href=\"/assets/site/eot/eventsSearch.css\" rel=\"stylesheet\">
            <table class=\"resultTable\" cellpadding=\"0\" cellspacing=\"0\">
                <tbody>
                <tr>
                </tr>
                <tr>
                    <td class=\"resultList\">
                        ";
            // line 211
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 212
                echo "                            <div class=\"row2\">
                                <table cellspacing=\"0\" cellpadding=\"0\">
                                    <tbody>
                                    <tr>
                                        <td class=\"imgTd\">
                                            ";
                // line 217
                if ($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "image")) {
                    // line 218
                    echo "                                            <a itemprop=\"url\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_url", array(), "method"), "html", null, true);
                    echo "\">
                                                <img height=\"60px\" width=\"85px\" title=\"";
                    // line 219
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "title"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "title"), "html", null, true);
                    echo "\" itemprop=\"image\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "image"), "html", null, true);
                    echo "\"></a>
                                        </td>    ";
                } else {
                    // line 221
                    echo "                                            <a itemprop=\"url\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_url", array(), "method"), "html", null, true);
                    echo "\">
                                                <img height=\"60px\" width=\"85px\" title=\"";
                    // line 222
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "title"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "title"), "html", null, true);
                    echo "\" itemprop=\"image\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "image"), "html", null, true);
                    echo "\"></a>
                                            </td>
                                        ";
                }
                // line 225
                echo "                                        <td class=\"textTd\">
                                            <a itemprop=\"url\" class=\"resultItem\" href=\"";
                // line 226
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_url", array(), "method"), "html", null, true);
                echo "\">
                                                <span itemprop=\"name\">";
                // line 227
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "title"), "html", null, true);
                echo "</span></a><br>
                                            <br>
                                            <span itemprop=\"description\" class=\"event_body\">";
                // line 229
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "short_text"), "html", null, true);
                echo "</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 235
            echo "

                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    ";
        }
        // line 243
        echo "


    ";
    }

    public function getTemplateName()
    {
        return "site/event_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 243,  435 => 235,  423 => 229,  418 => 227,  414 => 226,  411 => 225,  401 => 222,  396 => 221,  387 => 219,  382 => 218,  380 => 217,  373 => 212,  369 => 211,  357 => 201,  355 => 200,  352 => 199,  336 => 181,  321 => 179,  317 => 178,  308 => 171,  293 => 169,  289 => 168,  280 => 161,  257 => 159,  240 => 158,  231 => 151,  216 => 149,  212 => 148,  202 => 140,  198 => 118,  117 => 38,  103 => 37,  98 => 36,  92 => 34,  84 => 32,  81 => 31,  64 => 30,  42 => 10,  39 => 9,  32 => 4,  29 => 3,);
    }
}
