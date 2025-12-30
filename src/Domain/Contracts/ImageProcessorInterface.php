<?php

namespace KamaThumb\Domain\Contracts;

interface ImageProcessorInterface
{
    /**
     * @param array{
     *     source_path: string,
     *     destination_path: string,
     *     width: int,
     *     height: int,
     *     crop: bool|array,
     *     quality: int,
     *     format?: string
     * } $params
     */
    public function process(array $params): bool;

    public function isAvailable(): bool;

    public function getSupportedFormats(): array;
}
