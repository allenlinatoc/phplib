<?php


namespace Allenlinatoc\Config;


interface IConfigReader
{
    public function __construct($path, array $args = []);
    public function getPath(): string;
    public function load($path = null, array $args = []): void;
    public function read(): object;
}