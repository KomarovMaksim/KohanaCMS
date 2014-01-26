<?php

/* site/newsletter.twig */
class __TwigTemplate_984d38bd391a88ac6409c1c2f9ba2def extends Twig_Template
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
        echo "    <title>Греция. Вечная Классика | Рассылка</title>
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

             <div class=\"errors\">
              ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 13
            echo "                <div style=\"font-size: 12px;color: #6b0505;background-color: #f4bfbf;margin: 5px 0 0 0; padding: 5px 10px;\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "        </div>

           <form id=\"feedback\" method=\"post\" class=\"input-k\">

            <!--<div>
                <label>Имя<span class=\"asterisk\">*</span></label>
                <input type=\"text\" name=\"name\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name"), "html", null, true);
        echo "\">     <br />
                <label>E-mail<span class=\"asterisk\">*</span></label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "email"), "html", null, true);
        echo "\">  <br />
                <label>Компания</label>
                <input type=\"text\" name=\"company\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "company"), "html", null, true);
        echo "\">  <br />
                <label>Должность</label>
                <input type=\"text\" name=\"dolj\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "dolj"), "html", null, true);
        echo "\">  <br />
                <label>Телефон</label>
                <input type=\"text\" name=\"phone\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "phone"), "html", null, true);
        echo "\">  <br />
                <label>Адрес почтовый</label>
                <input type=\"text\" name=\"pochta\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "pochta"), "html", null, true);
        echo "\">  <br />
                <label>Тема письма<span class=\"asterisk\">*</span></label>
                <input type=\"text\" name=\"sub\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "sub"), "html", null, true);
        echo "\">  <br />
                <label>Текстовая форма<span class=\"asterisk\">*</span></label>
                <textarea name=\"message\" rows=\"3\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "message"), "html", null, true);
        echo "</textarea>
            </div>-->
            <div>
                <label>Обращение</label>
                <div class=\"inp-block\">
                    <select name=\"title\">
                        <option>Выберите</option>
                        <option>Мисс</option>
                        <option>Миссис</option>
                        <option>Мистер</option>
                    </select>
                </div><br />
                <label>Имя<span class=\"asterisk\">*</span></label>
                <input type=\"text\" name=\"first_name\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "first_name"), "html", null, true);
        echo "\">  <br />
                <label>Фамилия</label>
                <input type=\"text\" name=\"last_name\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "last_name"), "html", null, true);
        echo "\">  <br />
                <label>E-mail<span class=\"asterisk\">*</span></label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "email"), "html", null, true);
        echo "\">  <br />

                <label>Контакты</label>
                <div class=\"inp-block\">
                    <ul>
                        <li>
                            <label>Улица</label>
                            <input type=\"text\" name=\"street\">
                        </li>
                        <li>
                            <label>Город</label>
                            <input type=\"text\" name=\"city\">
                        </li>
                        <li>
                            <label>Индекс</label>
                            <input type=\"text\" name=\"postal_code\">
                        </li>
                        <li>
                            <label>Страна</label>
                            <select name=\"country\">
                                <option>Выберите страну</option>
                                <option>Россия</option>
                                <option>Украина</option>
                                <option>Белоруссия</option>
                                <option>Казахстан</option>
                                <option>Греция</option>
                                <option>Другое</option>
                            </select>
                        </li>
                    </ul>
                </div>
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
        return "site/newsletter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 52,  133 => 50,  128 => 48,  112 => 35,  107 => 33,  102 => 31,  97 => 29,  92 => 27,  87 => 25,  82 => 23,  77 => 21,  69 => 15,  60 => 13,  56 => 12,  48 => 8,  45 => 7,  39 => 5,  35 => 4,  32 => 3,  29 => 2,);
    }
}
