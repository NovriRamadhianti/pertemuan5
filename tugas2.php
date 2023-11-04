<?php
$perusahaanTeknologi = array(
    "Perusahaan 1" => array(
        "Nama" => "Google",
        "Deskripsi" => " mesin pencari internet terkemuka yang juga mengembangkan produk seperti Android, Google Maps, dan Google Drive",
        "Lokasi" => "Mountain View, California",
        "Tahun Didirikan" => 1998,
        "Gambar" => "https://fonts.gstatic.com/s/i/productlogos/googleg/v6/24px.svg"
    ),
    "Perusahaan 2" => array(
        "Nama" => "Apple Inc.",
        "Deskripsi" => " perusahaan teknologi terkenal yang terkenal dengan produk seperti iPhone, iPad, dan MacBook. Mereka juga mengembangkan perangkat lunak seperti iOS dan macOS",
        "Lokasi" => "Cupertino, California",
        "Tahun Didirikan" => 1976,
        "Gambar" => "https://upload.wikimedia.org/wikipedia/commons/7/70/Logo_Apple.inc.gif"
    ),
    "Perusahaan 3" => array(
        "Nama" => "Microsoft",
        "Deskripsi" => "perusahaan perangkat lunak terkemuka dengan produk seperti Windows, Office, dan Azure. Mereka juga memproduksi perangkat keras seperti Xbox",
        "Lokasi" => "Redmond, Washington",
        "Tahun Didirikan" => 1975,
        "Gambar" => "https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg"
    ),
    "Perusahaan 4" => array(
        "Nama" => "Amazon",
        "Deskripsi" => "perusahaan e-commerce terbesar di dunia dan juga menyediakan layanan awan melalui Amazon Web Services (AWS)",
        "Lokasi" => "Seattle, Washington",
        "Tahun Didirikan" => 1994,
        "Gambar" => "https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg"
    ),
    "Perusahaan 5" => array(
        "Nama" => "Meta Platforms, Inc",
        "Deskripsi" => "perusahaan di balik jejaring sosial Facebook, Instagram, WhatsApp, dan Oculus VR",
        "Lokasi" => "Menlo Park, California",
        "Tahun Didirikan" => 2004,
        "Gambar" => "https://upload.wikimedia.org/wikipedia/commons/7/7b/Meta_Platforms_Inc._logo.svg"
    ),
    "Perusahaan 6" => array(
        "Nama" => "Samsung Elektronics Co., Ltd",
        "Deskripsi" => "Samsung adalah perusahaan teknologi asal Korea Selatan yang terkenal dengan produk elektronik, termasuk smartphone, televisi, dan peralatan rumah tangga",
        "Lokasi" => "seoul, korea selatan",
        "Tahun Didirikan" => 1983,
        "Gambar" =>"https://upload.wikimedia.org/wikipedia/commons/4/4e/Samsung_Electronics_logo_%28english%29.svg"
    ),
    "Perusahaan 7" => array(
        "Nama" => "IBM (International Business Machines Corporation)",
        "Deskripsi" => " perusahaan teknologi dengan sejarah panjang dalam komputasi dan layanan bisnis, termasuk komputer mainframe dan layanan kognitif",
        "Lokasi" => " Armonk, New York, AS",
        "Tahun Didirikan" => "1911" ,
        "Gambar" =>"https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg"
    ),
    "Perusahaan 8" => array(
        "Nama" => "Intel Corporation",
        "Deskripsi" => " produsen terkemuka mikroprosesor untuk komputer dan perangkat lainnya",
        "Lokasi" => " Santa Clara, California, AS",
        "Tahun Didirikan" => "1968" ,
        "Gambar" =>"https://upload.wikimedia.org/wikipedia/commons/8/85/Intel_logo_2023.svg"
    ),
    "Perusahaan 9" => array(
        "Nama" => "NVIDIA Corporation",
        "Deskripsi" => "NVIDIA fokus pada pengembangan unit pemrosesan grafis (GPU) untuk komputer dan perangkat yang memerlukan grafis tinggi ",
        "Lokasi" => "Santa Clara, California, AS ",
        "Tahun Didirikan" => "1993" ,
        "Gambar" =>"https://upload.wikimedia.org/wikipedia/sco/2/21/Nvidia_logo.svg"
    ),
    "Perusahaan 10" => array(
        "Nama" => "Tesla, Inc",
        "Deskripsi" => "produsen mobil listrik dan perusahaan energi terbarukan yang terkenal dengan mobil listrik Model S, Model 3, Model X, dan Model Y. ",
        "Lokasi" => "Palo Alto, California, AS ",
        "Tahun Didirikan" => "2003" ,
        "Gambar" =>"https://upload.wikimedia.org/wikipedia/commons/e/e8/Tesla_logo.png"
    ),


);

echo "<table border='1'>";
echo "<tr><th>No</th><th>Nama</th><th>Deskripsi</th><th>Lokasi</th><th>Tahun Didirikan</th><th>Gambar</th></tr>";
$nomor = 1;
foreach ($perusahaanTeknologi as $perusahaan) {
    echo "<tr>";
    echo "<td>$nomor</td>";
    echo "<td>" . $perusahaan["Nama"] . "</td>";
    echo "<td>" . $perusahaan["Deskripsi"] . "</td>";
    echo "<td>" . $perusahaan["Lokasi"] . "</td>";
    echo "<td>" . $perusahaan["Tahun Didirikan"] . "</td>";
    echo "<td><img src='" . $perusahaan["Gambar"] . "' alt='" . $perusahaan["Nama"] . "' width='100'></td>";
    echo "</tr>";
    $nomor++;
}
echo "</table>";
?>