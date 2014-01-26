<?php

/* site/section.twig */
class __TwigTemplate_205ca23909d37655e9d24be0b5b541a8 extends Twig_Template
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
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_section_, "meta_title"), "html", null, true);
        echo "</title>
    <meta name=\"keywords\" content=\"";
        // line 5
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_section_, "meta_keywords"), "html", null, true);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 6
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_section_, "meta_description"), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <h3>Хлебные крошки</h3>
    ";
        // line 11
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
            // line 12
            echo "        ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "link")) {
                // line 13
                echo "        <a href=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "link"), "html", null, true);
                echo "\">";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 15
                echo "            ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "
        ";
            }
            // line 17
            echo "        ";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ((!$this->getAttribute($_loop_, "last"))) {
                echo " -> ";
            }
            // line 18
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
        // line 19
        echo "
    <h1>";
        // line 20
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_section_, "title"), "html", null, true);
        echo "</h1>
    ";
        // line 21
        if (isset($context["section"])) { $_section_ = $context["section"]; } else { $_section_ = null; }
        echo $this->getAttribute($_section_, "text");
        // line 22
        echo "
    <h2>Статьи</h2>
    <ul>
        ";
        // line 25
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_articles_);
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 26
            echo "            <li>
                <img src=\"";
            // line 27
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_article_, "image"), "html", null, true);
            echo "\">
                <a href=\"";
            // line 28
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
        // line 31
        echo "    </ul>

    <h2>Ссылки</h2>
    <ul>
        ";
        // line 35
        if (isset($context["links"])) { $_links_ = $context["links"]; } else { $_links_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_links_);
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 36
            echo "            <li>
                <a href=\"";
            // line 37
            if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_link_, "link"), "html", null, true);
            echo "\">";
            if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_link_, "title"), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 40
        echo "    </ul>
";
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
        return array (  184 => 40,  171 => 37,  168 => 36,  163 => 35,  157 => 31,  144 => 28,  139 => 27,  136 => 26,  131 => 25,  126 => 22,  123 => 21,  118 => 20,  115 => 19,  101 => 18,  95 => 17,  88 => 15,  78 => 13,  74 => 12,  56 => 11,  53 => 10,  50 => 9,  43 => 6,  38 => 5,  32 => 4,  29 => 3,);
    }
}
