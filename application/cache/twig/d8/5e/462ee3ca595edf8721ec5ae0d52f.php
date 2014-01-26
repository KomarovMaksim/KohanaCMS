<?php

/* site/site.twig */
class __TwigTemplate_d85e462ee3ca595edf8721ec5ae0d52f extends Twig_Template
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
        echo "﻿<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <link type=\"text/css\" rel=\"stylesheet\" href=\"/assets/site/css/style.css\">
    <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
    ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "</head>
<body>
<form action=\"/search\" method=\"post\">
    <input type=\"text\" name=\"search_string\">
    <button type=\"submit\">Искать</button>
</form>
<nav>
    <ul>
        ";
        // line 17
        if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_nav_);
        foreach ($context['_seq'] as $context["_key"] => $context["item1"]) {
            // line 18
            echo "
        <li>";
            // line 19
            if (isset($context["item1"])) { $_item1_ = $context["item1"]; } else { $_item1_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item1_, "title"), "html", null, true);
            echo "
            ";
            // line 20
            if (isset($context["item1"])) { $_item1_ = $context["item1"]; } else { $_item1_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($_item1_, "items")) > 0)) {
                // line 21
                echo "            <ul>
                ";
                // line 22
                if (isset($context["item1"])) { $_item1_ = $context["item1"]; } else { $_item1_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_item1_, "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["item2"]) {
                    // line 23
                    echo "                <li>
                    <a href=\"";
                    // line 24
                    if (isset($context["item2"])) { $_item2_ = $context["item2"]; } else { $_item2_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item2_, "link"), "html", null, true);
                    echo "\">";
                    if (isset($context["item2"])) { $_item2_ = $context["item2"]; } else { $_item2_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item2_, "title"), "html", null, true);
                    echo "</a>
                    ";
                    // line 25
                    if (isset($context["item2"])) { $_item2_ = $context["item2"]; } else { $_item2_ = null; }
                    if ((twig_length_filter($this->env, $this->getAttribute($_item2_, "items")) > 0)) {
                        // line 26
                        echo "                    <ul>
                        ";
                        // line 27
                        if (isset($context["item2"])) { $_item2_ = $context["item2"]; } else { $_item2_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_item2_, "items"));
                        foreach ($context['_seq'] as $context["_key"] => $context["item3"]) {
                            // line 28
                            echo "                        <li><a href=\"";
                            if (isset($context["item3"])) { $_item3_ = $context["item3"]; } else { $_item3_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_item3_, "link"), "html", null, true);
                            echo "\">";
                            if (isset($context["item3"])) { $_item3_ = $context["item3"]; } else { $_item3_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_item3_, "title"), "html", null, true);
                            echo "</a></li>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item3'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 30
                        echo "                    </ul>
                    ";
                    }
                    // line 32
                    echo "                </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item2'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 34
                echo "            </ul>
            ";
            }
            // line 36
            echo "        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item1'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "    </ul>
</nav>


<div class=\"slider\">
    ";
        // line 43
        if (isset($context["slider_items"])) { $_slider_items_ = $context["slider_items"]; } else { $_slider_items_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_slider_items_);
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
            // line 44
            echo "        <img ";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "first")) {
                echo "class=\"active\" ";
            }
            echo "src=\"";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "image"), "html", null, true);
            echo "\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 46
        echo "    <script type=\"text/javascript\">
        \$(function () {
            \$('.slider img').css({opacity: 0.0});
            \$('.slider .active').css({opacity: 1.0});
            if (\$('.slider img').size() > 1)
            setInterval(function () {
                var current = \$('.slider .active');
                var next = current.next();
                if (!next.is('img'))
                    next = \$('.slider img').first();

                next.css({opacity: 0.0}).addClass('active').animate({opacity: 1.0}, 1000);
                current.animate({opacity: 0.0}, 1000).removeClass('active');
            }, 10000)
        })
    </script>
</div>
<article>
    ";
        // line 64
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "</article>


</body>
</html>";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "    ";
    }

    // line 64
    public function block_content($context, array $blocks = array())
    {
        // line 65
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
        return array (  210 => 65,  207 => 64,  203 => 8,  200 => 7,  192 => 66,  190 => 64,  170 => 46,  147 => 44,  129 => 43,  122 => 38,  115 => 36,  111 => 34,  104 => 32,  100 => 30,  87 => 28,  82 => 27,  79 => 26,  76 => 25,  68 => 24,  65 => 23,  60 => 22,  57 => 21,  54 => 20,  49 => 19,  46 => 18,  41 => 17,  31 => 9,  29 => 7,  21 => 1,);
    }
}
