<?php

namespace Laravel;

class HtmlBuilder
{

    public function hr()
    {
        return '<hr>';
    }

    // generear HTML...

    public function success($message)
    {
        return "<p style='background-color: #dff0d8;
                          border-color: #d0e9c6;
                          color: #3c763d;
                          padding: 10px'>
            {$message}
        </p>";
    }

}
