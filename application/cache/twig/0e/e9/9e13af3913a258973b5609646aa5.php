<?php

/* site/main.twig */
class __TwigTemplate_0ee99e13af3913a258973b5609646aa5 extends Twig_Template
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
    <title>Главная</title>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <h2>Статьи</h2>
    <ul>
        ";
        // line 12
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_articles_);
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 13
            echo "            <li>
                <img src=\"";
            // line 14
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_article_, "image"), "html", null, true);
            echo "\">
                <a href=\"";
            // line 15
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_article_, "get_url", array(), "method"), "html", null, true);
            echo "\">";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "    </ul>
";
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
        return array (  72 => 18,  59 => 15,  54 => 14,  51 => 13,  46 => 12,  42 => 10,  39 => 9,  32 => 4,  29 => 3,);
    }
}
