<?php

/* site/main.twig */
class __TwigTemplate_8bc8d3cc7845f0cd3310ddac55f47965 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bannermain_items"]) ? $context["bannermain_items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item3"]) {
            // line 13
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item3"]) ? $context["item3"] : null), "url"), "html", null, true);
            echo "\"><img title=\"\" alt=\"\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item3"]) ? $context["item3"] : null), "image"), "html", null, true);
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 23
            echo "<div class=\"gg_box\"><div class=\"gg_img_box\"><img title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "image"), "html", null, true);
            echo "\"></div><div class=\"gg_tlt_box\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
            echo "</b><br> </div><div class=\"gg_txt_box\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "short_text"), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "get_url", array(), "method"), "html", null, true);
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["event_all"]) ? $context["event_all"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 33
            echo "<li>
<img title=\"\" src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "image"), "html", null, true);
            echo "\"><h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "title"), "html", null, true);
            echo "</h1>
<h2>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "short_text"), "html", null, true);
            echo "</h2>
<a itemprop=\"url\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_url", array(), "method"), "html", null, true);
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
        if ((isset($context["splash"]) ? $context["splash"] : null)) {
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
            echo twig_escape_filter($this->env, (isset($context["splash"]) ? $context["splash"] : null), "html", null, true);
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
        return array (  156 => 62,  147 => 55,  145 => 54,  127 => 38,  119 => 36,  115 => 35,  109 => 34,  106 => 33,  102 => 32,  94 => 26,  74 => 23,  70 => 22,  61 => 15,  50 => 13,  46 => 12,  42 => 10,  39 => 9,  32 => 4,  29 => 3,);
    }
}
