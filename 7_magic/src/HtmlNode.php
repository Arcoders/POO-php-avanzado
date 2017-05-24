<?php

namespace Arcoders;

class HtmlNode
{

    protected $tag;
    protected $content;
    protected $attributes = [];

    public function __construct($tag, $content = null, $attributes = [])
    {
        $this->tag = $tag;
        $this->content = $content;
        $this->attributes = $attributes;
    }

    public function __invoke($name, $default = null)
    {
        return $this->get($name, $default);
    }

    public function get($name, $default = null)
    {
        return $this->attributes[$name] ?? $default;
    }

    public function __toString()
    {
        return $this->render();
    }

    public static function __callStatic($method, array $args = [])
    {
        $content = $args[0] ?? null;

        $attributes = $arg[1] ?? [];

        return new HtmlNode($method, $content, $attributes);
    }

    public function __call($method, array $args = [])
    {

        if (! isset ($args[0])) {
            throw new \Exception("Arg empty {$method}");
        }

        $this->attributes[$method] = $args[0];

        return $this;
    }

    public function render()
    {
        $result = "<{$this->tag} {$this->renderAttributes()}>";

        if ($this->content != null) {
            $result .= $this->content;
            $result .= "</{$this->tag}>";
        }

        return $result;
    }

    protected function renderAttributes()
    {
        $result = "";

        foreach ($this->attributes as $name => $value) {
            $result .= sprintf(' %s="%s"', $name, $value);
        }

        return $result;
    }

}
