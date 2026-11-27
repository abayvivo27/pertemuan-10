<?php

declare(strict_types=1);

require_once __DIR__ . '/Siswa.php';

class Kelas
{
    /** @var Siswa[] */
    private array $daftarSiswa = [];

    public function __construct(
        public string $nama,
    ) {
    }

    public function tambahSiswa(Siswa $s): void
    {
        $this->daftarSiswa[] = $s;
    }

    public function jumlahSiswa(): int
    {
        return count($this->daftarSiswa);
    }

    /**
     * @return string[]
     */
    public function daftarNama(): array
    {
        $namaSiswa = [];
        foreach ($this->daftarSiswa as $siswa) {
            $namaSiswa[] = $siswa->getNama();
        }

        return $namaSiswa;
    }
}
