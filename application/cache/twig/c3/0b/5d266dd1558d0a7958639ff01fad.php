<?php

/* site/event_list.twig */
class __TwigTemplate_c30b5d266dd1558d0a7958639ff01fad extends Twig_Template
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
            // line 31
            echo "        ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "link")) {
                // line 32
                echo "        <a href=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "link"), "html", null, true);
                echo "\">";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 34
                echo "            <span>";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "</span>
        ";
            }
            // line 36
            echo "        ";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ((!$this->getAttribute($_loop_, "last"))) {
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
            if (isset($context["y"])) { $_y_ = $context["y"]; } else { $_y_ = null; }
            echo twig_escape_filter($this->env, $_y_, "html", null, true);
            echo "\"";
            if (isset($context["y"])) { $_y_ = $context["y"]; } else { $_y_ = null; }
            if (isset($context["year"])) { $_year_ = $context["year"]; } else { $_year_ = null; }
            if (($_y_ == $_year_)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            if (isset($context["y"])) { $_y_ = $context["y"]; } else { $_y_ = null; }
            echo twig_escape_filter($this->env, $_y_, "html", null, true);
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
        if (isset($context["months"])) { $_months_ = $context["months"]; } else { $_months_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_months_);
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
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\"";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if (isset($context["month"])) { $_month_ = $context["month"]; } else { $_month_ = null; }
            if (($this->getAttribute($_loop_, "index") == $_month_)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
            echo twig_escape_filter($this->env, $_m_, "html", null, true);
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
        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_categories_);
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 169
            echo "                            <option value=\"";
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_c_, "id"), "html", null, true);
            echo "\"";
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (($this->getAttribute($_c_, "id") == $_category_)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_c_, "title"), "html", null, true);
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
        if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_tags_);
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 179
            echo "                            <option value=\"";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "id"), "html", null, true);
            echo "\"";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            if (isset($context["location"])) { $_location_ = $context["location"]; } else { $_location_ = null; }
            if (($this->getAttribute($_tag_, "id") == $_location_)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tag_, "title"), "html", null, true);
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
                    <input class=\"btnCalendar\" type=\"submit\" value=\"Поиск\">
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
        if (isset($context["events"])) { $_events_ = $context["events"]; } else { $_events_ = null; }
        if ((twig_length_filter($this->env, $_events_) > 0)) {
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
            if (isset($context["events"])) { $_events_ = $context["events"]; } else { $_events_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_events_);
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 212
                echo "                            <div class=\"row2\">
                                <table cellspacing=\"0\" cellpadding=\"0\">
                                    <tbody>
                                    <tr>
                                        <td class=\"imgTd\">
                                            ";
                // line 217
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                if ($this->getAttribute($_event_, "image")) {
                    // line 218
                    echo "                                            <a itemprop=\"url\" href=\"";
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_url", array(), "method"), "html", null, true);
                    echo "\">
                                                <img height=\"60px\" width=\"85px\" title=\"";
                    // line 219
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_event_, "title"), "html", null, true);
                    echo "\" alt=\"";
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_event_, "title"), "html", null, true);
                    echo "\" itemprop=\"image\" src=\"";
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_event_, "image"), "html", null, true);
                    echo "\"></a>
                                        </td>    ";
                } else {
                    // line 221
                    echo "                                            <a itemprop=\"url\" href=\"";
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_url", array(), "method"), "html", null, true);
                    echo "\">
                                                <img height=\"60px\" width=\"85px\" title=\"";
                    // line 222
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_event_, "title"), "html", null, true);
                    echo "\" alt=\"";
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_event_, "title"), "html", null, true);
                    echo "\" itemprop=\"image\" src=\"";
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_event_, "image"), "html", null, true);
                    echo "\"></a>
                                            </td>
                                        ";
                }
                // line 225
                echo "                                        <td class=\"textTd\">
                                            <a itemprop=\"url\" class=\"resultItem\" href=\"";
                // line 226
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_url", array(), "method"), "html", null, true);
                echo "\">
                                                <span itemprop=\"name\">";
                // line 227
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_event_, "date"), "d.m.Y"), "html", null, true);
                echo "&nbsp;&nbsp;";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_event_, "title"), "html", null, true);
                echo "</span></a><br>
                                            <br>
                                            <span itemprop=\"description\" class=\"event_body\">";
                // line 229
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_event_, "short_text"), "html", null, true);
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
        return array (  487 => 243,  477 => 235,  464 => 229,  455 => 227,  450 => 226,  447 => 225,  434 => 222,  428 => 221,  416 => 219,  410 => 218,  407 => 217,  400 => 212,  395 => 211,  383 => 201,  380 => 200,  377 => 199,  361 => 181,  342 => 179,  337 => 178,  328 => 171,  309 => 169,  304 => 168,  295 => 161,  268 => 159,  250 => 158,  241 => 151,  222 => 149,  218 => 148,  208 => 140,  204 => 118,  123 => 38,  109 => 37,  103 => 36,  96 => 34,  86 => 32,  82 => 31,  64 => 30,  42 => 10,  39 => 9,  32 => 4,  29 => 3,);
    }
}
