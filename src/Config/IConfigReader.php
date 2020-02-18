<?php


namespace Allenlinatoc\Config;


interface IConfigReader
{
    public function __construct($path, array $args = null);
    public function getPath(): string;
    public function load($path = null, array $args = null): void;
    public function read(): array;
}