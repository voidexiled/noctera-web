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

/* library/cryptwarden.html.twig */
class __TwigTemplate_3e0ae2673d69326296714cbb0e1e7b36 extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\"> <a style=\"float: right;\" href=\"?subtopic=creatures&race=crystalspider\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a> <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=cryptshambler\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a> <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\"> <h2 style=\"float: right;\">Crypt Wardens</h2> <img src=\"images/library/cryptwarden.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\"> <p>Crypt Wardens are more aggressive than common <a href=\"?subtopic=creatures&race=lamassu\">Lamassus</a>.</p> <p>Crypt Wardens have 8300 hitpoints. They are strong against earth and holy damage. On the other hand, they are weak against death damage. These creatures can neither be summoned nor convinced. In addition, they are able to sense invisible creatures.</p> <p>Crypt Wardens yield 8400 experience points. They carry cyan crystal fragments, lamassu hooves, lamassu horns, platinum coins, small amethysts and sometimes other items with them.</p> </div></div>";
    }

    public function getTemplateName()
    {
        return "library/cryptwarden.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/cryptwarden.html.twig", "/var/www/html/system/templates/library/cryptwarden.html.twig");
    }
}
