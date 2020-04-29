<?php

function getRequestMethod(): string
{
    return $_SERVER['REQUEST_METHOD'];
}

function getGetParameter(string $arg): ?string
{
    return empty($_GET[$arg]) ? null : $_GET[$arg];
} 

function getPostParameter(string $arg): ?string
{
    return empty($_POST[$arg]) ? null : $_POST[$arg];
} 