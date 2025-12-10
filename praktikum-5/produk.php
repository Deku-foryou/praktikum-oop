<?php

class Produk
{

   protected string $nama;
   protected int $harga;

   public function __construct(string $nama, int $harga)
   {
      $this->nama = $nama;
      $this->harga = $harga;
   }

   public function getHarga(): int
   {
      return $this->harga;
   }
}

class ProdukDiskon extends Produk
{
    protected float $diskonUtama;   // diskon 1
    protected float $diskonMember;  // diskon 2

   public function __construct(
      string $nama,
      int $harga,
      float $diskonUtama, 
      float $diskonMember
      )
   {
      parent::__construct($nama, $harga);
      $this->diskonUtama  = $diskonUtama;
      $this->diskonMember = $diskonMember;
   }

   public function getHarga(): int
   {
       $harga = parent::getHarga();

        // Diskon 1: Diskon Utama
        $harga = $harga * (1 - $this->diskonUtama);

        // Diskon 2: Diskon Member
        $harga = $harga * (1 - $this->diskonMember);

        return (int) $harga;
   }
}

class ProdukPromo extends ProdukDiskon {
    private float $diskonPromo; // diskon tambahan

    public function __construct(
        string $nama,
        int $harga,
        float $diskonUtama,
        float $diskonMember,
        float $diskonPromo
    ) {
        parent::__construct($nama, $harga, $diskonUtama, $diskonMember);
        $this->diskonPromo = $diskonPromo;
    }

    public function getHarga(): int {
        $hargaSetelahDiskon = parent::getHarga();

        // Diskon tambahan promo
        $hargaPromo = $hargaSetelahDiskon * (1 - $this->diskonPromo);

        return (int) $hargaPromo;
    }
}


$produk1 = new ProdukDiskon("Sepatu", 1000000, 0.10, 0.05);
$produk2 = new ProdukPromo("Laptop", 10000000, 0.10, 0.05, 0.10);

echo "Harga Sepatu (2 diskon): Rp" . $produk1->getHarga() . "\n";
echo "Harga Laptop (3 diskon): Rp" . $produk2->getHarga() . "\n";
