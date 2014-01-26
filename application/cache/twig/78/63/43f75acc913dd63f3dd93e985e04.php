<?php

/* site/contacts.twig */
class __TwigTemplate_786343f75acc913dd63f3dd93e985e04 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "meta_keywords"), "html", null, true);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "meta_description"), "html", null, true);
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 16
            echo "                <div style=\"font-size: 12px;color: #6b0505;background-color: #f4bfbf;margin: 5px 0 0 0; padding: 5px 10px;\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name"), "html", null, true);
        echo "\">     <br />
                <label>E-mail<span class=\"asterisk\">*</span></label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "email"), "html", null, true);
        echo "\">  <br />
                <label>Компания</label>
                <input type=\"text\" name=\"company\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "company"), "html", null, true);
        echo "\">  <br />
                <label>Должность</label>
                <input type=\"text\" name=\"dolj\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "dolj"), "html", null, true);
        echo "\">  <br />
                <label>Телефон</label>
                <input type=\"text\" name=\"phone\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "phone"), "html", null, true);
        echo "\">  <br />
                <label>Адрес почтовый</label>
                <input type=\"text\" name=\"pochta\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pochta"), "html", null, true);
        echo "\">  <br />
                <label>Тема письма<span class=\"asterisk\">*</span></label>
                <input type=\"text\" name=\"sub\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "sub"), "html", null, true);
        echo "\">  <br />
                <label>Текстовая форма<span class=\"asterisk\">*</span></label>
                <textarea name=\"message\" rows=\"3\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "message"), "html", null, true);
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
        return array (  115 => 38,  110 => 36,  105 => 34,  100 => 32,  95 => 30,  90 => 28,  85 => 26,  80 => 24,  72 => 18,  63 => 16,  59 => 15,  48 => 8,  45 => 7,  39 => 5,  35 => 4,  32 => 3,  29 => 2,);
    }
}
