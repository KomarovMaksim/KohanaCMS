<?php

/* site/contacts.twig */
class __TwigTemplate_6a513865fc0c95c9a8446f66fae5a61b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("site/article.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "site/article.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    <title>Греция. Вечная Классика | Контакты</title>
    <meta name=\"keywords\" content=\"";
        // line 4
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "meta_keywords"), "html", null, true);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 5
        if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_event_, "meta_description"), "html", null, true);
        echo "\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "<br /><br />
    <div class=\"feedback\">
        <h1>Обратная связь</h1>

        <p>Вы можете задать свой вопрос или оставить нам сообщение воспользовавшись формой обратной связи.</p>

             <div class=\"errors\">
            ";
        // line 15
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_errors_);
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 16
            echo "                <div style=\"font-size: 12px;color: #6b0505;background-color: #f4bfbf;margin: 5px 0 0 0; padding: 5px 10px;\">";
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo twig_escape_filter($this->env, $_error_, "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "        </div>

           <form id=\"feedback\" method=\"post\" class=\"input-k\">

            <div>
                <label>Имя<span class=\"asterisk\">*</span></label>
                <input type=\"text\" name=\"name\" value=\"";
        // line 24
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "name"), "html", null, true);
        echo "\">     <br />
                <label>E-mail<span class=\"asterisk\">*</span></label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 26
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "email"), "html", null, true);
        echo "\">  <br />
                <label>Компания</label>
                <input type=\"text\" name=\"company\" value=\"";
        // line 28
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "company"), "html", null, true);
        echo "\">  <br />
                <label>Должность</label>
                <input type=\"text\" name=\"dolj\" value=\"";
        // line 30
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "dolj"), "html", null, true);
        echo "\">  <br />
                <label>Телефон</label>
                <input type=\"text\" name=\"phone\" value=\"";
        // line 32
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "phone"), "html", null, true);
        echo "\">  <br />
                <label>Адрес почтовый</label>
                <input type=\"text\" name=\"pochta\" value=\"";
        // line 34
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "pochta"), "html", null, true);
        echo "\">  <br />
                <label>Тема письма<span class=\"asterisk\">*</span></label>
                <input type=\"text\" name=\"sub\" value=\"";
        // line 36
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "sub"), "html", null, true);
        echo "\">  <br />
                <label>Текстовая форма<span class=\"asterisk\">*</span></label>
                <textarea name=\"message\" rows=\"3\">";
        // line 38
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_data_, "message"), "html", null, true);
        echo "</textarea>
            </div>
        </form>



        <div class=\"btn-panel\">
        <input class=\"send-btn button\" name=\"submit\" value=\"Отправить\">

        </div>

        <div class=\"clearfix\"></div>
    </div>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.send-btn').click(function (e) {
                e.preventDefault();
                \$('#feedback').submit();
            });
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "site/contacts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 38,  120 => 36,  114 => 34,  108 => 32,  102 => 30,  96 => 28,  90 => 26,  84 => 24,  76 => 18,  66 => 16,  61 => 15,  50 => 8,  47 => 7,  40 => 5,  35 => 4,  32 => 3,  29 => 2,);
    }
}
