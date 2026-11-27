<?php

declare(strict_types=1);

class Siswa
{
    public function __construct(
        public string $nis,
        public string $nama,
    ) {
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    public function getNis(): string
    {
        return $this->nis;
    }
}
