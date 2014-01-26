<?php

/* site/main.twig */
class __TwigTemplate_edfa1d4141970e59048bd8bbc74aa8aa extends Twig_Template
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
    <title>Греция. Вечная Классика | Главная</title>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
    <div class=\"main_banner\" style=\"padding-top:20px;\">
    ";
        // line 12
        if (isset($context["bannermain_items"])) { $_bannermain_items_ = $context["bannermain_items"]; } else { $_bannermain_items_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_bannermain_items_);
        foreach ($context['_seq'] as $context["_key"] => $context["item3"]) {
            // line 13
            echo "    <a target=\"_blank\" href=\"";
            if (isset($context["item3"])) { $_item3_ = $context["item3"]; } else { $_item3_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item3_, "url"), "html", null, true);
            echo "\"><img title=\"\" alt=\"\" src=\"";
            if (isset($context["item3"])) { $_item3_ = $context["item3"]; } else { $_item3_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item3_, "image"), "html", null, true);
            echo "\"></a>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item3'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "  </div>



<div class=\"portlet_2\">
\t\t<style></style>
\t\t<div class=\"gg_highlight_box\"><div class=\"gg_tlt_highlight_box\">Греция в центре внимания</div><div class=\"gg_txt_highlight_box\">
    ";
        // line 22
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_articles_);
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 23
            echo "<div class=\"gg_box\"><div class=\"gg_img_box\"><img title=\"";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
            echo "\" src=\"";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_article_, "image"), "html", null, true);
            echo "\"></div><div class=\"gg_tlt_box\"><b>";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
            echo "</b><br> </div><div class=\"gg_txt_box\"><p>";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_article_, "short_text"), "html", null, true);
            echo " <a href=\"";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_article_, "get_url", array(), "method"), "html", null, true);
            echo "\"><span style=\" color: #00B7EF;\"><b>Читать далее</b></span></a><br>
</p></div></div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "</div></div></div>

\t<div class=\"portlet_3\">
\t\t<link rel=\"stylesheet\" media=\"screen\" href=\"/assets/site/eot/styles/movingboxes.css\"><script src=\"/assets/site/eot/scripts/jquery.movingboxes.min.js\"></script><style>\t\t\t\tul#slider2 {\t\t\t\t\twidth : 524px;\t\t\t\t\theight : 230px;\t\t\t\t\tpadding : 0 12px;\t\t\t\t}\t\t\t\t#slider2 li {\t\t\t\t\twidth : 168px;\t\t\t\t}</style><div class=\"gg_home_events\">
<div class=\"gg_tlt_events\">Ближайшие события</div>
<ul id=\"slider2\">
      ";
        // line 32
        if (isset($context["event_all"])) { $_event_all_ = $context["event_all"]; } else { $_event_all_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_event_all_);
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 33
            echo "<li>
<img title=\"\" src=\"";
            // line 34
            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_event_, "image"), "html", null, true);
            echo "\"><h1>";
            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_event_, "title"), "html", null, true);
            echo "</h1>
<h2>";
            // line 35
            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_event_, "short_text"), "html", null, true);
            echo "</h2>
<a itemprop=\"url\" href=\"";
            // line 36
            if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_event_, "get_url", array(), "method"), "html", null, true);
            echo "\">Читать дальше...</a>
</li>   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "</ul>
     <script type=\"text/javascript\">
        \$(function () {
            \$('#slider2').movingBoxes({
                startPanel: 2,
                reducedSize: 1,
                fixedHeight: true,
                wrap: false,
                buildNav: false,
                navFormatter: function () {
                    return \"&#9679;\";
                }
            })

        })
    </script>
    ";
        // line 54
        if (isset($context["splash"])) { $_splash_ = $context["splash"]; } else { $_splash_ = null; }
        if ($_splash_) {
            // line 55
            echo "        <script type=\"text/javascript\">
            \$(function(){
                var div = \$('<div onclick=\"\$(\\'#site_container\\').show();\$(this).fadeOut(2000.0)\"></div>');
                div.css({
                    display: 'none',
                    width: '100%',
                    height: '100%',
                    'background-image': 'url(";
            // line 62
            if (isset($context["splash"])) { $_splash_ = $context["splash"]; } else { $_splash_ = null; }
            echo twig_escape_filter($this->env, $_splash_, "html", null, true);
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
        return array (  172 => 62,  163 => 55,  160 => 54,  142 => 38,  133 => 36,  128 => 35,  120 => 34,  117 => 33,  112 => 32,  104 => 26,  78 => 23,  73 => 22,  64 => 15,  51 => 13,  46 => 12,  42 => 10,  39 => 9,  32 => 4,  29 => 3,);
    }
}
