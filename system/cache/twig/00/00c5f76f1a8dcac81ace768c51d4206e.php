<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* library/misguidedmelee.html.twig */
class __TwigTemplate_b7e21abb981b690b166c9dbafbf3a05e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div style=\"position: relative; height: 15px; width: 100%;\">  <a style=\"float: right;\" href=\"?subtopic=creatures&race=misguidedranged\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a>  <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=minotaur\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a>  <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\">  <h2 style=\"float: right;\">Misguided Bullies</h2>  <img src=\"images/library/misguidedmelee.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\">  <p>The Misguided are members of a cult, worshipping power above all. Bullies, thiefs and all sorts of cutthroats are attracted by it. The true motives of their leader are unknown but none of them is up to any good. Watch your back when dealing with these individuals, the truly deceived are not to be trifled with.</p>  <p>Misguided Bullies have 2000 hitpoints. They cannot be paralyzed. Moreover, they are strong against earth, ice and physical damage. On the other hand, they are weak against holy damage. These creatures can neither be summoned nor convinced. In addition, they are able to sense invisible creatures.</p>  <p>Misguided Bullies yield 1200 experience points. They carry gold coins, meat, rubbish amulets and sometimes other items with them.</p>  </div></div>";
    }

    public function getTemplateName()
    {
        return "library/misguidedmelee.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/misguidedmelee.html.twig", "/var/www/html/system/templates/library/misguidedmelee.html.twig");
    }
}
