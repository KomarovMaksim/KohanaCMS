<?php

/* site/search.twig */
class __TwigTemplate_bec96b9063ef2d05fa70726147221759 extends Twig_Template
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
        echo "    <title>Результаты поиска</title>
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
    <h1>Результаты поиска</h1>
    <ul>
        ";
        // line 13
        if (isset($context["results"])) { $_results_ = $context["results"]; } else { $_results_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_results_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "            <li>
                ";
            // line 15
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "image")) {
                // line 16
                echo "                <img src=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "image"), "html", null, true);
                echo "\">
                ";
            }
            // line 18
            echo "                <a href=\"";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "get_url", array(), "method"), "html", null, true);
            echo "\">";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "    </ul>

    ";
        // line 23
        if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
        if ($_pagination_) {
            // line 24
            echo "    <div class=\"pagination\">
        ";
            // line 25
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($_pagination_, "pages_amount")));
            foreach ($context['_seq'] as $context["_key"] => $context["cp"]) {
                // line 26
                echo "            ";
                if (isset($context["cp"])) { $_cp_ = $context["cp"]; } else { $_cp_ = null; }
                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                if (($_cp_ == $this->getAttribute($_pagination_, "page"))) {
                    // line 27
                    echo "                <a class=\"active\">";
                    if (isset($context["cp"])) { $_cp_ = $context["cp"]; } else { $_cp_ = null; }
                    echo twig_escape_filter($this->env, $_cp_, "html", null, true);
                    echo "</a>
            ";
                } else {
                    // line 29
                    echo "                <a href=\"?page=";
                    if (isset($context["cp"])) { $_cp_ = $context["cp"]; } else { $_cp_ = null; }
                    echo twig_escape_filter($this->env, $_cp_, "html", null, true);
                    echo "\">";
                    if (isset($context["cp"])) { $_cp_ = $context["cp"]; } else { $_cp_ = null; }
                    echo twig_escape_filter($this->env, $_cp_, "html", null, true);
                    echo "</a>
            ";
                }
                // line 31
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cp'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 32
            echo "        <div class=\"clearfix\"></div>
    </div>
    ";
        }
        // line 35
        echo "
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
        return array (  127 => 35,  122 => 32,  116 => 31,  106 => 29,  99 => 27,  94 => 26,  89 => 25,  86 => 24,  83 => 23,  79 => 21,  65 => 18,  58 => 16,  55 => 15,  52 => 14,  47 => 13,  42 => 10,  39 => 9,  32 => 4,  29 => 3,);
    }
}
