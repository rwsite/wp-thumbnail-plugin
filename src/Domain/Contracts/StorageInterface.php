<?php

namespace KamaThumb\Domain\Contracts;

interface StorageInterface
{
    public function exists(string $path): bool;

    public function put(string $path, string $contents): bool;

    public function get(string $path): string;

    public function delete(string $path): bool;

    public function url(string $path): string;

    public function path(string $relativePath): string;

    public function clearCache(): int;
}
